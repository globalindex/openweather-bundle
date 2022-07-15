<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\Cron;

use Contao\Config;
use Psr\Log\LoggerInterface;
use Contao\CoreBundle\Monolog\ContaoContext;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\ServiceAnnotation\CronJob;

class OpenWeatherCron
{
    private ContaoFramework $framework;
    private ?LoggerInterface $logger;

    public function __construct(ContaoFramework $framework, LoggerInterface $logger = null)
    {
        $this->framework = $framework;
        $this->logger = $logger;
    }

    /**
     * @CronJob("hourly")
     */
    public function onHourly(): void
    {
        $this->framework->initialize();

        $config = $this->framework->getAdapter(Config::class);

        if (! $config->get('openweather_lat') && ! $config->get('openweather_lon')) {
            $apiKey = $config->get('openweather_api_key');
            $place = $config->get('openweather_place');
            $stateCode = $config->get('openweather_state_code');

            // Geodata holen
            $url = $this->setUrl($apiKey, $place, $stateCode);

            // Daten in tl_settings schreiben

            $this->logger->info(
                'OpenWeather Cron funktioniert.',
                ['contao' => new ContaoContext(__METHOD__, ContaoContext::GENERAL)]
            );
        } else {
            // Wetter-Daten von API holen
        }


    }

    private function setUrl(string $api, string $place, int $code): string
    {
        $url = 'http://api.openweathermap.org/geo/1.0/direct?q='. $place .',' . $code . '&limit=1&appid=' . $api;

        return $url;
    }
}
