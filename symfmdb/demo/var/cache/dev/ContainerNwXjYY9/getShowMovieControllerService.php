<?php

namespace ContainerNwXjYY9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShowMovieControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ShowMovieController' shared autowired service.
     *
     * @return \App\Controller\ShowMovieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ShowMovieController.php';

        $container->services['App\\Controller\\ShowMovieController'] = $instance = new \App\Controller\ShowMovieController(($container->privates['App\\Omdb\\OmdbGateway'] ?? $container->load('getOmdbGatewayService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ShowMovieController', $container));

        return $instance;
    }
}
