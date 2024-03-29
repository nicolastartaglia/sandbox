<?php

namespace ContainerN3rdXqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GGrR46kService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.gGrR46k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gGrR46k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'genreRepository' => ['privates', 'App\\Repository\\GenreRepository', 'getGenreRepositoryService', true],
            'movieRepository' => ['privates', 'App\\Repository\\MovieRepository', 'getMovieRepositoryService', true],
        ], [
            'genreRepository' => 'App\\Repository\\GenreRepository',
            'movieRepository' => 'App\\Repository\\MovieRepository',
        ]);
    }
}
