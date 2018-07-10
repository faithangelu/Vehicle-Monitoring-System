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
                        <h2 class="title">Vendor Management</h2>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-6 right-side">
                      <div class="dropdown pull-right">
                         <button class="btn bg-primary dropdown-toggle" type="button" id="menu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bars"></i>Vendor Settings
                           <span class="caret"></span>
                         </button>
                         <ul class="dropdown-menu bg-grey" aria-labelledby="menu14">
                           <li><a href="#" data-toggle="modal" data-target="#addModal">Add Vendor</a></li>
                           <li><a href="#" data-toggle="modal" data-target="#addModal">Add Vendor Category</a></li>
                           <li><a href=".hide-account" data-toggle="collapse">Hide Vendor</a></li>
                           <li><a href="#" data-toggle="modal" data-target="#uploadModal">Upload Vendors</a></li>

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
							                   <li class="active"><a href="vendors">Vendors</a></li>
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

             <div class="panel">
                 <div class="panel-heading">
                     <div class="panel-title">
                         <h5>Table title</h5>
                     </div>
                 </div>

                 <div class="panel-body p-20">
                    <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-primary-300">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Vendor Name</th>
                                <th class="text-center">Vendor Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td class="text-center">1</td>
                              <td><a href="vendor-details?id=">ERP Accounting</a></td>
                              <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">2</td>
                              <td>ERP HR</td>
                              <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">3</td>
                              <td>ERP Sales</td>
                              <td class="text-center">To Start</td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>ERP Accounting</td>
                                <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">2</td>
                              <td>ERP HR</td>
                              <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">3</td>
                              <td>ERP Sales</td>
                              <td class="text-center">To Start</td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>ERP Accounting</td>
                                <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">2</td>
                              <td>ERP HR</td>
                              <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">3</td>
                              <td>ERP Sales</td>
                              <td class="text-center">To Start</td>
                            </tr>
                             <tr>
                                <td class="text-center">1</td>
                                <td>ERP Accounting</td>
                                <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">2</td>
                              <td>ERP HR</td>
                              <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">3</td>
                              <td>ERP Sales</td>
                              <td class="text-center">To Start</td>
                            </tr>
                             <tr>
                                <td class="text-center">1</td>
                                <td>ERP Accounting</td>
                                <td class="text-center">On-going</td>
                            </tr>
                             <tr>
                                <td class="text-center">1</td>
                                <td>ERP Accounting</td>
                                <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">2</td>
                              <td>ERP HR</td>
                              <td class="text-center">On-going</td>
                            </tr>
                            <tr>
                              <td class="text-center">3</td>
                              <td>ERP Sales</td>
                              <td class="text-center">To Start</td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-primary-300">
                            <tr>
                              <th class="text-center">ID</th>
                              <th class="text-center">Project Name</th>
                              <th class="text-center">Project Status</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
              </div>
          </div>
        </div>

        <!-- Modal Add Account-->

        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="addModalLabel">Add a Vendor <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                    </div>
                    <div class="modal-body">
                        <form id="userForm" method="post" class="form-horizontal" >
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                          <div class="form-group">
                              <label class="col-xs-4 control-label">Vendor Name</label>
                              <div class="col-xs-8">
                                  <input type="text" class="form-control" name="acc_name" id="acc_name" />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-xs-4 control-label">Vendor Category</label>
                              <div class="col-xs-8">
                                <select class="form-control" id="vend_category">
                                  <option value=""></option>
                                  <?php $sql = "SELECT * FROM supplier_category ORDER BY name ASC";
                                    $result = $con->query($sql);
                                    while($row = $result->fetch_array(MYSQLI_BOTH)) {
                                      echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
                                    };
                                  ?>
                                </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-xs-4 control-label">Business Registration</label>
                              <div class="col-xs-8">
                                <select class="form-control" id="vend_category">
                                  <option value="1">Corporation</option>
                                  <option value="2">Sole Proprietor</option>
                                  <option value="3">Partnership</option>
                                  <option value="4">Not Registered</option>
                                </select>
                              </div>
                          </div>

                          <div class="soleprop">
                            <div class="form-group">
                                <label class="col-xs-4 control-label">Last Name</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="acc_name" id="acc_name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-4 control-label">First Name</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="acc_name" id="acc_name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-4 control-label">Middle Name</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="acc_name" id="acc_name" />
                                </div>
                            </div>
                          </div>

                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="form-group">
                            <label class="col-xs-4 control-label">Address</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="add1" id="add1" placeholder="No., Street"/>
                            </div>
                            <label class="col-xs-4 control-label">Address</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="add2" id="add2" placeholder="Municipality, City, Province"/>
                            </div>
                        </div>

                          <div class="form-group">
                              <label class="col-xs-4 control-label">TIN</label>
                              <div class="col-xs-8">
                                  <input type="text" class="form-control" name="tin" id="tin" />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-xs-4 control-label">Tax Registration</label>
                              <div class="col-xs-8">
                                <label class="radio-inline">
                                    <input type="radio" name="taxreg" value="1" checked="checked">VAT Registered
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="taxreg" value="0">Non VAT
                                </label>
                              </div>
                          </div>
                    </div>
              </div>

                    </div>
                    <div class="modal-footer">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
                            <button type="button" class="btn bg-success btn-wide btn-rounded" ><i class="fa fa-check"></i>Save</button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                  </form>
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
        [ 10, 20, 40, 80, -1 ],
        [ '10 projects', '20 projects', '40 projects', '80 projectss', 'Show all' ]
      ],

    buttons: [
      'pageLength'
      ]

  });
} );
</script>

<?php  require 'module/structure/html_close.php';?>
