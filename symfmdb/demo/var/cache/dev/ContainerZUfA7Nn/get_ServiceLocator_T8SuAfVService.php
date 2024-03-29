<?php

namespace ContainerZUfA7Nn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T8SuAfVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T8SuAfV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T8SuAfV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'movieRepository' => ['privates', 'App\\Repository\\MovieRepository', 'getMovieRepositoryService', true],
        ], [
            'movieRepository' => 'App\\Repository\\MovieRepository',
        ]);
    }
}
