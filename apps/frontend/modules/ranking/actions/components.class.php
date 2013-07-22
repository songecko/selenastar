<?php

class rankingComponents extends sfComponents
{
	public function executeIndex(sfWebRequest $request)
	{
		$this->promoCodeForm = new PromoCodeForm();
		
		$this->rankingUsers = sfGuardUserTable::getInstance()->getRankingUsers(15);
	}
}
