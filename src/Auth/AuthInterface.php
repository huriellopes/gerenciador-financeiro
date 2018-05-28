<?php
declare(strict_types=1);

namespace GERENFin\Auth;

use GERENFin\Models\UserInterface;

interface AuthInterface
{

    /**
     * @param array $credentials
     * @return bool
     */
    public function login(array $credentials): bool;

    /**
     * @return bool
     */
    public function check(): bool;

    public function logout(): void;

    /**
     * @param string $password
     * @return string
     */
    public function hashPassword(string $password): string;

    /**
     * @return \GERENFin\Models\UserInterface
     */
    public function user(): ?UserInterface;

}