<?php

namespace GERENFin\Auth;

use const PHP_SESSION_NONE;
use function session_start;
use function session_status;

class Auth implements AuthInterface
{

    /**
     * @var JasnyAuth
     */
    private $jasnyAuth;

    /**
     * Auth constructor.
     * @param JasnyAuth $jasnyAuth
     */
    public function __construct(JasnyAuth $jasnyAuth)
    {
        $this->jasnyAuth = $jasnyAuth;
        $this->SessionStart();
    }

    /**
     * @param array $credentials
     * @return bool
     */
    public function login(array $credentials): bool
    {
        list('email' => $email, 'password' => $password) = $credentials;
        return $this->jasnyAuth->login($email, $password) !== null;
    }

    /**
     * @return bool
     */
    public function check(): bool
    {
        return $this->jasnyAuth->user() !== null;
    }


    public function logout(): void
    {
        $this->jasnyAuth->logout();
    }

    /**
     * @return \GERENFin\Models\UserInterface
     */
    public function user(): ?\GERENFin\Models\UserInterface
    {
        return $this->jasnyAuth->user();
    }

    public function hashPassword(string $password): string
    {
        return $this->jasnyAuth->hashPassword($password);
    }

    protected function SessionStart()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
}