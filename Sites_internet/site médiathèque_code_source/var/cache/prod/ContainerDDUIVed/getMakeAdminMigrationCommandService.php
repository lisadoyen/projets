<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeAdminMigrationCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand(new \EasyCorp\Bundle\EasyAdminBundle\Maker\Migrator(), \dirname(__DIR__, 4));

        $instance->setName('make:admin:migration');

        return $instance;
    }
}
