<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $arr = [];

        for ($i = 0; $i < strlen($s); $i++) {

            $tmp = $s[$i];

            if ($tmp == "{" || $tmp == "(" || $tmp == "[") {


                array_push($arr, $tmp);
            } else {


                if ($tmp == ")") {

                    if (array_pop($arr) != "(") {
                        return false;
                    }

                }


                if ($tmp == "}") {

                    if (array_pop($arr) != "{") {
                        return false;
                    }

                }


                if ($tmp == "]") {

                    if (array_pop($arr) != "[") {
                        return false;
                    }

                }


            }


        }

        if (count($arr) > 0) return false;
        return true;
    }
}