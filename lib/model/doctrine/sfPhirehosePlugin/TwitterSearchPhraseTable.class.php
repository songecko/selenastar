<?php

/**
 * TwitterSearchPhraseTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TwitterSearchPhraseTable extends PluginTwitterSearchPhraseTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TwitterSearchPhraseTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TwitterSearchPhrase');
    }
}