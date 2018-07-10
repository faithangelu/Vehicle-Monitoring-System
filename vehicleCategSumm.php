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
                        <h2 class="title">Operations Management</h2>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li class="active"><a href="operations">Operations Management</a></li>
							                   <li class="active"><a href="Customers"></a></li>
						            </ul>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      <!-- End Title Bar -->

     
         <div class="row p-10">
                 <div class="col-md-10 col-md-offset-1">
                    
                     <div class="panel" style="background: #dfe4ea">
                         <h4 class="title" style="margin-left: 20px; margin-top:20px;  font-weight: bold; text-align: center;">TRUCK WITH TRIPS</h4>
                         <div class="panel-body p-20">
                            <table id="projectTable2" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead class="bg-success-300">
                                    <tr>
                                        <th class="text-center">Plate Number</th>
                                        <th class="text-center">Vehicle Name</th>
                                        <th class="text-center">Trip Date</th>
                                        <th class="text-center">Delivery Location</th>
                                    </tr>
                                </thead>
                                <?php 
                                        $cat = $_GET['categ'];
                                        $date= $_GET['date'];
                                        $sql = "SELECT * FROM db_trip_ticket a 
                                            JOIN db_vehicles_detail b ON a.vehicle_id = b.plate_no
                                            JOIN db_vehicle_category c ON b.vehicle_category = c.veh_categ_id
                                            WHERE c.veh_categ_id= '$cat' and trip_date ='$date'";
                                            //echo $sql;
                                        $result=mysqli_query($con,$sql);
                                        if ($result->num_rows > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                <tbody>
                                    <tr>
                                      <td class="text-center"><?php echo $row['plate_no']; ?></td>
                                      <td><?php echo $row['make']. " " .$row['body_type']; ?></td>
                                      <td class="text-center"><?php echo $row['trip_date']; ?></td>
                                      <td class="text-center"><?php echo $row['account']; ?></td>
                                    </tr>
                                </tbody>
                                <?php } }; ?>
                            </table>
                          </div>
                      </div>
                  </div>
                </div>
        <?php 
        $rows = $row[plate_no];
        if ($rows ) 
        
        ?>
         <div class="row p-10">
         <div class="col-md-10 col-md-offset-1">
            <br>
             <div class="panel" style="background: #dfe4ea">
                 <h4 class="title" style="margin-left: 20px; margin-top:20px;  font-weight: bold; text-align: center;">TRUCKS LIST</h4>
                 <div class="panel-body p-20">
                    <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-primary-300">
                            <tr>
                                <th class="text-center">Plate Number</th>
                                <th class="text-center">Vehicle Name</th>
                            </tr>
                        </thead>
                        <?php 
                            $cat = $_GET['categ'];
                            $date= $_GET['date'];
                            $sql = "SELECT * FROM db_vehicles_detail a
                                    JOIN db_vehicle_category c ON a.vehicle_category = c.veh_categ_id
                                    WHERE c.veh_categ_id= '$cat' ";
                                    //echo $sql; 
                            $result=mysqli_query($con,$sql);
                            
                            if ($result->num_rows > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $row['plate_no']; ?></td>
                                <td class="text-center"><?php echo $row['make']. " " .$row['body_type']; ?></td>
                            </tr>
                        </tbody>
                        <?php } };?>
                    </table>
                  </div>
              </div>
          </div>
        </div>

    
</div> <!- End Main Page>

<?php
require 'module/structure/rightNavBar.php';
require 'module/structure/wrapper_close.php';
require 'module/structure/commonjs.php';
?>

<script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>

<!-- ======= DATA TABLES JS ====== -->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


<!-- ========== JS ========== -->
<script>
    $(function($) {
        $('#projectTable').DataTable();
        
         $('#projectTable2').DataTable();
    });
</script>


<?php  require 'module/structure/html_close.php';?>
