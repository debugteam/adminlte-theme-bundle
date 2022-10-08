<?php

namespace Debugteam\AdminLTEBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class DebugteamAdminlteThemeBundle extends AbstractBundle
{

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->arrayNode('configblock')
            ->children()
            ->integerNode('somedata')->end()
            ->scalarNode('someotherdata')->end()
            ->end()
            ->end()
            ->end()
        ;
    }

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->services()
            ->get('debugteam.adminlte.theme')
            ->arg(0, $config['configblock']['somedata'])
            ->arg(1, $config['configblock']['someotherdata'])
        ;
    }

}