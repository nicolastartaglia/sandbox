<?php

namespace ContainerN3rdXqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IqyAD4IService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.iqyAD4I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iqyAD4I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'movie' => ['privates', '.errored..service_locator.iqyAD4I.App\\Entity\\Movie', NULL, 'Cannot autowire service ".service_locator.iqyAD4I": it references class "App\\Entity\\Movie" but no such service exists.'],
            'movieRepository' => ['privates', 'App\\Repository\\MovieRepository', 'getMovieRepositoryService', true],
        ], [
            'movie' => 'App\\Entity\\Movie',
            'movieRepository' => 'App\\Repository\\MovieRepository',
        ]);
    }
}
