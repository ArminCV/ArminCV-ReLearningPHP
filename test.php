<?php 
	
	$host = 'localhost';
	$user = 'root';
	$pass = 'password';
	$db = 'test_db';

	$db = new mysqli($host, $user, $pass, $db) or die("Unable to connect");

	echo "Great work";


 ?>