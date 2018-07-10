<?php
require_once 'page_load.php';
require 'module/structure/html_open.php';
require 'module/structure/head.php';
require 'module/structure/datatablecss.php';
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
                        <h2 class="title">Profile</h2>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-6 right-side">
                      <div class="dropdown pull-right">
                         <button class="btn bg-primary dropdown-toggle" type="button" id="menu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bars"></i> User Settings
                           <span class="caret"></span>
                         </button>
                         <ul class="dropdown-menu bg-grey" aria-labelledby="menu14">
                               <li><a href="#">Tax Rate</a></li>
                               <li><a href="#">Tax Registration</a></li>
                               <li><a href="#">eFPS Settings</li>

                         </ul>
                       </div>
                    </div>
                    <!-- /.col-sm-6 text-right -->
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                                 <li>Human Resources</li>
							                   <li class="active">Profile</li>
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
                         <h5>Conflict using Datatables.js use list.js</h5>
                     </div>
                 </div>

                 <div class="panel-body p-20">
                    <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Project Name</th>
                                <th class="text-center">Project Status</th>
                            </tr>
                        </thead>
                        <tbody>
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
                        <tfoot>
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







</div> <!- End Main Page>

<?php
require 'module/structure/rightNavBar.php';
require 'module/structure/wrapper_close.php';
require 'module/structure/commonjs.php';
require 'module/structure/datatablejs.php';
?>

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
