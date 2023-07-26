<?php

	$num = $_POST["input_num"];
	$count = 0;

	echo $num." ";

	while($num != 1){
		if($num % 2 == 0){
			$num /= 2;
		}else{
			$num = ($num * 3) + 1;
		}
		$count++;
		echo $num." ";
	}
	echo "<br>";
	echo "Total number of iterations is: ".$count;

?>