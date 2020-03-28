<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {



        $result = 0;


        while ($x != 0) {


            $result = $result * 10 + $x % 10;

            $x = intval($x / 10);

        }

        if ($result >= 2147483648 || $result < -2147483648) {
            return 0;
        }

        return $result;
    }
}