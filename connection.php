<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	$link = mysqli_connect($servername, $username, $password, "raw");
	if(mysqli_connect_error()){

		die("Problem...!!");
	}


?>
