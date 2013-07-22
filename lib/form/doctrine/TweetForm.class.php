<?php

/**
 * Tweet form.
 *
 * @package    quieroeldiscorolling
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TweetForm extends BaseTweetForm
{
	public function configure()
	{
		$this->useFields(array('user_id', 'text'));
		 
		$this->setWidget('user_id', new sfWidgetFormInputHidden());
		$this->setWidget('text', new sfWidgetFormInputHidden());
		$this->setWidget('text', new sfWidgetFormTextarea());
		
		$this->setDefault('text', '#quieroeldiscodelosrolling ');
	}
}
