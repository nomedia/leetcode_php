<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {

        foreach ($nums as $key => $value) {

            unset($nums[$key]);
            if (($key2 = array_search($target - $value, $nums))) {

                return [$key, $key2];

            }


        }

        return [];


    }
}