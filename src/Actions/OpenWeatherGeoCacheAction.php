<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\Actions;

use Contao\Config;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\Model;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Webmozart\PathUtil\Path;

class OpenWeatherGeoCacheAction
{
    public $url;

    public function __construct(private ContaoFramework $framework, private HttpClientInterface $httpClient)
    {
    }

    public function handleGeoCoordinates(): String
    {
        if ('' === $this->apiKey) {
            return null;
        }

        $this->url = 'http://api.openweathermap.org/geo/1.0/direct?q='. $this->place .',' . $this->stateCode . '&limit=1&appid=' . $this->apiKey;

        return $this->url;
    }
}
