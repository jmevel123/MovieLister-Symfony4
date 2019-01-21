<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'App\\Controller\\BlogController::delete_comment' => array('privates', '.service_locator.x4pvvfz', 'get_ServiceLocator_X4pvvfzService.php', true),
    'App\\Controller\\BlogController::form' => array('privates', '.service_locator.dCQAFnu', 'get_ServiceLocator_DCQAFnuService.php', true),
    'App\\Controller\\BlogController::index' => array('privates', '.service_locator.HN0lSHt', 'get_ServiceLocator_HN0lSHtService.php', true),
    'App\\Controller\\BlogController::show' => array('privates', '.service_locator.rrvz0uA', 'get_ServiceLocator_Rrvz0uAService.php', true),
    'App\\Controller\\SecurityController::delete_user' => array('privates', '.service_locator..NmEFk5', 'get_ServiceLocator__NmEFk5Service.php', true),
    'App\\Controller\\SecurityController::edit_user' => array('privates', '.service_locator.Pu8KG5q', 'get_ServiceLocator_Pu8KG5qService.php', true),
    'App\\Controller\\SecurityController::register' => array('privates', '.service_locator.czKK4py', 'get_ServiceLocator_CzKK4pyService.php', true),
    'App\\Controller\\BlogController:delete_comment' => array('privates', '.service_locator.x4pvvfz', 'get_ServiceLocator_X4pvvfzService.php', true),
    'App\\Controller\\BlogController:form' => array('privates', '.service_locator.dCQAFnu', 'get_ServiceLocator_DCQAFnuService.php', true),
    'App\\Controller\\BlogController:index' => array('privates', '.service_locator.HN0lSHt', 'get_ServiceLocator_HN0lSHtService.php', true),
    'App\\Controller\\BlogController:show' => array('privates', '.service_locator.rrvz0uA', 'get_ServiceLocator_Rrvz0uAService.php', true),
    'App\\Controller\\SecurityController:delete_user' => array('privates', '.service_locator..NmEFk5', 'get_ServiceLocator__NmEFk5Service.php', true),
    'App\\Controller\\SecurityController:edit_user' => array('privates', '.service_locator.Pu8KG5q', 'get_ServiceLocator_Pu8KG5qService.php', true),
    'App\\Controller\\SecurityController:register' => array('privates', '.service_locator.czKK4py', 'get_ServiceLocator_CzKK4pyService.php', true),
))), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
