<?php

namespace ARShahin\UtilityKit\Helpers; 
class ArrayHelper{

    static function isArray($payload) : bool {
        return is_array($payload);
    }
}