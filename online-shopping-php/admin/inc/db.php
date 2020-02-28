<?php
//database connection
$conn=mysqli_connect('localhost','root','','grocery');
if(!$conn) {
	echo "connection failed:" .mysqli_connection_error($conn);
	die();
}
?>