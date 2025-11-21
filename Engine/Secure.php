<?php

namespace Liloi\TARDIS;

use Liloi\TARDIS\Domain\Manager as DomainManager;

class Secure
{
    /**
     * Check password.
     *
     * @param string $password
     * @return bool
     */
    public static function checkPassword(string $password): bool
    {
        $admin = DomainManager::getConfig()->get('admin');
        return password_verify($password, $admin['password']);
    }

    /**
     * Logs in.
     */
    public static function login(): void
    {
        $_SESSION['admin'] = true;
    }

    /**
     * Checks access.
     * 'true` - admin access
     * `false` - user access
     *
     * @return bool
     */
    public static function checkLogin(): bool
    {
        if(!isset($_SESSION['admin']))
        {
            return false;
        }

        return $_SESSION['admin'];
    }

    /**
     * @throws \Exception Access denied if password is incorrect.
     */
    public static function checkAdmin(): void
    {
        if(!self::checkLogin())
        {
            throw new \Exception('Access denied');
        }
    }

    /**
     * Logs out.
     */
    public static function logout(): void
    {
        $_SESSION['admin'] = false;
    }
}