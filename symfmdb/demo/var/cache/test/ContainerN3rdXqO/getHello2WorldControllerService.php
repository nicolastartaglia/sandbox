<?php

namespace ContainerN3rdXqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHello2WorldControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Hello2WorldController' shared autowired service.
     *
     * @return \App\Controller\Hello2WorldController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Hello2WorldController.php';

        $container->services['App\\Controller\\Hello2WorldController'] = $instance = new \App\Controller\Hello2WorldController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Hello2WorldController', $container));

        return $instance;
    }
}