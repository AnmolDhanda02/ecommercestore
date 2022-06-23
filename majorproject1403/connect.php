<?php
	
	// Database connection
	$conn = new mysqli('localhost','root','','feedback');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		echo "connected successfully";
	}
?>