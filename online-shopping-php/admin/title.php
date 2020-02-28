<?php require "inc/security.php"; ?>

<?php require "nav.php" ; ?>
              
<?php require "sidemenu.php" ; ?>

<?php  
require "inc/db.php";

    if(isset($_POST['submit'])) {
        $title = mysqli_escape_string($conn, $_POST['title']);

        $tsql = "UPDATE setting SET title = '$title' WHERE id='1' " ;
        $run_sql = mysqli_query($conn, $tsql);

        if ($run_sql) {
            echo "<script> alert('Website title updated....') </script>";
            echo "<script> location = 'title.php' </script>";
        }

        
    }
    
    $fetchtitle = mysqli_query($conn, "SELECT title FROM setting WHERE id = '1' "); 
    $row = mysqli_fetch_assoc($fetchtitle);
?>

              
			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="#"  method="post" >
                                <div class="card-body">
                                    <h4 class="card-title">Change website title</h4>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-12 text-right control-label col-form-label"></label>
                                        <input name="title" type="text" class="form-control"  value="<?php echo $row['title'] ?>" >
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="Submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
			  
			  
			  
<?php require "footer.php" ; ?>