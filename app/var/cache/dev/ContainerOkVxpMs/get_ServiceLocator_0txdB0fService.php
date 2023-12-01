<?php

namespace ContainerOkVxpMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0txdB0fService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0txdB0f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0txdB0f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'friendshipRepository' => ['privates', 'App\\Repository\\FriendshipRepository', 'getFriendshipRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'friendshipRepository' => 'App\\Repository\\FriendshipRepository',
            'userRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
