<?php 
require "include/db.php";
require "include/head.php" ; ?>


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
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- about page -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
		

<?php 
	$sql = mysqli_query($conn, "SELECT * FROM about");
	$row = mysqli_fetch_assoc($sql);
?>		

			<!-- tittle heading -->
			<h3 class="tittle-w3l">  <?php echo $row['name'] ; ?>
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="w3l-welcome-info">
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about2.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3l-welcome-text">
				<p style="color: black"><?php echo $row['description'] ;?> </p>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	
	<!-- //about page -->

	
	<?php require "include/footer.php" ; ?>