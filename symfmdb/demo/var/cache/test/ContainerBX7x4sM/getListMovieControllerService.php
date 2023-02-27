<?php

namespace ContainerBX7x4sM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListMovieControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\ListMovieController' shared autowired service.
     *
     * @return \App\Controller\ListMovieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ListMovieController.php';

        $container->services['App\\Controller\\ListMovieController'] = $instance = new \App\Controller\ListMovieController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ListMovieController', $container));

        return $instance;
    }
}
