<?php

/**
 * TaskLogTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TaskLogTable extends PluginTaskLogTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TaskLogTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TaskLog');
    }
}