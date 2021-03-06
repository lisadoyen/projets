<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRubriqueControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\RubriqueController' shared autowired service.
     *
     * @return \App\Controller\RubriqueController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\RubriqueController'] = $instance = new \App\Controller\RubriqueController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\RubriqueController', $container));

        return $instance;
    }
}
