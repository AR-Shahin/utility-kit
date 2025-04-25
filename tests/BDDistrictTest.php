<?php
namespace ARShahin\UtilityKit\Tests;

use ARShahin\UtilityKit\GeoLocate\BD\District;
use PHPUnit\Framework\TestCase;

class BDDistrictTest extends TestCase{

     /**
     * Test if all districts are returned as an array.
     */
    public function testAllReturnsArray(): void
    {
        $districts = District::all();
        $this->assertIsArray($districts);
        $this->assertCount(64, $districts); 
    }

    /**
     * Test if single method returns correct district by English name.
     */
    public function testSingleReturnsCorrectDistrictByEnglishName(): void
    {
        $district = District::single('চাঁদপুর');
        $this->assertIsArray($district);
        $this->assertEquals('Chandpur', $district['name']);
        $this->assertEquals('চাঁদপুর', $district['bn_name']);
    }

    /**
     * Test if single method returns correct district by Bangla name.
     */
    public function testSingleReturnsCorrectDistrictByBanglaName(): void
    {
        $district = district::single('চট্টগ্রাম');
        $this->assertIsArray($district);
        $this->assertEquals('Chattogram', $district['name']);
        $this->assertEquals('চট্টগ্রাম', $district['bn_name']);
    }

    /**
     * Test if single method returns null for non-existent district.
     */
    public function testSingleReturnsNullForInvalidName(): void
    {
        $district = district::single('Unknown');
        $this->assertNull($district);
    }
}