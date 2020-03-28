<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {


        //
        foreach ($nums as $key => $n) {

            if ($key > 0) {


                if ($nums[$key] == $nums[$key - 1]) {

                    unset($nums[$key - 1]);
                }

            }

        }

    }
}