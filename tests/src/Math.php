<?php
 
namespace Math;
 
class Math {
    public function add($a, $b) {
        return $a + $b;
    }
 
    public function sub($a, $b) {
		// bug
        return $a + $b;
    }
}

