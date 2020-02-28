<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php  
  if (isset($_POST['submit'])) {
    $target = "products/".basename($_FILES['image']['name']);

    $name = mysqli_escape_string($conn, $_POST['name']);
    $stock = mysqli_escape_string($conn, $_POST['stock']);
    $category = mysqli_escape_string($conn, $_POST['category']);
    $old_price = mysqli_escape_string($conn, $_POST['old_price']);
    $new_price = mysqli_escape_string($conn, $_POST['new_price']);
    $image = $_FILES['image']['name'];
    $description = mysqli_escape_string($conn, $_POST['description']);


    $sql = mysqli_query($conn, "INSERT INTO product (name, stock, category, old_price, new_price, image, description) VALUES ('$name', '$stock', '$category', '$old_price', '$new_price', '$image', '$description')");

    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    if ($sql) {
      echo "<script> alert('New product added...!!!') </script>";
      echo "<script> location = 'add_product.php' </script>";
    }


  }

?>
		
		
		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Add new Product</h4>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control" id="fname" placeholder="Product Name Here">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="stock" class="col-sm-3 text-right control-label col-form-label">Product Stock</label>
                                        <div class="col-sm-9">
                                            <input name="stock" type="number" class="form-control" id="stock" placeholder="Stock limit">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label" for="category">Product category</label>
                                        <select class="form-control col-sm-9" id="category" name="category" required>
                                          <option>Select Product Category</option>
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
                                            <input name="old_price" type="number" class="form-control" id="old_price" placeholder="Old Price">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="new_price" class="col-sm-3 text-right control-label col-form-label">Old Price</label>
                                        <div class="col-sm-9">
                                            <input name="new_price" type="number" class="form-control" id="new_price" placeholder="New Price">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-3 text-right control-label col-form-label">Category Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="description" class="form-control" name="description"></textarea>
										</div>
                                    </div>
									<div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">Product Image</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="form-control" id="file"  />
										    </div>
                                    </div>
                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    
					

<?php require "footer.php" ; ?>