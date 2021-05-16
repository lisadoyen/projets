<?php

namespace ContainerOiS04YC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G9GUc66Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G9GUc66' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G9GUc66'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeActionRepository' => ['privates', 'App\\Repository\\TypeActionRepository', 'getTypeActionRepositoryService', true],
            'typeEntiteRepository' => ['privates', 'App\\Repository\\TypeEntiteRepository', 'getTypeEntiteRepositoryService', true],
        ], [
            'typeActionRepository' => 'App\\Repository\\TypeActionRepository',
            'typeEntiteRepository' => 'App\\Repository\\TypeEntiteRepository',
        ]);
    }
}
