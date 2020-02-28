<?php require "inc/security.php"; ?>
 <?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>

<?php  
    if (isset($_POST['send'])) {
        $curr_ordr_id = $_POST['ordr_id'];
        $ordr_sql = mysqli_query($conn, "UPDATE pro_order SET ordr_status = '1' WHERE order_id = '$curr_ordr_id' ");
        if ($ordr_sql) {
            echo "<script> location = 'order.php' </script>";
        }
    }
    if (isset($_POST['del'])) {
        $curr_ordr_id = $_POST['ordr_id'];
        $ordr_sql = mysqli_query($conn, "UPDATE pro_order SET ordr_status = '2' WHERE order_id = '$curr_ordr_id' ");
        if ($ordr_sql) {
            echo "<script> location = 'order.php' </script>";
        }
    }

?>
        
 
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">New Order</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Qty</th>
                                                <th>Person</th>
                                                <th>Mobile</th>
												<th>Address</th>
												<th>payment</th>
                                                <th>TrxID</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
        <?php  
            $ordrsql = mysqli_query($conn, "SELECT * FROM pro_order WHERE ordr_status = '0' ");
            while ($ordrrow = mysqli_fetch_assoc($ordrsql)) {
        ?>
                                            <tr>
                                                <td><?= $ordrrow['pro_name'] ;?></td>
                                                <td><?= $ordrrow['pro_qty'] ;?></td>
												<td><?= $ordrrow['name'] ;?></td>
												<td><?= $ordrrow['mobile'] ;?></td>
												<td><?= $ordrrow['address'] ;?></td>
                                                <td><?= $ordrrow['method'] ;?></td>
                                                <td><?= $ordrrow['trxid'] ;?></td>
                                                <td><?= $ordrrow['amount'] ;?></td>
                                                <td><?= $ordrrow['on_date'] ;?></td>
												<td>
                                                    <form action="" method="post">
                                                        <input type="hidden" name="ordr_id" value="<?= $ordrrow['order_id'] ;?>">
                                                        <button name="send" class="btn btn-primary">
                                                            <span><i class="fas fa-paper-plane"></i></span>
    												    </button>
                                                        <button name="del" class="btn btn-primary" style="background: red">
                                                            <span><i class="fas fa-times"></i></span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
												<th>Product</th>
                                                <th>Qty</th>
                                                <th>Person</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                                <th>payment</th>
                                                <th>TrxID</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>