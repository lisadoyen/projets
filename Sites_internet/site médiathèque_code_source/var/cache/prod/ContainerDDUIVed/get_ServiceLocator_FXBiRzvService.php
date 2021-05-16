<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FXBiRzvService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.FXBiRzv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FXBiRzv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entiteRepository' => ['privates', 'App\\Repository\\EntiteRepository', 'getEntiteRepositoryService', true],
        ], [
            'entiteRepository' => 'App\\Repository\\EntiteRepository',
        ]);
    }
}
