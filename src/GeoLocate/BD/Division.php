<?php
namespace ARShahin\UtilityKit\GeoLocate\BD;

class Division{
    private static $divisions = array(
        array('id' => '1', 'name' => 'Chattogram', 'bn_name' => 'চট্টগ্রাম', 'lat' => '22.356851', 'long' => '91.783182', 'web_url' => 'www.chittagongdiv.gov.bd'),
        array('id' => '2', 'name' => 'Rajshahi', 'bn_name' => 'রাজশাহী', 'lat' => '24.363589', 'long' => '88.624135', 'web_url' => 'www.rajshahidiv.gov.bd'),
        array('id' => '3', 'name' => 'Khulna', 'bn_name' => 'খুলনা', 'lat' => '22.845641', 'long' => '89.540328', 'web_url' => 'www.khulnadiv.gov.bd'),
        array('id' => '4', 'name' => 'Barishal', 'bn_name' => 'বরিশাল', 'lat' => '22.701002', 'long' => '90.353451', 'web_url' => 'www.barisaldiv.gov.bd'),
        array('id' => '5', 'name' => 'Sylhet', 'bn_name' => 'সিলেট', 'lat' => '24.894929', 'long' => '91.868706', 'web_url' => 'www.sylhetdiv.gov.bd'),
        array('id' => '6', 'name' => 'Dhaka', 'bn_name' => 'ঢাকা', 'lat' => '23.810332', 'long' => '90.412518', 'web_url' => 'www.dhakadiv.gov.bd'),
        array('id' => '7', 'name' => 'Rangpur', 'bn_name' => 'রংপুর', 'lat' => '25.743892', 'long' => '89.275227', 'web_url' => 'www.rangpurdiv.gov.bd'),
        array('id' => '8', 'name' => 'Mymensingh', 'bn_name' => 'ময়মনসিংহ', 'lat' => '24.747149', 'long' => '90.420273', 'web_url' => 'www.mymensinghdiv.gov.bd')
    );
    

    public static function all() : array {
        return self::$divisions;
    }

    public static function single($divisionName)  {
        foreach(self::$divisions as $index => $division){
            if($division['bn_name'] == $divisionName || $division['name'] == $divisionName){
                return $division;
            } 
        }
        return null;
    }

}