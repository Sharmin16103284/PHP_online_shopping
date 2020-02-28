<?php require "inc/security.php"; ?>
<?php  
require "inc/db.php";

if (empty($_GET['id'])) {
    echo "<script> alert('please select a product first...!!!') </script>";
    echo "<script> location = 'manage_product.php' </script>";
  }else{
    $id = mysqli_escape_string($conn, $_GET['id']);
    $prosql = mysqli_query($conn, "DELETE FROM product WHERE pro_id = '$id' ");
  	
  	if ($prosql) {
  		echo "<script> alert('Product deleted...!!!') </script>";
    	echo "<script> location = 'manage_product.php' </script>";
  	}
  }

?>