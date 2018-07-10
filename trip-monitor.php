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
                        <h2 class="title">Trip Monitor</h2>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li><a href="#">Operations</a></li>
                                 <li class="active"><a href="tripMonitor">Trip Monitor</a></li>
						            </ul>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      <!-- End Title Bar -->

      <div class="row p-10">
         <div class="col-md-12">

                            
                            <div class="panel" >
                                <div class="panel-heading bg-success-700">
                                    <div class="panel-title">
                                        <h5>Trip Summary of <?php echo date("F j, Y"); ?></h5>
                                    </div>
                                </div>
                                <div class="panel-body">
                                   <div class="row p-10">
                                        <div class="col-md-12">
                                             <div class="panel">
                                                 <div class="panel-body p-20">
                                                    <table id="projectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead class="bg-primary-300">
                                                            <tr>
                                                                <th class="text-center">Ticket ID</th>
                                                                <th class="text-center">Vehicle Plate Number</th>
                                                                <th class="text-center">Start Time</th>
                                                                <th class="text-center">Time to Warehouse</th>
                                                                <th class="text-center">Time to Loaded Area</th>
                                                                <th class="text-center">Time to Customer</th>    
                                                                <th class="text-center">Time Unloaded</th>    
                                                                <th class="text-center">Time to Garage</th>
                                                                <th class="text-center">End Time</th>
                                                            </tr>
                                                        </thead>
                                                         <?php 
                                                              $sql = "SELECT * FROM db_trip_ticket WHERE trip_date='$today'";
                                                              $result=mysqli_query($con,$sql);
                                                                 if ($result->num_rows > 0) {
                                                                  while($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <tbody>
                                                            <tr>
                                                              <td class="text-center"><?php echo $row['ticket_id']; ?></td>
                                                              <td class="text-center"><?php echo $row['vehicle_id']; ?></a></td>
                                                              <td class="text-center"><?php echo $row['start_time']; ?></a></td>
                                                              <td class="text-center"><?php echo $row['time_warehouse']; ?></a></td>
                                                              <td class="text-center"><?php echo $row['time_loaded']; ?></div></td>
                                                              <td class="text-center"><?php echo $row['time_to_cust']; ?></td>
                                                              <td class="text-center"><?php echo $row['time_unloaded']; ?></td>
                                                              <td class="text-center"><?php echo $row['time_to_garage']; ?></td>
                                                              <td class="text-center"><?php echo $row['end_time']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                            <?php  } } ; ?>
                                                        <tfoot class="bg-primary-300">
                                                          <tr>
                                                              <th class="text-center">Ticket ID</th>
                                                                <th class="text-center">Vehicle Plate Number</th>
                                                                <th class="text-center">Start Time</th>
                                                                <th class="text-center">Time to Warehouse</th>
                                                                <th class="text-center">Time to Loaded Area</th>
                                                                <th class="text-center">Time to Customer</th>      
                                                                <th class="text-center">Time Unloaded</th>    
                                                                <th class="text-center">Time to Garage</th>
                                                                <th class="text-center">End Time</th>
                                                          </tr>
                                                        </tfoot>
                                                    </table>
                                                  </div>
                                              </div>
                                      </div>
                                    </div>
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



<!-- ======= DATA TABLES JS ====== -->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>



<script>
$(document).ready(function() {
  $('#projectTable').DataTable({
    dom: 'Bfrtip',
    lengthMenu: [
        [ -1, 10, 20, 40],
        [ 'Show all', '10 rows', '20 rows', '40 rows']
      ],

    buttons: [
      'pageLength'
      ]

  });
} );
</script>

<?php  require 'module/structure/html_close.php';?>
