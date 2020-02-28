<?php  
session_start();
if (empty($_SESSION['adminMail'])) {
	echo "<script> alert('Please Login first...!!!!') </script>";
	echo "<script> location = 'login.php' </script>";
}
?>