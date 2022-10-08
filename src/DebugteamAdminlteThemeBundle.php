<?php

namespace Debugteam\AdminLTEBundle;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DebugteamAdminlteThemeBundle extends AbstractBundle
{

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->arrayNode('configblock')
            ->children()
            ->scalarNode('somedata')->end()
            ->scalarNode('someotherdata')->end()
            ->end()
            ->end()
            ->end()
        ;
    }

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.xml');

        $container->services()
            ->get('debugteam.adminlte.debugteam_adminlte_theme')
            ->arg(0, $config['configblock']['somedata'])
            ->arg(1, $config['configblock']['someotherdata'])
        ;
    }

}