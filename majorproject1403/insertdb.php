	<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$Subject = $_POST['subject'];
	$Feedback = $_POST['feedback'];

	include("connect.php");
		// Performing insert query execution
		// here our table name is feedback form
		$sql = "INSERT INTO `feedback form` VALUES ('','$name','$email','$number','$Subject','$Feedback')";
		
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('Data Saved Successfully.');</script>";
			echo "<script>window.location.href='contactus.php';</script>";
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
