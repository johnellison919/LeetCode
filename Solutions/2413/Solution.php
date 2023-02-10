<?php
	class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function smallestEvenMultiple($n): Int{
        if($n % 2 !== 0) {
            return $n * 2;
        } else {
            return $n;
        }
    }
}