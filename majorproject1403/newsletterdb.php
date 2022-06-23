<?php

    $email = $_POST['email'];
    include("connect.php");

        // Performing insert query execution
		// here our table name is newsletter
		$sql = "INSERT INTO `newsletter` VALUES ('','$email',)";

        if(mysqli_query($conn, $sql)){
			echo "<script>alert('Subscription Added successfully.');</script>";
			echo "<script>window.location.href='index.php';</script>";
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		

?>