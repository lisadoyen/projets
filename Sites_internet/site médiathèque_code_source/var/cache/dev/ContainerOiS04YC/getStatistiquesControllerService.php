<?php

namespace ContainerOiS04YC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatistiquesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\StatistiquesController' shared autowired service.
     *
     * @return \App\Controller\StatistiquesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/StatistiquesController.php';

        $container->services['App\\Controller\\StatistiquesController'] = $instance = new \App\Controller\StatistiquesController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\StatistiquesController', $container));

        return $instance;
    }
}
