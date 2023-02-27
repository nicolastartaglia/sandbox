<?php

namespace ContainerN3rdXqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__EpLL5aService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator..epLL5a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..epLL5a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CreateMovieController::create' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\ListMovieController::index' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\LoadMoviesController::index' => ['privates', '.service_locator.gGrR46k', 'get_ServiceLocator_GGrR46kService', true],
            'App\\Controller\\ShowMovieController::index' => ['privates', '.service_locator.iqyAD4I', 'get_ServiceLocator_IqyAD4IService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\CreateMovieController:create' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\ListMovieController:index' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\LoadMoviesController:index' => ['privates', '.service_locator.gGrR46k', 'get_ServiceLocator_GGrR46kService', true],
            'App\\Controller\\ShowMovieController:index' => ['privates', '.service_locator.iqyAD4I', 'get_ServiceLocator_IqyAD4IService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\CreateMovieController::create' => '?',
            'App\\Controller\\ListMovieController::index' => '?',
            'App\\Controller\\LoadMoviesController::index' => '?',
            'App\\Controller\\ShowMovieController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CreateMovieController:create' => '?',
            'App\\Controller\\ListMovieController:index' => '?',
            'App\\Controller\\LoadMoviesController:index' => '?',
            'App\\Controller\\ShowMovieController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
