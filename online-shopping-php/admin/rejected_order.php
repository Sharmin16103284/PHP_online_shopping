<?php require "inc/security.php"; ?>
 <?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>


        
 
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Rejected Order</h5>
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
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
        <?php  
            $ordrsql = mysqli_query($conn, "SELECT * FROM pro_order WHERE ordr_status = '2' ");
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
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>