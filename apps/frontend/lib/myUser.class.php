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
}
