<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator..NmEFk5' shared service.

return $this->privates['.service_locator..NmEFk5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'manager' => array('services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true),
    'user' => array('privates', '.errored..service_locator..NmEFk5.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator..NmEFk5": it references class "App\\Entity\\User" but no such service exists.'),
));