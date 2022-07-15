<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment as TwigEnvironment;

/**
 * @Route("/contao/openweather",
 *     name=OpenWeatherController::class,
 *     defaults={"_scope": "backend"}
 * )
 */
class OpenWeatherController extends AbstractController {

    private $twig;

    public function __construct(TwigEnvironment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(): Response
    {
        return new Response($this->twig->render(
            'open_weather_backen_route.html.twig',
            []
        )):
    }
}
