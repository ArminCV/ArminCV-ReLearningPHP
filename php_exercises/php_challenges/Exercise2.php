<?php
    //**Program to check whether a given positive integer is a power of three */
    function is_Power_of_three($n)
    {
        if($n == 1 || $n == 2)
        {
            return 0;
        }

        while($n != 1)
        {
            if($n % 3 != 0)
            {
                return 0;
            }
            else
            {
                $n /= 3;
            }
        }
        return 1;
    }

    $number = 30;
    if(is_Power_of_three($number))
    {
        echo $number . " is a power of 3";
    }
    else
    {
        echo $number . " is not a power of 3";
    }
?>