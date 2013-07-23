<?php

class homeComponents extends sfComponents
{
	public function executeHeader(sfWebRequest $request)
	{
		$this->user = $this->getUser()->getGuardUser();
		
		switch ($this->module)
		{
			case 'tweet':
				$this->indicatorClass = 'indicadorTwitear';
				break;
			case 'ranking':
				$this->indicatorClass = 'indicadorRanking';
				break;
			case 'premios':
				$this->indicatorClass = 'indicadorPremios';
				break;
			case 'grrr':
				$this->indicatorClass = 'indicadorGrrr';
				break;
			default:
				$this->indicatorClass = 'indicadorTwitear';
				break;
		}
	}
	
	public function executeAlbum(sfWebRequest $request)
	{
		$this->users = sfGuardUserTable::getInstance()->getUsersWithTwitter();
	}
}
