<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ArticleType' shared autowired service.
     *
     * @return \App\Form\ArticleType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ArticleType'] = new \App\Form\ArticleType();
    }
}
