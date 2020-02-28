<?php require "inc/security.php"; ?>

<?php require "nav.php" ; ?>
              
<?php require "sidemenu.php" ; ?>
              
			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">

        <?php
            $fetchcredit = mysqli_query($conn, "SELECT credit FROM setting WHERE id = '1' "); 
            $row = mysqli_fetch_assoc($fetchcredit);
        ?>
                            <form action="inc/creditfun.php"  method="post" >
                                <div class="card-body">
                                    <h4 class="card-title">Change footer credit</h4>
                                    <div class="form-group row">
                                        <label for="credit" class="col-sm-12 text-right control-label col-form-label"></label>
                                        
                                            <input name="credit" type="text" class="form-control" value="<?php echo $row['credit'] ?>" >
                                        
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