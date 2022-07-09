<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\Cron;

use Contao\Config;
use Psr\Log\LoggerInterface;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\ServiceAnnotation\CronJob;
use Doctrine\DBAL\Connection;

class OpenWeatherCron
{
    private ContaoFramework $framework;
    private Connection $connection;
    private LoggerInterface $logger;

    public function __construct(ContaoFramework $framework, Connection $connection, LoggerInterface $logger)
    {
        $this->framework = $framework;
        $this->connection = $connection;
        $this->logger = $logger;
    }

    /**
    * @CronJob("hourly")
    */
    public function __invoke(): void
    {
        $this->logger->info('OpenWeather Cron funktioniert');
    }
}
