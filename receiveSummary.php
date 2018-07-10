<?php
require_once 'page_load.php';
require 'module/structure/html_open.php';
 require 'module/structure/head.php';
require 'module/structure/datatablecss.php'; // This is making problems in display
require 'module/structure/head_close.php';
require 'module/structure/topNavBar.php';
require 'module/structure/wrapper_open.php';
require 'module/structure/leftNavBar.php';
?>

<div class="main-page">

<!-- - - - - - -  Title Bar - - - - - - - -->
            <div class="container-fluid">
                <div class="row page-title-div">
                    <div class="col-sm-6">
                        <h2 class="title">Receivables Summary</h2>
                    </div>
                    
                </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
                          <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
                          <li>Finance</li>
                          <li><a href="receivables">Receivables</a></li>
                          <li class="active"><a href="receiveDetails">Receivables Summary</a></li>
						            </ul>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
<!-- End Title Bar -->

<!-- ========== Content ========== -->
       <section class="section">
              <div class="container-fluid">
<br />
                  <div class="row p-10">
                     <div class="col-md-10 col-md-offset-1">
                          <div class="panel-heading">
                            <?php 
                            $id = $_GET['id'];  
                            $name = $_GET['name'];
                            ?>                    
                            <h3>Client Name: <b><?php echo $name; ?></b> </h3>
                            
                            
                          </div>
                         <div class="panel">
                             <div class="panel-body p-20">
                                <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead class="bg-info-100">
                                        <tr>
                                            <th class="text-center">Transaction ID</th>
                                            <th class="text-center">Account</th>
                                            <th class="text-center">Date</th>
                                             <th class="text-center">Vehicle</th>
                                            <th class="text-center">Payment</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        $sql = "SELECT * FROM db_trip_ticket WHERE customer='$name'";
                                        $result=mysqli_query($con,$sql);
                                        if ($result->num_rows > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $client = $row['account'];
                                                $ti = $row["ticket_id"];;
                                    ?>
                                    <tbody>
                                        <tr>
                                          <td class="text-center"><?php echo $ti; ?></td>
                                          <td class="text-center"><?php echo $client; ?></a></td>
                                          <td class="text-center"><?php echo $row["trip_date"]; ?></td>
                                          <td class="text-center"><?php echo $row["vehicle_id"]; ?></td>
                                          <?php 
                                          $acc = $row['account'];
                                          $veh_id = $row['vehicle_id'];
                                          $veh = "SELECT * FROM db_vehicles_detail WHERE plate_no='$veh_id'"; 
                                          $query = mysqli_query($con,$veh);
                                          $get = mysqli_fetch_assoc($query);
                                          $cat = $get['vehicle_category']; 
                                          //echo $cat;
                                          if ($cat == '0') { 
                                          $vehi = "SELECT * FROM db_trip_rate WHERE delivery='$acc'"; 
                                          $squery = mysqli_query($con,$vehi);
                                          $gets = mysqli_fetch_assoc($squery);
                                          $cats = $gets['4wh']; ?>
                                          <td style="width:8%;" class="text-center"><?php echo $cats; ?></td>
                                           <?php }
                                          else if ($cat == '1') { 
                                          $vehi = "SELECT * FROM db_trip_rate WHERE delivery='$acc'"; 
                                          $squery = mysqli_query($con,$vehi);
                                          $gets = mysqli_fetch_assoc($squery);
                                          $cats = $gets['6wh']; ?>
                                          <td style="width:8%;" class="text-center"><?php echo $cats; ?></td>
                                           <?php }
                                          else if ($cat == '2') { 
                                          $vehi = "SELECT * FROM db_trip_rate WHERE delivery='$acc'"; 
                                          $squery = mysqli_query($con,$vehi);
                                          $gets = mysqli_fetch_assoc($squery);
                                          $cats = $gets['10wh']; ?>
                                           <td style="width:8%;" class="text-center"><?php echo $cats; ?></td>
                                          <?php }
                                          else if ($cat == '3') { 
                                          $vehi = "SELECT * FROM db_trip_rate WHERE delivery='$acc'"; 
                                          $squery = mysqli_query($con,$vehi);
                                          $gets = mysqli_fetch_assoc($squery);
                                          $cats = $gets['tractor']; ?>
                                           <td style="width:8%;" class="text-center"><?php echo $cats; ?></td>
                                          <?php } 
                                          
                                          if ($row['billed']=='0') {
                                          ?>
                                          <td style="width:15%;" class="text-center">
                                            <button onclick="window.location.href='receiveDetail?categ=&name=<?php echo $row["account"]; ?>&id=<?php echo $row["ticket_id"]; ?>&email=<?php echo $_SESSION['email']; ?>'" class="btn btn-primary btn-xs btn-labeled" >Print Billing<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span</button>
                                          </td>
                                          <?php } else { ?>
                                          <td style="width:15%;" class="text-center">
                                            <button onclick="window.location.href='receiveDetail?categ=&name=<?php echo $row["account"]; ?>&id=<?php echo $row["ticket_id"]; ?>&email=<?php echo $_SESSION['email']; ?>'" class="btn btn-success btn-xs btn-labeled" >Printed bill<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span</button>
                                          </td>
                                          <?php }; ?>
                                        </tr>
                                    </tbody>
                                    <?php } }?> 
                                </table>
                              </div>
                          </div>
                      </div>
                    </div>


              </div>  <!-- /.container-fluid -->
    </section> <!-- End of Content -->




</div> <!- End Main Page>

<?php
require 'module/structure/rightNavBar.php';
require 'module/structure/wrapper_close.php';
require 'module/structure/commonjs.php';
?>

<!-- ======= DATA TABLES JS ====== -->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>

<script>
$(document).ready(function() {
 
  $('#projectTable').DataTable({
    dom: 'Bfrtip',
    lengthMenu: [
        [ 10, 20, 40, -1 ],
        [ '10 rows', '20 rows', '40 rows', 'Show all' ]
      ],

    buttons: [
      'pageLength'
      ]

  });
  
} );
</script>

<?php  require 'module/structure/html_close.php';?>
