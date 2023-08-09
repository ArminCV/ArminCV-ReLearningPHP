<?php
    //**program to add the digits of a positive integer repeatedly until the result has a single digit */
    function add_digits($num)
    {
          if ( $num > 0)
          {
            echo ($num - 1) % 9 . "<br>";
          return ($num - 1) % 9 + 1;
          }
          else
          {
              return 0;
          }
    }

    $number = 12345678;
    $sum = add_digits($number);
    echo "Output: " . $sum;
?>