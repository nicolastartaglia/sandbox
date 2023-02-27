<?php

namespace ContainerN3rdXqO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_NativePhpSerializerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.transport.native_php_serializer' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/PhpSerializer.php';

        return $container->privates['messenger.transport.native_php_serializer'] = new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer();
    }
}
