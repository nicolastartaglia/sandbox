<?php

namespace ContainerBX7x4sM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Failure_AddErrorDetailsStampListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.failure.add_error_details_stamp_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\AddErrorDetailsStampListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/AddErrorDetailsStampListener.php';

        return $container->privates['messenger.failure.add_error_details_stamp_listener'] = new \Symfony\Component\Messenger\EventListener\AddErrorDetailsStampListener();
    }
}
