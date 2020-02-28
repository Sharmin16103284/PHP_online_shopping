<?php require "inc/security.php"; ?>
<?php require "inc/db.php"; ?>

 <?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
 
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Unread Messages</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="150px">Name</th>
                                                <th width="150px">Subject</th>
                                                <th width="250px">Email</th>
                                                <th width="">Message</th>
                                                <th width="100px">Status</th>
                                                
                                            </tr>
                                        </thead>
										
<?php 
	$sql = mysqli_query($conn, "SELECT * FROM contact WHERE status = '0' ");
	while ($row = mysqli_fetch_assoc($sql)) {
?>									
										
                                        <tbody>
                                            <tr>
                                                <td><?= $row['name'] ; ?></td>
                                                <td><?= $row['subject'] ; ?></td>
                                                <td><?= $row['email'] ; ?></td>
                                                <td><?= $row['message'] ; ?></td>
                                                <td><a href="inc/arch_fun.php?id=<?= $row['id'] ; ?>" class="btn btn-primary">
												<span><i class="fa fa-check"></i></span>
												</a>
												</td>
                                            </tr>
                                        </tbody>
										
	<?php } ?>
										
                                        <tfoot>
                                            <tr>
												<th>Name</th>
                                                <th>Subject</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>