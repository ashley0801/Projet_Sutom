<?php

namespace ContainerUGhxPy2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X_Rs099Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.x.rs099' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.x.rs099'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'likeRepository' => ['privates', 'App\\Repository\\LikeRepository', 'getLikeRepositoryService', true],
            'wordRepository' => ['privates', 'App\\Repository\\WordRepository', 'getWordRepositoryService', true],
        ], [
            'doctrine' => '?',
            'likeRepository' => 'App\\Repository\\LikeRepository',
            'wordRepository' => 'App\\Repository\\WordRepository',
        ]);
    }
}
