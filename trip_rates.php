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
                        <h2 class="title">Trip Rates</h2>
                    </div>
                    <!-- /.col-sm-6 -->
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fas fa-home"></i> Home</a></li>
                                 <li>Finance</li>
                                 <li class="active">Receivables</li>
						            </ul>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<!-- End Title Bar -->

<!-- ========== Content ========== -->
          <section class="section">
              <div class="container-fluid">
                  <div class="row">
                                       
                  </div>
                  <!-- /.row -->
<br />
                  <div class="row p-10">
                     <div class="col-md-10 col-md-offset-1">
                        <?php require "module/structure/finance_counter.php"; ?>
                        <hr>
                        
                         <div class="panel">
                             <div class="panel-body p-20">
                                 <table id="projectTable" class="display table table-bordered table-striped" cellspacing="0" width="100%" style="border: 0px solid"">
                                    <thead class="bg-success-100" style="border: 0px solid">
                                        <tr >
                                            <th rowspan="2">ID</th>
                                            <th rowspan="2">Client</th>
                                            <th rowspan="2">Delivery</th>                                            
                                            <th rowspan="2">City</th>
                                            <th colspan="4" style="border: 0px solid">Vehicle Type</th>
                                        </tr>
                                        <tr >
                                            <th>4 Wheeler</th>
                                            <th>6 Wheeler</th>
                                            <th>10 Wheeler</th>
                                            <th>Tractor Head</th>
                                        </tr>
                                    </thead>
                                     <?php 
                                        $sql = "SELECT * from db_trip_rate" ;
                                        $result=mysqli_query($con,$sql);
                                        
                                        if ($result->num_rows > 0) {
                                            while($row = mysqli_fetch_assoc($result)) { 
                                    ?>
                                    <tbody style="border: 0px solid">
                                        <tr>
                                          <td class="text-center"><?php echo $row["trip_id"]; ?></td>
                                          <td class="text-left"><?php echo $row["client"]; ?></td>
                                          <td class="text-left"><?php echo $row["delivery"]; ?></td>                                          
                                          <td class="text-left"><?php echo $row["city"]; ?></td>
                                          <td class="text-left"><?php echo $row["4wh"]; ?></td>
                                          <td class="text-left"><?php echo $row["6wh"]; ?></td>
                                          <td class="text-left"><?php echo $row["10wh"]; ?></td>
                                          <td class="text-left"><?php echo $row["tractor"]; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php  } };?>
                                    <tfoot class="bg-success-100" style="border: 0px solid">
                                        <tr >
                                            <th>ID</th>
                                            <th>Client</th>                                            
                                            <th>Delivery</th>
                                            <th>City</th>
                                            <th>4 Wheeler</th>
                                            <th>6 Wheeler</th>
                                            <th>10 Wheeler</th>
                                            <th>Tractor Head</th>
                                        </tr>
                                    </tfoot>
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
<script src="js/custom/finance/addaAccount.js"></script>

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
