<?php

namespace Erlangb\BetfairBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('betfair-bundle');

        $rootNode
            ->children()
                ->scalarNode('appKey')->end()
                ->scalarNode('betfairUsername')->end()
                ->scalarNode('betfairPassword')->end();

        return $treeBuilder;
    }
}