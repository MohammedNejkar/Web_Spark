<?php

	$servername = "localhost";
	$username = "id17710197_root";
	$password = "Bank@123456789";
	$dbname = "id17710197_indian_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>