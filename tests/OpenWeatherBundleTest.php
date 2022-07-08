<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\Tests;

use Webinteger\OpenWeatherBundle\OpenWeatherBundle;
use PHPUnit\Framework\TestCase;

class OpenWeatherBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new OpenWeatherBundle();

        $this->assertInstanceOf('Webinteger\OpenWeatherBundle\OpenWeatherBundle', $bundle);
    }
}
