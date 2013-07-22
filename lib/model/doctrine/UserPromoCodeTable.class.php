<?php

/**
 * UserPromoCodeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class UserPromoCodeTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object UserPromoCodeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('UserPromoCode');
    }
    
    public function getByUserAndPromoCode($userId, $promoCodeId)
    {
    	$q = $this->createQuery('up');
    	$q->addWhere('up.user_id = ?', $userId);
    	$q->addWhere('up.promo_code_id = ?', $promoCodeId);
    
    	return $q->fetchOne();
    }
    
    public function getByPromoCode($promoCodeId)
    {
    	$q = $this->createQuery('up');
    	$q->addWhere('up.promo_code_id = ?', $promoCodeId);
    
    	return $q->fetchOne();
    }
}