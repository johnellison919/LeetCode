<?php
	class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n): Int{
        // Turn our int to a string, then explode our string to an array
        $numberArray = str_split(strval($n));

        // Get product of digits
        $product = array_product($numberArray);

        // Get sum of digits
        $sum = array_sum($numberArray);

        // return product minus sum
        return $product - $sum;
    }
}