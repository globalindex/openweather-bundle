<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Symfony\Component\HttpKernel\KernelInterface;
use Webinteger\OpenWeatherBundle\OpenWeatherBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;

class Plugin implements BundlePluginInterface, RoutingPluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(OpenWeatherBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }

    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        return $resolver
            ->resolve(__DIR__.'/../Resources/config/routes.yml')
            ->load(__DIR__.'/../Resources/config/routes.yml')
        ;
    }
}
