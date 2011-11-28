<?php
/**
*4 nov. 2011 12:58:20
*/

abstract class Ip_Test_TestCase extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->application =  new Zend_Application('testing', APPLICATION_PATH . '/Core/configs/application.ini');
        $this->application->bootstrap();
        $this->bootstrap =$this->application->getBootstrap();
        $fc = $this->bootstrap->getResource('FrontController');
        $fc->setParam('bootstrap',$this->bootstrap );
        parent::setUp();
    }
}