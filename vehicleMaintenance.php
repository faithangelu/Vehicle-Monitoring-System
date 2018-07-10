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
                        <h2 class="title">Vehicle Maintenance</h2>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-6 right-side">
                      <div class="dropdown pull-right">
                         <button class="btn bg-primary dropdown-toggle" type="button" id="menu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bars"></i>Vehicle Settings
                           <span class="caret"></span>
                         </button>
                         <ul class="dropdown-menu bg-grey" aria-labelledby="menu14">
                           <li><a href="#" data-toggle="modal" data-target="#uploadModal">Vehicle Maintenance Reports</a></li>

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
							                   <li><a href="vehicles">Vehicle Management</a></li>
							                   <li class="active"><a href="vehicleMaintenance">Vehicle Maintenance</a></li>
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
        <?php require 'module/structure/counter.php'; ?>    
    
<!-- /.row -->
<hr>
                  
             <div class="panel">

                 <div class="panel-body p-20">
                    <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-primary-300">
                            <tr>
                                <th class="text-center">Vehicle ID</th>
                                <th class="text-center">Vehicle Plate Number</th>
                                <th class="text-center">Vehicle Category</th>
                                <th class="text-center">Current Odometer Reading</th>
                                <th class="text-center">Maintenance on Odometer</th>
                                <th class="text-center">Next Maintenance Date</th>
                                <th class="text-center">Vehicle Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td class="text-center">01</td>
                              <td><a href="vehicleDetails?id=">ERP Accounting</a></td>
                              <td class="text-center">On-going</td>
                              <td class="text-center">With Issues</td>
                              <td><a href="vehicleDetails?id=">ERP Accounting</a></td>
                              <td class="text-center">On-going</td>
                              <td class="text-center">With Issues</td>

                            </tr>
                            <tr>
                              <td class="text-center">02</td>
                              <td>ERP HR</td>
                              <td class="text-center">On-going</td>
                              <td class="text-center">No Issues</td>
                              <td><a href="vehicleDetails?id=">ERP Accounting</a></td>
                              <td class="text-center">On-going</td>
                              <td class="text-center">With Issues</td>
   
                            </tr>
                            <tr>
                              <td class="text-center">03</td>
                              <td>ERP Sales</td>
                              <td class="text-center">To Start</td>
                              <td class="text-center">With Comments</td>
                              <td><a href="vehicleDetails?id=">ERP Accounting</a></td>
                              <td class="text-center">On-going</td>
                              <td class="text-center">With Issues</td>
                              
                            </tr>
                        </tbody>
                        <tfoot class="bg-primary-300">
                            <tr>
                                <th class="text-center">Vehicle ID</th>
                                <th class="text-center">Vehicle Plate Number</th>
                                <th class="text-center">Vehicle Category</th>
                                <th class="text-center">Current Odometer Reading</th>
                                <th class="text-center">Maintenance on Odometer</th>
                                <th class="text-center">Next Maintenance Date</th>
                                <th class="text-center">Vehicle Status</th>

                            </tr>
                        </tfoot>
                    </table>
                  </div>
              </div>
          </div>
        </div>


        <!-- Modal Upload-->

        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
          <form class="form-horizontal" action="module/upload2server/uploadAccounts?from=accounts" method="post" name="upload_excel" enctype="multipart/form-data">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="hideModalLabel">Upload Accounts<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                    </div>
                    <div class="modal-body">
                      <div class="row"">

                                  <input id="userId" name="userId" type="hidden" value=<?php echo $_SESSION['userId']?>></input>
                                  <input id="transType" name="transType" type="hidden" value=1></input>

                                  <!-- File Button -->
                                  <div class="form-group p-20">
                                      <label class="col-md-4 control-label" for="filebutton">Select File</label>
                                      <div class="col-md-4">
                                          <input type="file" name="file" id="file" class="input-large">
                                      </div>
                                  </div>

                      </div>
                    </div>
                    <div class="modal-footer">
                        <div class="pull-left">
                        <a href="templates/Template - Chart of Accounts.csv" download>Download CSV template</a>
                        </div>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                            <button type="submit" id="submit" name="Upload" class="btn bg-primary btn-wide btn-rounded"><i class="fa fa-check"></i>Upload</button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                </div>
            </div>
            </form>
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
