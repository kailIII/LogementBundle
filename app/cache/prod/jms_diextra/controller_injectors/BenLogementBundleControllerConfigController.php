<?php

namespace Ben\LogementBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ConfigController__JMSInjector
{
    public static function inject($container) {
        require_once 'C:/wamp/www/logement/app/cache/prod/jms_diextra/proxies/Ben-LogementBundle-Controller-ConfigController.php';
        $d = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Ben\\LogementBundle\\Controller\\ConfigController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxyc1729f3f_a20d6c6be37f0679870306ea0c686609d5902e63\__CG__\Ben\LogementBundle\Controller\ConfigController();
        $instance->__CGInterception__setLoader($d);
        return $instance;
    }
}
