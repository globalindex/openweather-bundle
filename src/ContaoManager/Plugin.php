<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Webinteger\OpenWeatherBundle\OpenWeatherBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(OpenWeatherBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
