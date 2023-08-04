<?php
    function is_Power_of_Int($num, $pow)
    {
        if($num == 0)
        {
            return 0;
        }

        while($num != 1)
        {
            if($num % $pow != 0)
            {
                return 0;
            }
            else
            {
                $num /= $pow;
            }
        }
        return 1;
    }

    $number = 12;
    $power = 2;
    
    if(is_Power_of_Int($number, $power))
    {
        echo $number . " is a power of " . $power;
    }
    else
    {
        echo $number . " is not a power of " . $power;
    }
?>