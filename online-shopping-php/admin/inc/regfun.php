<?php  
require "db.php";

	if(isset($_POST['register'])){
		$name = mysqli_escape_string($conn,$_POST['name']);
		$email = mysqli_escape_string($conn,$_POST['email']);
	    $password = mysqli_escape_string($conn,$_POST['password']);
	    $mdpass=md5($password);

	    //insert datas info database
	    $regsql="INSERT INTO admin (name,email,password) VALUES ('$name','$email','$mdpass')";

	    $run_regsql=mysqli_query($conn,$regsql);

	    if($run_regsql){
	    	echo"<script> alert('Registration complete!!')</script>";
	    	echo"<script> location='../admin.php'</script>";
	    }
	}





?>