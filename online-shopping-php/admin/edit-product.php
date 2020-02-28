<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php

  if (isset($_POST['update'])) {

    $id = $_POST['pro_id'];
    $name = mysqli_escape_string($conn, $_POST['name']);
    $stock = mysqli_escape_string($conn, $_POST['stock']);
    $category = mysqli_escape_string($conn, $_POST['category']);
    $old_price = mysqli_escape_string($conn, $_POST['old_price']);
    $new_price = mysqli_escape_string($conn, $_POST['new_price']);
    $description = mysqli_escape_string($conn, $_POST['description']);


    $sql = mysqli_query($conn, "UPDATE product SET name = '$name', stock = '$stock', category = '$category', old_price = '$old_price', new_price = '$new_price',  description = '$description' WHERE pro_id = '$id' ");


    if ($sql) {
      echo "<script> alert('Product Edited...!!!') </script>";
      echo "<script> location = 'manage_product.php' </script>";
    }


  }

?>
		
		
		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Product</h4>
              <?php  
                  if (empty($_GET['id'])) {
                    echo "<script> alert('please select a product first...!!!') </script>";
                    echo "<script> location = 'manage_product.php' </script>";
                  }else{
                    $id = mysqli_escape_string($conn, $_GET['id']);
                    $prosql = mysqli_query($conn, "SELECT * FROM product WHERE pro_id = '$id' ");
                    $prorow = mysqli_fetch_assoc($prosql);
                  }


              ?>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control" id="fname" value="<?= $prorow['name'] ;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="stock" class="col-sm-3 text-right control-label col-form-label">Product Stock</label>
                                        <div class="col-sm-9">
                                            <input name="stock" type="number" class="form-control" id="stock" value="<?= $prorow['stock'] ;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label" for="category">Product category</label>
                                        <select class="form-control col-sm-9" id="category" name="category" required>
                                          <option value="<?= $prorow['category'] ;?>"><?= $prorow['category'] ;?></option>
                                          <option value="Special Offers">Special Offers</option>
                                          <option value="Kitchen">Kitchen</option>
                                          <option value="Household">Household</option>
                                          <option value="Snacks & Beverages">Snacks & Beverages</option>
                                          <option value="Personal Care">Personal Care</option>
                                          <option value="Sweets">Sweets</option>
                                          <option value="Fruits & Vegetables">Fruits & Vegetables</option>
                                          <option value="Baby Care">Baby Care</option>
                                          <option value="Soft Drinks & Juices">Soft Drinks & Juices</option>
                                          <option value="Frozen Food">Frozen Food</option>
                                          <option value="Bread & Bakery">Bread & Bakery</option>
                                          <option value="Rice, Flour & Pulses">Rice, Flour & Pulses</option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label for="old_price" class="col-sm-3 text-right control-label col-form-label">Old Price</label>
                                        <div class="col-sm-9">
                                            <input name="old_price" type="number" class="form-control" id="old_price" value="<?= $prorow['old_price'] ;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="new_price" class="col-sm-3 text-right control-label col-form-label">Old Price</label>
                                        <div class="col-sm-9">
                                            <input name="new_price" type="number" class="form-control" id="new_price" value="<?= $prorow['new_price'] ;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-3 text-right control-label col-form-label">Category Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="description" class="form-control" name="description"><?= $prorow['description'] ;?></textarea>
										                    </div>
                                    </div>
									                   
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="update" type="submit" class="btn btn-primary">Update</button>
                                        <input type="hidden" name="pro_id" value="<?= $prorow['pro_id'] ;?>">
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    
					

<?php require "footer.php" ; ?>