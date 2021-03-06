<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFonctionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\FonctionRepository' shared autowired service.
     *
     * @return \App\Repository\FonctionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\FonctionRepository'] = new \App\Repository\FonctionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
