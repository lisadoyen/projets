<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VK74fLDService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.VK74fLD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VK74fLD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fonction' => ['privates', '.errored..service_locator.VK74fLD.App\\Entity\\Fonction', NULL, 'Cannot autowire service ".service_locator.VK74fLD": it references class "App\\Entity\\Fonction" but no such service exists.'],
        ], [
            'fonction' => 'App\\Entity\\Fonction',
        ]);
    }
}
