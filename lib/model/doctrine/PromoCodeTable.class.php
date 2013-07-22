<?php

/**
 * PromoCodeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PromoCodeTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PromoCodeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PromoCode');
    }
    
    /**
    * @return PromoCode
    */
    public function getByCode($code)
    {
    	$q = $this->createQuery('p');
    	$q->addWhere('p.code = ?', $code);
    	 
    	return $q->fetchOne();
    }
    
    /**
     * @return PromoCode
     */
    public function getOrCreateByCode($code)
    {
    	$promoCode = $this->getByCode($code);
    	 
    	if(!$promoCode)
    	{
    		$promoCode = new PromoCode();
    		$promoCode->setCode($code);
    		$promoCode->save();
    	}
    	 
    	return $promoCode;
    }
}