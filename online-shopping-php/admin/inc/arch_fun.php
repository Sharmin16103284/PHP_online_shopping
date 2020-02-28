<?php  
require "db.php";

if(empty($_GET['id'])) {
	echo "<script> alert(''Please select one item.') </script>";
	echo "<script> location='../arc_msg.php'</script>";
}
else{
	$id = mysqli_escape_string($conn, $_GET['id']);
	$sql = mysqli_query($conn, "UPDATE contact SET status = '1' WHERE id = '$id' ");
	
	if($sql) {
		echo "<script> location = '../new_msg.php'</script>";
	}
}
	
	
?>