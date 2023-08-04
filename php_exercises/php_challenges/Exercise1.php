<?php
    /**Program to check whether a given positive integer is a power of two */
    function is_Power_of_two($n)
    {
        if($n == 0)
        {
            return 0;
        }

        while($n != 1)
        {
            if($n % 2 != 0)
            {
                return 0;
            }
            else
            {
                $n /= 2;
            }
        }
        return 1;
    }

    $num = 8;
    if(is_Power_of_two($num))
    {
        echo $num . " is a power of 2";
    }
    else
    {
        echo $num . " is not a power of 2";
    }
?>