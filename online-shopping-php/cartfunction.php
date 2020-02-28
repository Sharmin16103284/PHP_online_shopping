<?php  
require "include/db.php";
session_start();
if (empty($_SESSION['userMail']) or empty($_SESSION['userID'])) {
	echo "<script> alert('Please login first') </script>";
	echo "<script> location = 'index.php' </script>";
}else{
	$userID = $_SESSION['userID'];
	$userEmail = $_SESSION['userMail'];

	if (isset($_POST['submit'])) {
		$quantiry = mysqli_escape_string($conn, $_POST['quantiry']);
		$pro_id = mysqli_escape_string($conn, $_POST['pro_id']);
		$pro_price = mysqli_escape_string($conn, $_POST['pro_price']);
		$pro_name = mysqli_escape_string($conn, $_POST['pro_name']);
		$trackID = rand(11111111,99999999);

		$insrtcart = mysqli_query($conn, "INSERT INTO cart(user_id, user_email, product_id, pro_name, qty, price, tack_id)VALUES('$userID', '$userEmail', '$pro_id', '$pro_name', '$quantiry', '$pro_price', '$trackID')");

		if ($insrtcart) {
			header("Location: " . $_SERVER['HTTP_REFERER']);
		}
	}
}

?>