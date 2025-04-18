<?php

namespace ARShahin\UtilityKit\Tests;

use ARShahin\UtilityKit\Helpers\ArrayHelper;
use PHPUnit\Framework\TestCase;

class ArrayHelperTest extends TestCase{

    /**
     * Test if payload is an array.
     */
    public function testPayloadIsAnArray(): void
    {
        $this->assertTrue(ArrayHelper::isArray(["PHP", "Laravel"]));
    }

    /**
     * Test if payload is not an array.
     */
    public function testPayloadIsNotAnArray(): void
    {
        $this->assertFalse(ArrayHelper::isArray("PHP"));
    }
}