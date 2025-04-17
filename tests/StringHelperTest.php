<?php

namespace ARShahin\UtilityKit\Tests;

use PHPUnit\Framework\TestCase;
use ARShahin\UtilityKit\Helpers\StringHelper;

class StringHelperTest extends TestCase
{
    public function testStartsWith()
    {
        $this->assertTrue(StringHelper::startsWith("Laravel", "Lar"));
        $this->assertFalse(StringHelper::startsWith("Laravel", "Foo"));
    }

    public function testEndsWith()
    {
        $this->assertTrue(StringHelper::endsWith("Laravel", "vel"));
        $this->assertFalse(StringHelper::endsWith("Laravel", "bar"));
    }
}
