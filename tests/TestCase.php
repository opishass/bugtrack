<?php
/**
*4 nov. 2011 12:58:20
*/

abstract class TestCase extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->application =  new Zend_Application('testing', APPLICATION_PATH . '/Core/configs/application.ini');
        $this->bootstrap =$this->application->bootstrap();
        $fc = $this->bootstrap->getResource('frontController');
        $fc->setParam('bootstrap',$this->bootstrap );
        parent::setUp();
    }
}