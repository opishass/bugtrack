<?php

class ShopTest extends Ip_Test_TestCase
{
//    protected $_application;
    /**
     * Prepares the environment before running a test.
     */
    public function setUp()
    {
        parent::setUp();
    }
    
    
    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        parent::tearDown();
    }
    /**
     * Constructs the test case.
     */
    public function __construct()
    {
    }
    /**
     * Tests authenticate - real identity
     */
    public function testFindProductShouldReturnProductObject()
    {
        $service = new Core_Service_Shop();
        $this->assertInstanceOf('Core_Model_Product', $service->findProduct(1));
    }
    
}


