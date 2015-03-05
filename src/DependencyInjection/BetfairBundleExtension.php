<?php

namespace Erlangb\BetfairBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

class BetfairBundleExtension extends ConfigurableExtension
{
    /**
     * Configures the passed container according to the merged configuration.
     *
     * @param array $mergedConfig
     * @param ContainerBuilder $container
     */
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        $container->setAlias(
            'betfair_application_key',
            $mergedConfig["app_key"]
        );

        $container->setAlias(
            'betfair_usernname',
            $mergedConfig["betfair-username"]
        );

        $container->setAlias(
            'betfair_password',
            $mergedConfig["betfair-password"]
        );

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}