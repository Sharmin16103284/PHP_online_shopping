
<?php require "include/head.php" ;?>

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
<?php  
	if (empty($_GET['id'])) {
		echo "<script> alert('Please select a product first....!!!!') </script>";
		echo "<script> location = 'index.php' </script>";
	}else{
		$proid = mysqli_escape_string($conn, $_GET['id']);
		$prosql = mysqli_query($conn, "SELECT * FROM product WHERE pro_id = '$proid' ");
		$proinfo = mysqli_fetch_assoc($prosql);
	}
?>
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="admin/products/<?= $proinfo['image'] ;?>">
								<div class="thumb-image">
									<img style="width: 300px; height: 250px;" src="admin/products/<?= $proinfo['image'] ;?>" data-imagezoom="true" class="img-responsive" alt=""> 
								</div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3><?= $proinfo['name'] ;?></h3>
				<p>
					<span class="item_price">TK. <?= $proinfo['new_price'] ;?></span>
					<del>TK. <?= $proinfo['old_price'] ;?></del>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
							Stock: <span style="color:red;"><?= $proinfo['stock'] ;?></span>
						</li>
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>Description: </p>
					
					<p style="margin-bottom: 100px">
						<?= $proinfo['description'] ;?>
					</p>
				</div>
				
				<div>
					<form action="cartfunction.php" method="post">
					  <div class="form-group">
					    <input name="quantiry" min="1" type="number" class="form-control" id="quantity" placeholder="Quantiry" required>
					  </div>
					  <!-- Hidden values -->
					  <div class="form-group">
					    <input name="pro_id" type="hidden" value="<?= $proinfo['pro_id'] ;?>">
					  </div>
					  <div class="form-group">
					    <input name="pro_price" type="hidden" value="<?= $proinfo['new_price'] ;?>">
					  </div>
					  <div class="form-group">
					    <input name="pro_name" type="hidden" value="<?= $proinfo['name'] ;?>">
					  </div>
					  <!-- /Hidden values -->
					  <div class="form-group">
					    <input class="btn btn-success" type="submit" name="submit" value="Add to cart">
					  </div>
					</form>
				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Single Page -->
	<!-- special offers -->
	<?php require "include/specialoffers.php"; ?>
	<!-- //special offers -->
	
	<?php require "include/footer.php" ;?>