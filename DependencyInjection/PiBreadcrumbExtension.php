<?php

declare(strict_types=1);

namespace PiWeb\PiBreadcrumb\DependencyInjection;

use Exception;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class PiBreadcrumbExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(sprintf('%s/../Resources/config', __DIR__)));

        try {
            $loader->load('services.yaml');
        } catch (Exception) {
        }
    }
}
