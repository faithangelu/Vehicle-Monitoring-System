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
                        <h2 class="title">Journal Record</h2>
                    </div>

                    <!-- Button -->
                    <div class="col-sm-6 right-side">
                      <div class="dropdown pull-right">
                         <ul class="dropdown-menu bg-grey" aria-labelledby="menu14">
                               <li><a href="#" data-toggle="modal" data-target="#addModal">Add Account</a></li>
                               <li><a href=".edit-account" data-toggle="collapse">Edit Account</a></li>
                               <li><a href=".hide-account" data-toggle="collapse">Hide Account</a></li>
                               <li><a href="#" data-toggle="modal" data-target="#uploadModal">Upload Accounts</a></li>
                         </ul>
                       </div>
                    </div>
                  </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
                          <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
                          <li>Finance</li>
                          <li><a href="accounts">Accounts</a></li>
                          <li><a href="acctdetails?acct= <?php echo $_GET['from']; ?>">Account Details</a></li>
                          <li class="active"><a href="journal-record">Journal Record</a></li>
						            </ul>
                    </div>
                </div>
            </div>
<!-- End Title Bar -->

<!-- ========== Content ========== -->


          <section class="section">
              <div class="container-fluid">

                <div class="row p-10">
                   <div class="col-md-10 col-md-offset-1">

                     <div class="panel panel-primary">
                         <div class="panel-heading">
                             <h3 class="panel-title text-center p-5"> Journal Transaction # <?php echo $_GET['trans']; ?> </h3>
                         </div>
                         <div class="panel-body">
                             <div class="row">
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <form class="form-horizontal">
                                   <div class="row p-5" >
                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                               <label class="control-label col-sm-4" for="transdate">Transaction Date:</label>
                                               <div class="col-sm-8">
                                                 <p class="form-control-static">1-1-2018</p>
                                               </div>
                                             </div>
                                             <div class="form-group">
                                               <label class="control-label col-sm-4" for="transdesc">Transaction Memo:</label>
                                               <div class="col-sm-8">
                                                 <p class="form-control-static">Description</p>
                                               </div>
                                             </div>
                                             <div class="form-group">
                                               <label class="control-label col-sm-4" for="transref">Transaction Referrence:</label>
                                               <div class="col-sm-8">
                                                 <p class="form-control-static"><a href="#">SI-0001</a></p>
                                               </div>
                                             </div>
                                       </div>

                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <div class="form-group">
                                                <label class="control-label col-sm-4" for="encode">Encoded By:</label>
                                                <div class="col-sm-7">
                                                  <p class="form-control-static">Name</p>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="control-label col-sm-4" for="check">Checked By:</label>
                                                <div class="col-sm-7">
                                                  <p class="form-control-static">Name</p>
                                                </div>
                                              </div>
                                       </div>
                                   </div>

                                   <div class="row p-5">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <table class="table table-striped table-bordered">
                                            <thead class="bg-primary">
                                              <tr>
                                                  <th class="text-center">Account No.</th>
                                                  <th class="text-center">Account Name</th>
                                                  <th class="text-center">Debit</th>
                                                  <th class="text-center">Credit</th>
                                                  <th class="text-center">Memo</th>
                                              </tr>
                                            </thead>
                                            <tr>
                                              <td class="text-center">1234</td>
                                              <td>Louie</td>
                                              <td class="text-right">2500</td>
                                              <td class="text-right"></td>
                                              <td>Blah</td>
                                            </tr>
                                            <tr>
                                              <td class="text-center">4567</td>
                                              <td>Gayao</td>
                                              <td class="text-right"></td>
                                              <td class="text-right">2500</td>
                                              <td>Hard Coded</td>
                                            </tr>
                                            <tr>
                                              <td colspan=2 class="text-center"><strong>Total</strong></td>
                                              <td class="text-right"><strong>2500</strong></td>
                                              <td class="text-right"><strong>2500</strong></td>
                                              <td></td>
                                            </tr>
                                          </table>

                                       </div>
                                   </div>

</form>
                                 </div>
                             </div>
                         </div>
                     </div>


                   </div>
                </div>
              </div>
              <!-- /.container-fluid -->
          </section>
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



<?php  require 'module/structure/html_close.php';?>
