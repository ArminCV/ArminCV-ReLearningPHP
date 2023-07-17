<?php 

	$servername = "localhost";
	$username = "root";
	$password = "password";
	$db_name = "login_db";
	$conn = new mysqli($servername, $username, $password, $db_name);

	/*
	$pdo = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
	*/

	if($conn -> connect_errno){
		die("Connection failed!". mysqli_connect_error());
	}
	echo "Connection Successful";

 ?>