<?php
    $current = 
    $current_date = Date("m-d-Y");
    $current_format = 'm-d-Y';
    $target_format = 'Y-m-d';
    $dt = DateTime::createFromFormat($current_format, $current_date)->format($target_format);
    echo $dt;
?>
