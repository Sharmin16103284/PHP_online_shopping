	
	<?php require "include/head.php" ;?>
	
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Sweets</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Sweets
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<?php require "include/nav.php" ;?>
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9 w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">

						<?php  
				$kitchensql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Sweets' ORDER BY pro_id DESC");
				while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

			?>

						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img width="140px" height="150px;" src="admin/products/<?= $kitchenrow['image'] ;?>">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.php?id=<?= $kitchenrow['pro_id'] ;?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product " style="margin-bottom: 50px;">
									<h4>
										<a href="single.php?id=<?= $kitchenrow['pro_id'] ;?>"><?= $kitchenrow['name'] ;?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">TK. <?= $kitchenrow['new_price'] ;?></span>
										<del>TK. <?= $kitchenrow['old_price'] ;?></del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cartfunction.php" method="post">
											<fieldset>
												<input type="hidden" name="quantiry" value="1" />
												<input type="hidden" name="pro_id" value="<?= $kitchenrow['pro_id'] ;?>" />
												<input type="hidden" name="pro_price" value="<?= $kitchenrow['new_price'] ;?>" />
												<input type="hidden" name="pro_name" value="<?= $kitchenrow['name'] ;?>" />
												
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
				<?php } ?>

						<div class="clearfix"></div>
					</div>
					

				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<?php require "include/specialoffers.php"; ?>
	<!-- //special offers -->
	
	<?php require "include/footer.php" ;?>