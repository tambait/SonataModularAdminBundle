<?php

namespace Sherlockode\SonataModularBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('sherlockode_sonata_modular');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('color')
                    ->defaultValue('green')
                    ->info('The admin color')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
