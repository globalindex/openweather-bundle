<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\Cron;

use Psr\Log\LoggerInterface;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\ServiceAnnotation\CronJob;

/**
 * @CronJob("hourly")
 */
class OpenWeatherCron
{
    public function __construct(ContaoFramework $framework, LoggerInterface $logger)
    {
    }

    public function __invoke(): void
    {
        $this->logger->info('OpenWeather Cron funktioniert');
    }
}
