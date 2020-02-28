<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Special Offers
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
			<?php  
				$specialsql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Special Offers' ORDER BY pro_id LIMIT 8 ");
				while ($specialrow = mysqli_fetch_assoc($specialsql)) {

			?>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.php?id=<?= $specialrow['pro_id'] ;?>">
									<img height="200px" src="admin/products/<?= $specialrow['image'] ;?>">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.php?id=<?= $specialrow['pro_id'] ;?>"><?= $specialrow['name'] ;?></a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>TK. <?= $specialrow['new_price'] ;?></h6>
									<del>TK. <?= $specialrow['old_price'] ;?></del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="cartfunction.php" method="post">
										<fieldset>
											<input type="hidden" name="quantiry" value="1" />
											<input type="hidden" name="pro_id" value="<?= $specialrow['pro_id'] ;?>" />
											<input type="hidden" name="pro_price" value="<?= $specialrow['new_price'] ;?>" />
											<input type="hidden" name="pro_name" value="<?= $specialrow['name'] ;?>" />
											
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
		<?php } ?>
				</ul>
			</div>
		</div>
	</div>