<?php require "inc/security.php"; ?>
 <?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Last Week Report</h5>
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
                                                <th>Date</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
        <?php  
        $week = mysqli_query($conn, "SELECT * FROM pro_order WHERE on_date >= NOW() - INTERVAL 7 DAY AND ordr_status = '1' ");
        $weekamount = 0;
        while ($weekrow = mysqli_fetch_assoc($week)) {
            $weekamount += $weekrow['amount'];

    ?>
                                            <tr>
                                                <td><?= $weekrow['pro_name'] ;?></td>
                                                <td><?= $weekrow['pro_qty'] ;?></td>
												<td><?= $weekrow['name'] ;?></td>
												<td><?= $weekrow['mobile'] ;?></td>
												<td><?= $weekrow['address'] ;?></td>
                                                <td><?= $weekrow['method'] ;?></td>
                                                <td><?= $weekrow['trxid'] ;?></td>
                                                <td><?= $weekrow['on_date'] ;?></td>
                                                <td><?= $weekrow['amount'] ;?></td>
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
                                                <th>Date</th>
                                                <th>Total: <?= $weekamount ;?></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>