<?php

namespace ContainerOiS04YC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GrvqYLjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GrvqYLj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GrvqYLj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actionsRepo' => ['privates', 'App\\Repository\\ActionRepository', 'getActionRepositoryService', true],
            'ageRepository' => ['privates', 'App\\Repository\\TrancheAgeRepository', 'getTrancheAgeRepositoryService', true],
            'ar' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'categorieRepo' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'filtre' => ['privates', 'App\\Service\\Article\\Filtre', 'getFiltreService', true],
            'genreRepository' => ['privates', 'App\\Repository\\GenreRepository', 'getGenreRepositoryService', true],
            'new' => ['privates', 'App\\Service\\Article\\Nouveaute', 'getNouveauteService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'session' => ['services', 'session', 'getSessionService', true],
            'statutRepository' => ['privates', 'App\\Repository\\StatutRepository', 'getStatutRepositoryService', true],
        ], [
            'actionsRepo' => 'App\\Repository\\ActionRepository',
            'ageRepository' => 'App\\Repository\\TrancheAgeRepository',
            'ar' => 'App\\Repository\\ArticleRepository',
            'categorieRepo' => 'App\\Repository\\CategorieRepository',
            'filtre' => 'App\\Service\\Article\\Filtre',
            'genreRepository' => 'App\\Repository\\GenreRepository',
            'new' => 'App\\Service\\Article\\Nouveaute',
            'paginator' => '?',
            'session' => '?',
            'statutRepository' => 'App\\Repository\\StatutRepository',
        ]);
    }
}
