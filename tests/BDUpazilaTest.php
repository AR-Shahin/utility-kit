<?php
namespace ARShahin\UtilityKit\Tests;

use ARShahin\UtilityKit\GeoLocate\BD\Upazila;
use PHPUnit\Framework\TestCase;

class BDUpazilaTest extends TestCase{

     /**
     * Test if all upazilas are returned as an array.
     */
    public function testAllReturnsArray(): void
    {
        $upazilas = Upazila::all();
        $this->assertIsArray($upazilas);
        $this->assertCount(494, $upazilas); 
    }

    /**
     * Test if single method returns correct upazila by English name.
     */
    public function testSingleReturnsCorrectupazilaByEnglishName(): void
    {
        $upazila = Upazila::single('দাউদকান্দি');
        $this->assertIsArray($upazila);
        $this->assertEquals('Daudkandi', $upazila['name']);
        $this->assertEquals('দাউদকান্দি', $upazila['bn_name']);
    }

    /**
     * Test if single method returns correct upazila by Bangla name.
     */
    public function testSingleReturnsCorrectupazilaByBanglaName(): void
    {
        $upazila = Upazila::single('দাউদকান্দি');
        $this->assertIsArray($upazila);
        $this->assertEquals('Daudkandi', $upazila['name']);
        $this->assertEquals('দাউদকান্দি', $upazila['bn_name']);
    }

    /**
     * Test if single method returns null for non-existent upazila.
     */
    public function testSingleReturnsNullForInvalidName(): void
    {
        $upazila = Upazila::single('Unknown');
        $this->assertNull($upazila);
    }
}