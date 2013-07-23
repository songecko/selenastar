<?php

/**
 * DoTweet form.
 *
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DoTweetForm extends sfForm
{
	public function configure()
	{
		$this->setWidget('text', new sfWidgetFormTextarea());
		$this->setWidget('picture', new sfWidgetFormInputFile());
		
		$this->setValidator('text', new sfValidatorString());
		$this->setValidator('picture', new sfValidatorFile());
		
		$this->setDefault('text', '#EstrenoStarsDanceAr ');
		
		$this->widgetSchema->setNameFormat('do_tweet[%s]');
	}
}
