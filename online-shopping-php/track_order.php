
	<?php require "include/head.php" ; ?>


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
					<li>Track Order</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
		<?php
			$print_status = '';
			if (isset($_POST['submit'])) {
				$mobile = mysqli_escape_string($conn, $_POST['mobile']);
				$track_number = mysqli_escape_string($conn, $_POST['track_number']);

				$track_sql = mysqli_query($conn, "SELECT ordr_status FROM pro_order WHERE mobile = '$mobile' AND track_id = '$track_number' ");
				$track_row = mysqli_fetch_assoc($track_sql);
				
				
				if ($track_row['ordr_status'] == '0') {
					$print_status = "Your order is in review. Please wait for update.";
				}elseif($track_row['ordr_status'] == '1'){
					$print_status = "Your order is delivered.";
				}elseif($track_row['ordr_status'] == '2'){
					$print_status = "Your order is rejected.";
				}else{
					$print_status = 'Wrong Input';
				}
			}

			
		?>
	<!-- contact page -->
	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Track Your Order
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">

						<h3 style="color: red; margin-left: 35%;">
							<?php 
								echo $print_status ;
							?>
								
						</h3>


						<form action="" method="post">
							<div class="">
								<input name="mobile" type="text" placeholder="mobile number" required>
							</div>
							<div class="">
								<input name="track_number" type="text" placeholder="Tracking number" required>
							</div>
							<input name="submit" type="submit" value="Track">
						</form>
					</div>
					
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>
	<!-- map -->
	<div class="map w3layouts">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55565170.29301636!2d-132.08532758867793!3d31.786060306224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1512365940398"
		    allowfullscreen></iframe>
	</div>
	<!-- //map -->

	
	<?php require "include/footer.php" ; ?>