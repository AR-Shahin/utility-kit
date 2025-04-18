<?php

namespace ARShahin\UtilityKit\Tests;

use PHPUnit\Framework\TestCase;
use ARShahin\UtilityKit\Helpers\StringHelper;

class StringHelperTest extends TestCase
{
    /**
     * Test if string starts with a given prefix.
     */
    public function testStringStartsWithGivenPrefix(): void
    {
        $this->assertTrue(StringHelper::startsWith("Laravel", "Lar"));
    }

    /**
     * Test if string does not start with an incorrect prefix.
     */
    public function testStringDoesNotStartWithPrefix(): void
    {
        $this->assertFalse(StringHelper::startsWith("Laravel", "Foo"));
    }

    /**
     * Test if string ends with a given suffix.
     */
    public function testStringEndsWithGivenSuffix(): void
    {
        $this->assertTrue(StringHelper::endsWith("Laravel", "vel"));
    }

    /**
     * Test if string does not end with an incorrect suffix.
     */
    public function testStringDoesNotEndWithSuffix(): void
    {
        $this->assertFalse(StringHelper::endsWith("Laravel", "bar"));
    }

    /**
     * Test palindrome with a valid lowercase string.
     */
    public function testPalindromeValidString(): void
    {
        $this->assertTrue(StringHelper::isPalindrome("madam"));
    }

    /**
     * Test palindrome with a sentence containing spaces and punctuations.
     */
    public function testPalindromeWithPunctuation(): void
    {
        $this->assertTrue(StringHelper::isPalindrome("A man, a plan, a canal, Panama"));
    }

    /**
     * Test a non-palindrome string.
     */
    public function testNonPalindrome(): void
    {
        $this->assertFalse(StringHelper::isPalindrome("Hello"));
    }

    /**
     * Test generating a random string of specified length.
     */
    public function testRandomStringGeneration(): void
    {
        $random = StringHelper::randomString(16);
        $this->assertIsString($random);
        $this->assertEquals(16, strlen($random));
    }

    /**
     * Test converting snake_case to camelCase.
     */
    public function testSnakeToCamelConversion(): void
    {
        $this->assertEquals("helloWorld", StringHelper::snakeToCamel("hello_world"));
        $this->assertEquals("userNameId", StringHelper::snakeToCamel("user_name_id"));
    }

    /**
     * Test converting camelCase to snake_case.
     */
    public function testCamelToSnakeConversion(): void
    {
        $this->assertEquals("hello_world", StringHelper::camelToSnake("helloWorld"));
        $this->assertEquals("user_name_id", StringHelper::camelToSnake("userNameId"));
    }

    /**
     * Test masking a string while keeping start and end visible.
     */
    public function testMaskStringWithDefaultCharacters(): void
    {
        $this->assertEquals("S***********o", StringHelper::maskString("SensitiveInfo", 1, 1));
    }

    /**
     * Test masking a string with custom visible count.
     */
    public function testMaskStringWithCustomVisibleLength(): void
    {
        $this->assertEquals("a*s", StringHelper::maskString("ars", 1, 1));
    }
}
