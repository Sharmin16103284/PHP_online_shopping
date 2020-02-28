<?php 

require "include/db.php";


if(isset($_POST['submit'])) {
		$name = mysqli_escape_string($conn, $_POST['name']);
		$subject = mysqli_escape_string($conn, $_POST['subject']);
		$email = mysqli_escape_string($conn, $_POST['email']);
		$message = mysqli_escape_string($conn, $_POST['message']);
	
		$sql = "INSERT INTO contact (name, subject, email, message, status) VALUES ('$name' , '$subject' , '$email' , '$message' , '0')" ; 
		$run_sql = mysqli_query($conn, $sql) ; 
		
		if($run_sql) {
			echo "<script> alert('Thank you for your message.')</script>";
			echo "<script>location = 'contact.php'</script>";
		}
	
	
	}
	

 ?>