<?php
require_once 'page_load.php';
require 'module/structure/html_open.php';
 require 'module/structure/head.php';
// Page CSS
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
                      <!-- /.col-sm-6 -->
                    <div class="col-sm-6 right-side">
                      <div class="dropdown pull-right">
                         <button class="btn bg-primary dropdown-toggle" type="button" id="menu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bars"></i>E-trip Ticket
                           <span class="caret"></span>
                         </button>
                         <ul class="dropdown-menu bg-grey" aria-labelledby="menu14">
                           <li><a href="#" data-toggle="modal" data-target="#uploadModal">Generate Trip Ticket</a></li>
                           <li><a href="#" data-toggle="modal" data-target="#uploadModal">E-trip Records</a></li>

                         </ul>
                       </div>
                    </div>
                    <!-- /.col-sm-6 text-right -->
                </div>
                  
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li class="active"><a href="operations">Operations Management</a></li>
							                   <li class="active"><a href="operations">4 Wheelers Vehicles</a></li>
						            </ul>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      <!-- End Title Bar -->

<!-- ========== Content ========== -->
       
      <div class="row p-10">
         <div class="col-md-10 col-md-offset-1">
             <div class="panel">
                 <div class="panel-body p-20">
                    <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-primary-300">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Vehicle</th>
                                <th class="text-center">Customer</th>
                                <th class="text-center">Trips per Month</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td class="text-center">01</td>
                              <td class="text-center"><a href="customerDetails?id=">Isuzu</a></td>
                              <td class="text-center">LF Logistics</td>
                              <td class="text-center">5</td>
                              <td style="width:8%;" class="">
                                    <div class="btn-group btn-group-justified">
                                      <a href="editCustomer?id=<?php echo $row["account_id"]; ?>" class="btn collapse in edit-account" role="button"><i class="fa fa-pencil"> </i></a>
                                      <a href="hideCustomer?id=<?php echo $row["account_id"]; ?>" class="btn collapse in hide-account" role="button"><i class="fa fa-trash"> </i></a>
                                    </div>
                                    </td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-primary-300">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Vehicle</th>
                                <th class="text-center">Customer</th>
                                <th class="text-center">Trips per Month</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
              </div>
          </div>
        </div>
<!-- End of Content -->



</div> <!- End Main Page>

<?php
require 'module/structure/rightNavBar.php';
require 'module/structure/wrapper_close.php';
require 'module/structure/commonjs.php';
?>

<!-- ========== PAGE JS FILES ========== -->
<script src="js/prism/prism.js"></script>
<script src="js/waypoint/waypoints.min.js"></script>
<script src="js/counterUp/jquery.counterup.min.js"></script>
<script src="js/icheck/icheck.min.js"></script>
<script src="js/bootstrap-tour/bootstrap-tour.js"></script>
<script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>
<script src="js/custom/finance/addAccount.js"></script>

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





<?php  require 'module/structure/html_close.php';?>
