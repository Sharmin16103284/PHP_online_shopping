<?php  
require "db.php";


	if (isset($_POST['login'])) {
		$email = mysqli_escape_string($conn, $_POST['email']);
	    $password = mysqli_escape_string($conn, $_POST['password']);
	    $mdpass= md5($password);

	    $regsql = "SELECT * FROM admin WHERE email = '$email' AND password = '$mdpass' ";
        $run_regsql = mysqli_query($conn, $regsql);
        $count = mysqli_num_rows($run_regsql);

        

        if ($count > 0) {
            session_start();
            $_SESSION['adminMail'] = $email;
            echo "<script> alert('Welcome Admin..!!!') </script>";
            echo "<script> location = '../index.php' </script>";
		}else{
            echo "<script> alert('Login information did not matched..!!!') </script>";
			echo "<script> location = '../login.php' </script>";
        }	
	}




?>