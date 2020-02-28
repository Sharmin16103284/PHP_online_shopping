<?php  
require "db.php";
$image="";
	if(isset($_POST['submit'])) {
	//	 $target = "products/".basename($_FILES['image']['name']);
		
		
		$name = mysqli_escape_string($conn, $_POST['name']);
		$image = $_FILES['image']['name'];
		$description = mysqli_escape_string($conn, $_POST['description']);
	}
	$sql = "UPDATE about SET name = '$name' , image = '$image' , description = '$description' " ;
	$run_sql = mysqli_query($conn, $sql);
	
	// move_uploaded_file($_FILES['image']['tmp_name'], $target);
	
	
	    if($run_sql){
			echo"<script> alert('About Page Updated.')</script>";
	    	echo"<script> location='../about.php'</script>";
	    }
	
	
?>