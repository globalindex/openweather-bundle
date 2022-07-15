<?php

declare(strict_types=1);

namespace Webinteger\OpenWeatherBundle\Eventlistener;

use Contao\CoreBundle\Event\MenuEvent;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Terminal42\ServiceAnnotationBundle\Annotation\ServiceTag;
use Webinteger\OpenWeatherBundle\Controller\OpenWeatherController;

/**
 * @ServiceTag("kernel.event_listener", event="contao.backend_menu_build", priority=-255)
 */
class BackendMenuListener
{
    protected $router;
    protected $requestStack;

    public function __construct(RouterInterface $router, RequestStack $requestStack)
    {
        $this->router = $router;
        $this->requestStack = $requestStack;
    }

    public function __invoke(MenuEvent $event): void
    {
        $factory = $event->getFactory();
        $tree = $event->getTree();

        if ('mainMenu' !== $tree->getName()) {
            return;
        }

        $contentNode = $tree->getChild('content');

        $node = $factory
            ->createItem('my-module')
                ->setUri($this->router->generate(OpenWeatherController::class))
                ->setLabel('My Modules')
                ->setLinkAttribute('title', 'Title')
                ->setLinkAttribute('class', 'my-module')
                ->setCurrent($this->requestStack->getCurrentRequest()->get('_controller') === OpenWeatherController::class)
        ;

        $contentNode->addChild($node);
    }
}
