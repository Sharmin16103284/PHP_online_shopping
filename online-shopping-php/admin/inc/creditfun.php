<?php  
require "db.php";

	if(isset($_POST['submit'])) {
		$credit = mysqli_escape_string($conn, $_POST['credit']);

		$tsql = "UPDATE setting SET credit = '$credit' WHERE id='1' " ;
		$run_sql = mysqli_query($conn, $tsql);

		if($run_sql){
			echo"<script> alert('credit Updated.')</script>";
	    	echo"<script> location='../credit.php'</script>";
	    }
	}


?>