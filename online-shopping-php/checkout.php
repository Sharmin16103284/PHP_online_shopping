<?php require "include/head.php" ; ?>
<?php
// delete product from cart
	if (isset($_POST['del'])) {
		$crt_id = mysqli_escape_string($conn, $_POST['cart_id']);
		$del_cart = mysqli_query($conn, "DELETE FROM cart WHERE cart_id = '$crt_id' ");
		if ($del_cart) {
			echo "<script> location = 'checkout.php' </script>";
		}else{
			echo "<script> alert('Try again') </script>";
			echo "<script> location = 'checkout.php' </script>";
		}
	}
// updating cart system

// checking if user logedin on not..
	if (empty($_SESSION['userID']) AND empty($_SESSION['userMail'])) {
		echo "<script> alert('Please login first...!!') </script>";
		echo "<script> location = 'index.php' </script>"; 
	}else{
		$userID = $_SESSION['userID'];
		$userEmail = $_SESSION['userMail'];
	}

if (isset($_POST['qty_update'])) {
	$crt_id = mysqli_escape_string($conn, $_POST['cart_id']);
	echo $crt_id;
}
?>

	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Total</th>
								<th>Track ID</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
	<?php  
	$cart = mysqli_query($conn, "SELECT * FROM cart INNER JOIN product ON cart.product_id = product.pro_id WHERE user_id = '$userID' AND user_email = '$userEmail' ");
	$counter = 1;
	$totalamount = 0;
	$totalsum = 0;
	while ($cartrow = mysqli_fetch_assoc($cart)) {
	?>
							<tr class="rem1">
								<td class="invert"><?= $counter ;?></td>
								<td class="invert-image">
									<img src="admin/products/<?= $cartrow['image'] ;?>" class="img-responsive">
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<td><?= $cartrow['qty'] ;?></td>
										</div>
									</div>
								</td>
								<td class="invert"><?= $cartrow['name'] ;?></td>
								<td class="invert">TK. <?= $cartrow['price'] ;?></td>
								<td class="invert">
									<?php $totalamount = $cartrow['price'] * $cartrow['qty'] ;?>
									TK. <?= $totalamount ;?>		
								</td>
								<td class="invert"><?= $cartrow['tack_id'] ;?></td>
								<!-- <td class="invert">
									<div class="rem">
										<div class="close1"> </div>
									</div>
								</td> -->
								<td class="invert">
									<div class="rem">
										<form action="" method="post">
											<input type="hidden" name="cart_id" value="<?= $cartrow['cart_id'] ;?>">
											<input name="del" type="submit" value="X">
										</form>
									</div>
								</td>
							</tr>

							
<?php  
$counter++;
$totalsum += $totalamount;
}
?>

							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th>Total: <?= $totalsum ;?> Tk</th>
								<th></th>
								<th></th>
							</tr>

							
						</tbody>
					</table>
					
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Delivery Information</h4>
					<form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">

									<div class="controls">
										<input style="color: black;" class="billing-address-name" type="text" name="name" placeholder="Full Name" required>
									</div>

									<div class="w3_agileits_card_number_grids">

										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input style="color: black;" type="number" placeholder="Mobile Number" name="mobile" required>
											</div>
										</div>

										<div class="w3_agileits_card_number_grid_right">

											<div class="controls">
												<input style="color: black;" type="text" placeholder="Delivery address" name="address" required>
											</div>

										</div>

										<div class="controls">
											<h5 style="color: black">Bkash Number: <span style="color: red;">0123456789</span></h5>
											<input style="width: 10%" value="bkash" type="radio" name="payment" required> <span style="color:black">Bkash</span> <br>

											<input style="width: 10%; margin-bottom: 18px" value="cod" type="radio" name="payment" required> <span style="color:black">Cash On Delivery</span>
										</div>

										<div class="w3_agileits_card_number_grid_right">

											<div class="controls">
												<input style="color: black;" type="text" placeholder="Bkash TrxID" name="trxid">
											</div>

										</div>

										<div class="clear"> </div>
									</div>

								</div>
								<input type="hidden" name="user_id" value="<?= $userID ;?>">
								<input type="hidden" name="user_email" value="<?= $userEmail ;?>">
								<input style="color: black;" type="submit" name="submit" value="Make Payment">
							</div>
						</div>
					</form>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->
	<?php require "include/footer.php" ; ?>