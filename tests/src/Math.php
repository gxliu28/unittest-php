<?php
 
namespace Math;
 
class Math {
    public function add($a, $b) {
        return $a + $b;
    }
 
    public function sub($a, $b) {
		// This is a bug
        return $a + $b;
    }
}

