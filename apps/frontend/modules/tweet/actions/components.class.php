<?php

class tweetComponents extends sfComponents
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->user = $this->getUser()->getGuardUser();
		
		$tweet = new Tweet();
		$tweet->user = $this->user;		
		$this->form = new TweetForm($tweet);
		
		$this->rankingUsers = sfGuardUserTable::getInstance()->getRankingUsers(5);
	}
}
