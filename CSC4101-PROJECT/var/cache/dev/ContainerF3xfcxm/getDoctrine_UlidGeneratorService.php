<?php

namespace ContainerF3xfcxm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_UlidGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.ulid_generator' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Id/AbstractIdGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/IdGenerator/UlidGenerator.php';

        return $container->privates['doctrine.ulid_generator'] = new \Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator(NULL);
    }
}
