<?php require "inc/security.php"; ?>
<?php require "inc/db.php"; ?>

<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>


<div class="page-wrapper">
           <div class="row1">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="inc/aboutfun.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">About Page</h4>

									
<?php 
	$sql = mysqli_query($conn, "SELECT * FROM about");
	$row = mysqli_fetch_assoc($sql);
?>									
									
                                    <div class="form-group ">
                                        <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>">
                                        </div>
                                    </div>

                                    
									<div class="form-group ">
                                        
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="form-control" id="file" value="<?php echo $row['image']; ?>" />
										    </div>
                                    </div>
									
                                    <div class="form-group ">
                                        
                                        <div class="col-sm-9">
                                            <textarea id="description" class="form-control" name="description" placeholder="description"></textarea>
										</div>
                                    </div>
									
                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    

        
<?php require "footer.php" ; ?>