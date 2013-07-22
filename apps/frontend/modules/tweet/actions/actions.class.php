<?php

/**
 * tweet actions.
 *
 * @package    quieroeldiscorolling
 * @subpackage tweet
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tweetActions extends sfActions
{
	public function executeSend(sfWebRequest $request)
	{
		$user = $this->getUser()->getGuardUser();
		$tweet = new Tweet();
		$tweet->user = $user;
		
		$this->form = new TweetForm($tweet);
		if($request->isMethod('post'))
		{
			$this->form->bind($request->getParameter($this->form->getName()));
			if ($this->form->isValid())
			{
				try {
					$values = $this->form->getValues();
					
					$tweet->setText($values['text']);
					
					$twResponse = $user->publishPost($tweet->getText());
					if($twResponse)
					{
						$this->getUser()->setFlash('success', 'El tweet se ha enviado con &eacute;xito, has sumado '.sfConfig::get('app_points_for_tweet').' cent&iacute;metros.');

						//Guardo el tweet por si el levantador de tweets no funciona
						/*$tweet->setTwitterGuid($twResponse->id_str);
						$tweet->setTwitterUserId($twResponse->user->id);
						$tweet->save();*/			
					}else
					{
						$tweet->delete();
						$this->getUser()->setFlash('error', 'Se produjo un error al enviar el tweet, por favor intentelo nuevamente.');
					}
				}catch (Exception $e)
				{
				}
			}
		}
		
		$this->redirect($this->generateUrl('homepage'));
	}
}
