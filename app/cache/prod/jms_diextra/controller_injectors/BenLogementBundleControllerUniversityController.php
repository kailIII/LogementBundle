<?php

namespace Ben\LogementBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class UniversityController__JMSInjector
{
    public static function inject($container) {
        require_once 'C:/wamp/www/logement/app/cache/prod/jms_diextra/proxies/Ben-LogementBundle-Controller-UniversityController.php';
        $j = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Ben\\LogementBundle\\Controller\\UniversityController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'jsonListAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'), 'toExcelAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxyc1729f3f_55a949fc47ac7b8aa0c61152abd90cab21a05df2\__CG__\Ben\LogementBundle\Controller\UniversityController();
        $instance->__CGInterception__setLoader($j);
        return $instance;
    }
}
