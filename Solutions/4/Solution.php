<?php
	class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2): Float{
        $array = array_merge($nums1, $nums2);  // Merge our array
        sort($array);  // Sort the array
        $count = count($array);
        $middleValue = floor(($count - 1)/2);

        if($count % 2) {
            return $array[$middleValue];
        } else {
            $low = $array[$middleValue];
            $high = $array[$middleValue + 1];
            
            return (($low + $high) / 2);
        }
    }
}