<?php

namespace ARShahin\UtilityKit\Helpers;

class StringHelper
{
    public static function startsWith(string $haystack, string $needle): bool
    {
        return strncmp($haystack, $needle, strlen($needle)) === 0;
    }

    public static function endsWith(string $haystack, string $needle): bool
    {
        return substr($haystack, -strlen($needle)) === $needle;
    }
}
