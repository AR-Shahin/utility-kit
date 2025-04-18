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

    public static function hello() : string {
        return "Hello Shahin";
    }

    /**
     * Check if a given string is a palindrome.
     *
     * A palindrome is a word or phrase that reads the same backward as forward,
     * ignoring case and non-alphanumeric characters.
     *
     * @param string $string The input string to check.
     * @return bool True if the input is a palindrome, false otherwise.
     */
    public static function isPalindrome(string $string): bool
    {
        $cleaned = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));
        return $cleaned === strrev($cleaned);
    }

    /**
     * Generate a random alphanumeric string of a given length.
     *
     * The generated string contains uppercase, lowercase letters, and digits.
     *
     * @param int $length Length of the random string. Default is 10.
     * @return string The generated random string.
     */
    public static function randomString(int $length = 10): string
    {
        return substr(str_shuffle(str_repeat(
            'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
            $length
        )), 0, $length);
    }

    /**
     * Convert a snake_case string to camelCase.
     *
     * @param string $input The snake_case formatted string.
     * @return string The converted camelCase string.
     */
    public static function snakeToCamel(string $input): string
    {
        return lcfirst(str_replace('_', '', ucwords($input, '_')));
    }

    /**
     * Convert a camelCase string to snake_case.
     *
     * @param string $input The camelCase formatted string.
     * @return string The converted snake_case string.
     */
    public static function camelToSnake(string $input): string
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $input));
    }

    /**
     * Mask a string leaving some visible characters at start and end.
     *
     * For example: `SensitiveInfo` with 2 visible start and end becomes `Se******fo`.
     *
     * @param string $string The original string to mask.
     * @param int $visibleFromStart Characters to leave visible at the start.
     * @param int $visibleFromEnd Characters to leave visible at the end.
     * @param string $maskCharacter The character used for masking (default is '*').
     * @return string The masked string.
     */
    public static function maskString(
        string $string,
        int $visibleFromStart = 1,
        int $visibleFromEnd = 1,
        string $maskCharacter = '*'
    ): string {
        $length = strlen($string);
        $maskedLength = $length - $visibleFromStart - $visibleFromEnd;

        if ($maskedLength <= 0) return $string;

        $startPart = substr($string, 0, $visibleFromStart);
        $endPart = substr($string, -$visibleFromEnd);

        return $startPart . str_repeat($maskCharacter, $maskedLength) . $endPart;
    }



}
