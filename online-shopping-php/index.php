<?php require "include/head.php" ; ?>



	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Deal</span>
						</h3>
						<p>Get Best Offer Upto
							<span>20%</span>
						</p>
						
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Top Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			
			<?php require "include/nav.php" ; ?>
			
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Kitchen</h3>
			<?php  
				$kitchensql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Kitchen' ORDER BY pro_id DESC LIMIT 3 ");
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
								<div class="item-info-product ">
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
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Pure Energy</h3>
							<h6>Enjoy our all healthy Products</h6>
							<p>Get Extra 10% Off</p>
						</div>
						<h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
						<div class="col-xs-5 bg-right-nut">
							<img src="images/nut1.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Household</h3>
						<?php  
				$housesql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Household' ORDER BY pro_id DESC LIMIT 3 ");
				while ($houserow = mysqli_fetch_assoc($housesql)) {

			?>

						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img width="140px" height="150px;" src="admin/products/<?= $houserow['image'] ;?>">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.php?id=<?= $houserow['pro_id'] ;?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.php?id=<?= $houserow['pro_id'] ;?>"><?= $houserow['name'] ;?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">TK. <?= $houserow['new_price'] ;?></span>
										<del>TK. <?= $houserow['old_price'] ;?></del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cartfunction.php" method="post">
											<fieldset>
												<input type="hidden" name="quantiry" value="1" />
												<input type="hidden" name="pro_id" value="<?= $houserow['pro_id'] ;?>" />
												<input type="hidden" name="pro_price" value="<?= $houserow['new_price'] ;?>" />
												<input type="hidden" name="pro_name" value="<?= $houserow['name'] ;?>" />
												
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
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Snacks & Beverages</h3>


						<?php  
				$snacksql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Snacks & Beverages' ORDER BY pro_id DESC LIMIT 3 ");
				while ($snackrow = mysqli_fetch_assoc($snacksql)) {

			?>

						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img width="140px" height="150px;" src="admin/products/<?= $snackrow['image'] ;?>">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.php?id=<?= $snackrow['pro_id'] ;?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.php?id=<?= $snackrow['pro_id'] ;?>"><?= $snackrow['name'] ;?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">TK. <?= $snackrow['new_price'] ;?></span>
										<del>TK. <?= $snackrow['old_price'] ;?></del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cartfunction.php" method="post">
											<fieldset>
												<input type="hidden" name="quantiry" value="1" />
												<input type="hidden" name="pro_id" value="<?= $snackrow['pro_id'] ;?>" />
												<input type="hidden" name="pro_price" value="<?= $snackrow['new_price'] ;?>" />
												<input type="hidden" name="pro_name" value="<?= $snackrow['name'] ;?>" />
												
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
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<?php require "include/specialoffers.php"; ?>
	<!-- //special offers -->

	
	<?php require "include/footer.php" ; ?>