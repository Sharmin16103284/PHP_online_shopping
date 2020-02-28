<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
 
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage Product</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
												<th>Product Image</th>
                                                <th>Product Category</th>
                                                <th>Product Stock</th>
                                                <th>Product Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    <?php  
                        $prosql = mysqli_query($conn, "SELECT * FROM product");
                        while ($prorow = mysqli_fetch_assoc($prosql)) {
                
                    ?>
                                            <tr>
                                                <td><?= $prorow['name'] ;?></td>
                                                <td>
                                                    <img width="60px" src="products/<?= $prorow['image'] ;?>">
                                                </td>
                                                <td><?= $prorow['category'] ;?></td>
												<td><?= $prorow['stock'] ;?></td>
                                                <td><?= $prorow['new_price'] ;?></td>
                                                <td>
    												<a href="edit-product.php?id=<?= $prorow['pro_id'] ;?>" class="btn btn-success">
    												    <span><i class="fa fa-edit"></i></span>
    												</a>
    												<a href="delete-product.php?id=<?= $prorow['pro_id'] ;?>" class="btn btn-danger">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>
                                                </td>
                                            </tr>
                    <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Product Image</th>
                                                <th>Product Category</th>
                                                <th>Product Stock</th>
                                                <th>Product Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>