<?php
	include_once('class.php');
	include_once('male.php');

	$stdid_117 = new Male("Mike", "18", "Quezon City", "Grade 11");
	echo $stdid_117->get_name();
	echo "<br><br>";
	echo $stdid_117->get_full_student_info();
	echo "<br><br>";
	echo $stdid_117->get_uniform_color();
?>