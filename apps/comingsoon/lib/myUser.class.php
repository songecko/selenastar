<?php

class myUser extends sfGuardSecurityUser
{
	public function hasProfile()
	{
		return ($this->getGuardUser() && $this->getGuardUser()->Profile && $this->getGuardUser()->Profile->getDni());
	}
	
	public function hasTwitter()
	{
		return ($this->getGuardUser() && $this->getGuardUser()->Profile && $this->getGuardUser()->Profile->getTwitterUsername());
	}
	
	public function isAuthenticated()
	{
		if(parent::isAuthenticated())
		{
			$access_token = $this->getAttribute('access_token');
			
			if(empty($access_token) || empty($access_token['oauth_token']) || empty($access_token['oauth_token_secret']))
			{
				return false;
			}
			
			/* Create a TwitterOauth object with consumer/user tokens. */
			$connection = new TwitterOAuth(sfConfig::get('app_twitter_consumer_key'), sfConfig::get('app_twitter_consumer_secret'), $access_token['oauth_token'], $access_token['oauth_token_secret']);
			
			/* If method is set change API call made. Test is called by default. */
			$credentials = $connection->get('account/verify_credentials');
			
			return ($credentials)?true:false;
		}
		
		return false;
	}
}
