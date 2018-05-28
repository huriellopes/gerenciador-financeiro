<?php
//declare(strict_types=1);

namespace GERENFin\View;

use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;

class ViewRender implements ViewRendererInterface
{
    /**
     * @var \Twig_Environment
     */
    private $TwigEnvironment;

    /**
     * ViewRender constructor.
     */
    public function __construct(\Twig_Environment $TwigEnvironment)
    {
        $this->TwigEnvironment = $TwigEnvironment;
    }

    public function render(string $template, array $context = []): ResponseInterface
    {
        $result = $this->TwigEnvironment->render($template, $context);
        $response = new Response();
        $response->getBody()->write($result);

        return $response;
    }
}