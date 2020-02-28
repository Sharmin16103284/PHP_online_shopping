<?php require "inc/security.php"; ?>
 <?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
 

<?php  
// getting date from user
    if (isset($_POST['submit'])) {
        $start_date = mysqli_escape_string($conn, $_POST['start_date']);
        $end_date = mysqli_escape_string($conn, $_POST['end_date']);
    }else{
        $start_date = '';
        $end_date = '';
    }
?>
 <div class="page-wrapper">
    
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Custom Report</h5>
                                <div class="table-responsive">

                                    <form action="" method="post">
                                        <table>
                                            <tr>
                                                <th>
                                                    <label for="start_date">From Date:</label>
                                                </th>
                                                <th>
                                                    <input name="start_date" type="date" class="form-control" id="start_date" required>
                                                </th>
                                                <th>
                                                    <label for="end_date">To Date:</label>
                                                </th>
                                                <th>
                                                    <input name="end_date" type="date" class="form-control" id="end_date" required>
                                                </th>
                                                <th>
                                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                                </th>
                                            </tr>
                                        </table>
                                    </form>

                                    <?php if (!empty($start_date) AND !empty($end_date)): ?>
                                        <h4 style="margin: 10px 0px">Report form <?= $start_date ;?> to <?= $end_date ;?></h4>
                                    <?php endif ?>


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
        $week = mysqli_query($conn, "SELECT * FROM pro_order WHERE (on_date BETWEEN '$start_date' AND '$end_date') AND ordr_status = '1' ");
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