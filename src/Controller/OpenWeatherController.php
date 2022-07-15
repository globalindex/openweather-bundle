<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\Controller;

use Contao\CoreBundle\Framework\ContaoFramework;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment as TwigEnvironment;
use Terminal42\ServiceAnnotationBundle\Annotation\ServiceTag;

/**
 * @Route("/contao/openweather",
 *     name="webinteger_openweather",
 *     defaults={"_scope": "backend"}
 * )
 * @ServiceTag("controller.service_arguments")
 */
class OpenWeatherController extends AbstractController
{
    private RouterInterface $router;
    private $twig;

    public function __construct(RouterInterface $router, TwigEnvironment $twig, ContaoFramework $framework)
    {
        $this->router = $router;
        $this->twig = $twig;
        $this->framework = $framework;
    }

    public function __invoke(): Response
    {
        return new Response($this->twig->render(
            'open_weather_backen_route.html.twig',
            []
        ));
    }
}
