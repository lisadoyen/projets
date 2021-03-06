<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZCK0WRmService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ZCK0WRm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZCK0WRm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'entiteRepository' => ['privates', 'App\\Repository\\EntiteRepository', 'getEntiteRepositoryService', true],
            'videoldRepository' => ['privates', 'App\\Repository\\VideoldRepository', 'getVideoldRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'em' => '?',
            'entiteRepository' => 'App\\Repository\\EntiteRepository',
            'videoldRepository' => 'App\\Repository\\VideoldRepository',
        ]);
    }
}
