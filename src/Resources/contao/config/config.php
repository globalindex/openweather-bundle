<?php

declare(strict_types=1);

use Webinteger\OpenWeatherBundle\Model\OpenWeatherModel;

$GLOBALS['TL_MODELS']['tl_openweather'] = OpenWeatherModel::class;
// $GLOBALS['TL_CRON']['hourly'][] = [OpenWeatherCron::class, 'onHourly'];
