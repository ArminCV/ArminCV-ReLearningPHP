<?php
   $previous_date = Date("1997-08-14");
   $sdate = new DateTime($previous_date);
   $current_date = Date("Y-m-d");
   $edate = new DateTime($current_date);
   $interval = $sdate->diff($edate);
   echo "Difference : " . 
   $interval->y . " years, " . 
   $interval->m." months, " . 
   $interval->d." days ";
?>