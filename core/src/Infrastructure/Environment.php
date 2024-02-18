<?php

declare(strict_types=1);

namespace App\Core\Infrastructure;

final class Environment
{
    public static function prepare(): void
    {
        self::setBoolean('YII_DEBUG', false);
        self::setString('YII_ENV', 'development');
    }

    private static function setBoolean(string $key, bool $default): void
    {
        $value = getenv($key);

        if ($value === false) {
            $_ENV[$key] = $default;
            return;
        }

        $_ENV[$key] = filter_var($value, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ?? $default;
    }

    private static function setString(string $key, string $default): void
    {
        $value = getenv($key);

        if ($value === false) {
            $_ENV[$key] = $default;
            return;
        }

        $_ENV[$key] = $value;
    }
}
