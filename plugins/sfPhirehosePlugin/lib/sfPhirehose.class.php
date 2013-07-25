<?php
class sfPhirehose extends OauthPhirehose
{
  public $task;
  
  private $phrases;
  
  /**
   * Overload and extend Phirehose's constructor to also hydrate the 
   * ResidentCollection and store it as an object property
   *
   * @param string $username Twitter API User
   * @param string $password Twitter API Password
   * @param const Phirehose::METHOD_*
   * @param const Phirehose::FORMAT_*
   * @return null
   **/
  public function __construct($username, $password, $method = Phirehose::METHOD_SAMPLE, $format = self::FORMAT_JSON)
  {
    $this->phrases = sfConfig::get('app_phirehose_track', array());
    $return = parent::__construct($username, $password, $method, $format);
    $this->consumerKey = sfConfig::get('app_twitter_consumer_key');
    $this->consumerSecret = sfConfig::get('app_twitter_consumer_secret');
    
    return $return;
  }

  /**
   * Get the search phrases to search against
   *
   * @return array
   * @author Ben Lancaster
   **/
  protected function getSearchPhrases()
  {
    // This'll give us a multidimensional array, which is well annoying
    $md_phrases = Doctrine::getTable('TwitterSearchPhrase')
                ->createQuery('s')
                ->select('s.phrase AS phrase')
                ->execute(null,Doctrine::HYDRATE_SINGLE_SCALAR);
    
    if(!is_array($md_phrases))
    {
      $md_phrases = array($md_phrases);
    }
    
    return $md_phrases;
  }
  
  /**
   * Spits out an array of numeric twitter user ids of the users whose tweets
   * we'll be following
   *
   * @return array
   * @author Ben Lancaster
   **/
  protected function getFollows()
  {
    return sfConfig::get('app_phirehose_follow',array());
  }
  
  /**
   * Phirehose calls this method periodically, which sets the search terms to 
   * track and the users to follow from self::getFollows() and
   * self::getSearchPhrases()
   *
   * @return void
   * @see self::getSearchPhrases(), self:::getFollows()
   * @author Ben Lancaster
   **/
  public function checkFilterPredicates()
  {
    $this->log("Checking search terms and users to follow");

    $this->setTrack(
      array_unique(array_merge($this->getSearchPhrases(),$this->phrases))
    );

    $this->setFollow(
      array_unique(array_merge(sfConfig::get('app_phirehose_follow',array()),$this->getFollows()))
    );
  }

  /**
   * Takes a raw JSON-serialised Tweet from the Twitter Firehose and creates a 
   * new Doctrine Tweet object from it
   *
   * @return void
   * @author Ben Lancaster
   **/
  public function enqueueStatus($raw)
  {
    try
    {
		$data = json_decode($raw, true);
      
		$this->log("-- TWEET: Hashtag Match");
		
		if(strpos($data['text'], "http://t.co") === false)
		{
			$this->log("-- TWEET: The Tweet does not have image.");
			return;
		}
		
		// Create a new Tweet object from the JSON data
		$tweet = Tweet::hydrateFromDecodedResponse($data);
		if(!$tweet)
		{
			$this->log("-- TWEET: Problem fetching Tweet.");
			return;
		}
		
		//Check if we have a screen_name
		$screenName = $data['user']['screen_name']?$data['user']['screen_name']:false;
		if(!$screenName)
		{
			return;
		}
		
		//Check if the user is already participating
		$user = sfGuardUserTable::getInstance()->retrieveOrCreateGuardUserByTwitterUsername($screenName, $data['user']['profile_image_url']);
		if(!$user/* || $user->getIsActive()*/)
		{	
			$this->log("-- TWEET: User ".$screenName." is participating.");
			return;		
		}			
        $tweet->setUserId($user->getId());
        
        //Check if the user follow UMArgentina
        if(!$user->isFollowingUser('47664469'))
        {
        	$this->log("-- TWEET: User not following UMArgentina.");
        	return;
        }
		
		try {		        
			$tweet->save();
			$tweet->free(); // this helps minimise memory leakage.
			$this->log("-- TWEET: Saved!");        			
        }catch (Doctrine_Exception $e)
		{
			$this->log("-- TWEET ERROR: ".$e->getMessage());
		}
    }
    catch(Exception $e)
    {
      $this->task->logSection(get_class($e),
        sprintf("%s on line %u of %s",$e->getMessage(),$e->getLine(),$e->getFile())
      );
    }
  }

  public function log($message,$level='notice')
  {
    $this->task->logSection('Phirehose',$message);
    $this->task->logSection('Memory',
      sprintf("Usage: %uM (current), %uM (peak)",
        round(memory_get_usage() / 1024 / 1024),
        round(memory_get_peak_usage() / 1024 / 1024)
      )
    );
  }
}
