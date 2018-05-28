<?php

namespace GERENFin\View\Twig;

use GERENFin\Auth\AuthInterface;

class TwigGlobals extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{

    /**
     * @var AuthInterface
     */
    private $auth;

    /**
     * TwigGlobals constructor.
     * @param AuthInterface $auth
     */
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Returns a list of global variables to add to the existing list.
     *
     * @return array An array of global variables
     */
    public function getGlobals()
    {
        return [
            'Auth' => $this->auth
        ];
    }
}