<?php

namespace Ben\LogementBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ReservationController__JMSInjector
{
    public static function inject($container) {
        require_once 'C:/wamp/www/logement/app/cache/prod/jms_diextra/proxies/Ben-LogementBundle-Controller-ReservationController.php';
        $h = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Ben\\LogementBundle\\Controller\\ReservationController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'showAction' => array(0 => 'security.access.method_interceptor'), 'newAction' => array(0 => 'security.access.method_interceptor'), 'createAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'deleteAction' => array(0 => 'security.access.method_interceptor'), 'setStatusAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxyc1729f3f_4e652490c60cbf5f58509fab95e009522e766ec6\__CG__\Ben\LogementBundle\Controller\ReservationController();
        $instance->__CGInterception__setLoader($h);
        return $instance;
    }
}
