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
                        <h2 class="title">Vehicle Inspection</h2>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
						     <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
						     <li><a href="vehicles">Vehicle Management</a></li>
						     <li class="active"><a href="vehicleInspection">Vehicle Management</a></li>
						</ul>
                    </div><!-- /.col-sm-6 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->

      <div class="row p-10">
        <div class="col-md-10 col-md-offset-1">
        <?php require 'module/structure/counter.php'; ?>    
        <hr>
    
    <!-- ========== Content ========== -->
        <div class="col-md-5">
            <div class="panel">
                 <div class="panel-body p-20">
                    <h4 class="panel-title text-center"> <b>MONTHLY INSPECTION REPORT</b> </h4>
                </div>
        
                <div class="panel-body p-10">
                  <div class="form-group">
                      <label class="col-xs-4 control-label text-right">Operator:</label>
                      <div class="col-xs-8">
                          <input class="form-control" type ="text" name="operators" id="operators" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-xs-4 control-label text-right">Plate Number:</label>
                      <div class="col-xs-8">
                          <input class="form-control" type ="text" name="plate" id="plate" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-xs-4 control-label text-right">Odometer Reading:</label>
                      <div class="col-xs-8">
                          <input class="form-control" type ="text" name="odometer" id="odometer" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-xs-4 control-label text-right">Inspection Date/Time:</label>
                      <div class="col-xs-8">
                          <input class="form-control" type ="text" name="date_time" id="date_time" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-xs-4 control-label text-right">Inspection Location:</label>
                      <div class="col-xs-8">
                          <input class="form-control" type ="text" name="location" id="location" />
                      </div>
                  </div>
                    
                  <div class="form-group">
                      <label class="col-xs-4 control-label text-right">Valid Until:</label>
                      <div class="col-xs-8">
                         <input class="form-control" type ="date" name="validity" id="validity" />
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <label class="col-xs-4 control-label text-right">Inspector:</label>
                      <div class="col-xs-8">
                          <input class="form-control" type ="text" name="person" id="person" />
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <div class="col-xs-4 text-right">
                          <input type ="checkbox" name="date" id="date" />
                      </div>
                      <div class="col-xs-8">
                          <textarea class="form-control" name="text" id="text" readonly>"No major or minor defects found during initial inspection"</textarea>
                      </div>
                  </div>
                   <div class="form-group">
                      <div class="col-xs-12">
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <div class="col-xs-4 text-right">
                          <input type ="checkbox" name="date" id="date" />
                      </div>
                      <div class="col-xs-8">
                          <textarea class="form-control" name="text" id="text" readonly>"No major or minor defects found during initial inspection or while en route"</textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-xs-12">
                      </div>
                  </div>
                  
                  
                </div>  <!-- / Panel Body -->
              </div>  <!-- / Panel -->
              <div class="col-xs-12 text-center">
                  <button type="submit" class="btn bg-primary btn-wide btn-rounded" name="submit"><i class="fa fa-check"></i>Save Announcement</button>
              </div>
        </div>     

        <div class="col-md-7">
             <div class="panel">

                 <div class="panel-body p-20">
                    <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-primary-300">
                            <tr>
                                <th class="text-center">Vehicle ID</th>
                                <th class="text-center">Vehicle Plate Number</th>
                                <th class="text-center">Vehicle Category</th>
                                <th class="text-center">Vehicle Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td class="text-center"></td>
                              <td><a href="vehicleDetails?id="></a></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>

                            </tr>
                        </tbody>
                    </table>
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
