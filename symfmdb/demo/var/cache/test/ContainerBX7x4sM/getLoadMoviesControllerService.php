<?php

namespace ContainerBX7x4sM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoadMoviesControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\LoadMoviesController' shared autowired service.
     *
     * @return \App\Controller\LoadMoviesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LoadMoviesController.php';

        $container->services['App\\Controller\\LoadMoviesController'] = $instance = new \App\Controller\LoadMoviesController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\LoadMoviesController', $container));

        return $instance;
    }
}
