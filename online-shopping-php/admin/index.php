<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>


<div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
	<div class="container-fluid">
               
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <a href="index.php">
								<h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
								</a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <a href="add_product.php">
								<h1 class="font-light text-white"><i class="far fa-plus-square"></i></h1>
                                <h6 class="text-white">Add Product</h6>
								</a>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <a href="order.php">
								<h1 class="font-light text-white"><i class="fas fa-shopping-bag"></i></h1>
                                <h6 class="text-white">New Order</h6>
								</a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <a href="new_msg.php">
								<h1 class="font-light text-white"><i class="far fa-envelope"></i></h1>
                                <h6 class="text-white">Messages</h6>
								</a>
                            </div>
                        </div>
                    </div>
					 
					 <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box text-center" style="background-color: #FB0881">
                                <a href="title.php">
								<h1 class="font-light text-white"><i class="fas fa-cogs"></i></h1>
                                <h6 class="text-white">Setting</h6>
								</a>
                            </div>
                        </div>
                    </div>
					 <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <a href="about.php">
								<h1 class="font-light text-white"><i class="fas fa-file-alt"></i></h1>
                                <h6 class="text-white">Pages</h6>
								</a>
                            </div>
                        </div>
                    </div>

    <?php  
        $week = mysqli_query($conn, "SELECT * FROM pro_order WHERE on_date >= NOW() - INTERVAL 7 DAY AND ordr_status = '1' ");
        $weekamount = 0;
        while ($weekrow = mysqli_fetch_assoc($week)) {
            $weekamount += $weekrow['amount'];
        }
    ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box text-center" style="background-color: #9412FA">
                                <a href="report.php">
                                <h1 class="font-light text-white">TK. <?= $weekamount ;?></h1>
                                <h6 class="text-white">Last week sell</h6>
                                </a>
                            </div>
                        </div>
                    </div>
    <?php  
        $month = mysqli_query($conn, "SELECT * FROM pro_order WHERE on_date >= NOW() - INTERVAL 30 DAY AND ordr_status = '1' ");
        $monthamount = 0;
        while ($monthrow = mysqli_fetch_assoc($month)) {
            $monthamount += $monthrow['amount'];
        }
    ?>

                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box text-center" style="background-color: #6f9e21">
                                <a href="report.php">
                                <h1 class="font-light text-white">TK. <?= $monthamount ;?></h1>
                                <h6 class="text-white">Last month sell</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
		
	</div>
 </div>       
<?php require "footer.php" ; ?>