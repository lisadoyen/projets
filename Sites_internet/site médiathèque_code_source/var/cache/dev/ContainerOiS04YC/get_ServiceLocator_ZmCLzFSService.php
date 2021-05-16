<?php

namespace ContainerOiS04YC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZmCLzFSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZmCLzFS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZmCLzFS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'favorisRepository' => ['privates', 'App\\Repository\\FavorisRepository', 'getFavorisRepositoryService', true],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'favorisRepository' => 'App\\Repository\\FavorisRepository',
            'session' => '?',
        ]);
    }
}
