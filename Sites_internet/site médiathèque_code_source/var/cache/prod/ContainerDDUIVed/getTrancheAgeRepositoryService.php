<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTrancheAgeRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TrancheAgeRepository' shared autowired service.
     *
     * @return \App\Repository\TrancheAgeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TrancheAgeRepository'] = new \App\Repository\TrancheAgeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
