<?php 
session_start();
  
require "db.php";

	if(isset($_POST['signup'])){
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
	    $password = mysqli_real_escape_string($conn,$_POST['password']);
	    $mdpass=md5($password);

	    //insert datas info database
	    $signupsql="INSERT INTO user(name,email,password) VALUES ('$name','$email','$mdpass')";

	    $run_signupsql=mysqli_query($conn,$signupsql);

	    if($run_signupsql){
	    	echo"<script> alert('Registration complete!!')</script>";
	    	echo"<script> location='index.php'</script>";
	    }
	}

	if (isset($_POST['signin'])) {
		$email = mysqli_real_escape_string($conn,$_POST['email']);
	    $password = mysqli_real_escape_string($conn,$_POST['password']);
	    $mdpass=md5($password);

	    $usersql = "SELECT * FROM user WHERE email = '$email' AND password = '$mdpass' ";
        $run_sql = mysqli_query($conn, $usersql);
        $count = mysqli_num_rows($run_sql);
        $abc = mysqli_fetch_assoc($run_sql);
        $userID = $abc['id'];
        

        if ($count > 0) {
            session_start();
            $_SESSION['userMail'] = $email;
            $_SESSION['userID'] = $userID;
            echo "<script> alert('Welcome user..!!!') </script>";
            echo "<script> location = 'index.php' </script>";
		}else{
            echo "<script> alert('Login information did not matched..!!!') </script>";
           // echo "<script> location = 'index.php' </script>";
        }	
	}



	$fetchtitle = mysqli_query($conn, "SELECT title FROM setting WHERE id = '1' "); 
	$row = mysqli_fetch_assoc($fetchtitle);
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo $row['title'] ; ?> </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="./css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">


	<style>
		@media print {
			.hidethispart {
				display: none;
			}
		}
	</style>
</head>

<body>
	<!-- top-header -->
	<div class="header-most-top hidethispart">
		<p>Grocery Offer Zone Top Deals & Discounts</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot hidethispart">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.php">
						<span>G</span>rocery
						<span>S</span>hoppy
						<img src="images/logo2.png">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
					</li>
					
<?php
	if(empty($_SESSION['userMail'])) {
 ?>
					
					
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
					</li>
					
<?php 
	} else{
?>
					
					<li>
						<a href="include/logout.php">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign Out </a>
					</li>
					
	<?php 
		} 
	?>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="search.php" method="get">
						<input name="search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">

						<button class="w3view-cart" type="submit" name="submit" value="">
							<a style="color: white;" href="checkout.php">
	<?php  
		if (empty($_SESSION['userMail'])) {
	?>


						<i class="fa fa-cart-arrow-down"></i>


	<?php  
		}else{
			$Mailuser = $_SESSION['userMail'];
			$countSql = mysqli_query($conn, "SELECT cart_id FROM cart WHERE user_email = '$Mailuser' ");
			$count = mysqli_num_rows($countSql);

	?>


						<i class="fa fa-cart-arrow-down"></i><?= $count ;?>
	<?php } ?>
	




								
							</a>
						</button>
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade hidethispart" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="email" placeholder="User email" name="email" required>
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required>
							</div>
							<input name="signin" type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade hidethispart" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Grocery Shoppy! Let's set up your Account.
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="name" required>
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="email" required>
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required>
							</div>
							
							<input name="signup" type="submit" value="Sign Up">
						</form>
						<p>
							<a href="terms.php">By clicking sign up, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top hidethispart">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li>
									<a class="nav-stylehead" href="index.php">Home</a>
								</li>
								<li>
									<a class="nav-stylehead" href="about.php">About Us</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="special.php">Special Offers</a>
													</li>
													<li>
														<a href="kitchen.php">Kitchen</a>
													</li>
													<li>
														<a href="household.php">Household</a>
													</li>
													<li>
														<a href="snacks_beverage.php">Snacks & Beverages</a>
													</li>
													<li>
														<a href="personalcare.php">Personal Care</a>
													</li>
													<li>
														<a href="sweet.php">Sweets</a>
													</li>
													<li>
														<a href="fruits_vegetable.php">Fruits & Vegetables</a>
													</li>
													<li>
														<a href="baby_care.php">Baby Care</a>
													</li>
													<li>
														<a href="softdrink_juice.php">Soft Drinks & Juices</a>
													</li>
													<li>
														<a href="frozen_food.php">Frozen Food</a>
													</li>
													<li>
														<a href="bread_bakery.php">Bread & Bakery</a>
													</li>
													<li>
														<a href="rice_flour_pulses.php">Rice, Flour & Pulses</a>
													</li>
												</ul>
											</div>
											
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="contact.php">Contact</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="track_order.php">Track</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->