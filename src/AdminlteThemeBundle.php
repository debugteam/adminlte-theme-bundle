<?php

namespace Debugteam\Bundle\AdminlteThemeBundle;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AdminlteThemeBundle extends AbstractBundle
{

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode();
    }

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../Resources/config/services.yaml');

        $container->services()
            ->get('debugteam.bundle.debugteam_adminlte_theme')
        ;
    }

}