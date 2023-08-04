<?php
    //**Program to check whether a given positive integer is a power of four */
    function is_Power_of_four($n)
    {
        if($n == 0)
        {
            return 0;
        }
        
        while($n != 1)
        {
            if($n % 4 != 0)
            {
                return 0;
            }
            else
            {
                $n /= 4;
            }
        }
        return 1;
    }

    $number = 64;
    if(is_Power_of_four($number))
    {
        echo $number . " is a power of 4";
    }
    else
    {
        echo $number . " is not a power of 4";
    }
?>