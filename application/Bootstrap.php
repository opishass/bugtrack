<?php 


class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initRouter()
    {
        $router = Zend_Controller_Front::getInstance()->getRouter();
        $routeConfig = new Zend_Config_Ini( CONFIG_PATH . DS . 'routes.ini', 'production');
        $router->addConfig($routeConfig, 'routes');
    }
    
    protected function _initNavigation()
    {
        $navConfig = new Zend_Config_Xml( CONFIG_PATH . DS . 'navigation.xml', 'main');
        $navigation = new Zend_Navigation($navConfig);
        Zend_Registry::set('navigation', $navigation);
  
    }
}