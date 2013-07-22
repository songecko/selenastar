<?php

/**
 * home actions.
 *
 * @package    quieroeldiscorolling
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
	public function preExecute()
	{
		/*if($this->getUser()->hasFlash('success'))
		{
			$this->success = $this->getUser()->getFlash('success');
		}
		if($this->getUser()->hasFlash('error'))
		{
			$this->error = $this->getUser()->getFlash('error');
		}*/
	}
	
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request)
	{	
		/*$isMobile = (preg_match('#^(?!.*iPad).*(Mobile|Jasmine|Symbian|NetFront|BlackBerry|Opera Mini|Opera Mobi).*$#i', $request->getHttpHeader('User-Agent')) && !$this->getUser()->getAttribute('fullversion', false));
		if ($isMobile)
		{
			$this->setLayout('mobile_layout');
				
			if(!$this->getUser()->isAuthenticated())
			{
				return 'LoginMobile';
			}else{
				return 'SuccessMobile';
			}
		}*/
	}
	
	public function executeParticipate(sfWebRequest $request)
	{
		
	}
	
	public function executeFullVersion(sfWebRequest $request)
	{
		$this->getUser()->setAttribute('fullversion', true);	
		
		$this->redirect($this->generateUrl('homepage'));
	}
	
	public function executeSendPromoCode(sfWebRequest $request)
	{
		$this->user = $this->getUser()->getGuardUser();
		$this->promoCodeForm = new PromoCodeForm();
		
		if($request->isMethod('post'))
		{
			$this->promoCodeForm->bind($request->getParameter($this->promoCodeForm->getName()));
			if ($this->promoCodeForm->isValid())
			{
				$values = $this->promoCodeForm->getValues();
		
				$promoCode = PromoCodeTable::getInstance()->getByCode($values['code']);
				if($promoCode) //Si el codigo existe
				{
					$anyUserHasPromoCode = UserPromoCodeTable::getInstance()->getByPromoCode($promoCode->getId());
					if(!$anyUserHasPromoCode) //Si el codigo no fue cargado ya por algun usuario
					{
						try
						{
							//Cargamos el codigo al usuario
							$userHasPromoCode = new UserPromoCode();
							$userHasPromoCode->setUser($this->user);
							$userHasPromoCode->setPromoCode($promoCode);
				
							$userHasPromoCode->save();
				
							//Add points
							$this->user->Profile->setPoints($this->user->Profile->getPoints() + sfConfig::get('app_points_for_code'));
							$this->user->save();
								
							$this->getUser()->setFlash('success', 'C&oacute;digo ingresado correctamente, has sumado '.sfConfig::get('app_points_for_code').' cent&iacute;metros');								
							
						} catch (Doctrine_Exception $e)
						{
							$this->getUser()->setFlash('error', 'Hubo un problema al cargar el c&oacute;digo, vuelva a intentarlo mas tarde.');
						}
					}else
					{
						$this->getUser()->setFlash('error', 'C&oacute;digo ya ingresado previamente.');
					}
				}else
				{
					$this->getUser()->setFlash('error', 'El c&oacute;digo ingresado no es v&aacute;lido.');
				}
			}else
			{
				$this->getUser()->setFlash('error', 'El c&oacute;digo ingresado no es v&aacute;lido.');
			}		
		}
		
		$this->redirect($this->generateUrl('homepage'));
	}
}
