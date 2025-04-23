<?php
namespace ARShahin\UtilityKit\Tests;

use ARShahin\UtilityKit\GeoLocate\BD\Division;
use PHPUnit\Framework\TestCase;

class BDDivisionTest extends TestCase{
     /**
     * Test if all divisions are returned as an array.
     */
    public function testAllReturnsArray(): void
    {
        $divisions = Division::all();
        $this->assertIsArray($divisions);
        $this->assertCount(8, $divisions); 
    }

     /**
     * Test if single method returns correct division by English name.
     */
    public function testSingleReturnsCorrectDivisionByEnglishName(): void
    {
        $division = Division::single('Dhaka');
        $this->assertIsArray($division);
        $this->assertEquals('Dhaka', $division['name']);
        $this->assertEquals('ঢাকা', $division['bn_name']);
    }

    /**
     * Test if single method returns correct division by Bangla name.
     */
    public function testSingleReturnsCorrectDivisionByBanglaName(): void
    {
        $division = Division::single('চট্টগ্রাম');
        $this->assertIsArray($division);
        $this->assertEquals('Chattogram', $division['name']);
        $this->assertEquals('চট্টগ্রাম', $division['bn_name']);
    }

    /**
     * Test if single method returns null for non-existent division.
     */
    public function testSingleReturnsNullForInvalidName(): void
    {
        $division = Division::single('Unknown');
        $this->assertNull($division);
    }
}