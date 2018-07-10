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
                        <h2 class="title">Title</h2>
                    </div>

                    <!-- Button -->
                    <div class="col-sm-6 right-side">
                      <div class="dropdown pull-right">
                         <button class="btn bg-primary dropdown-toggle" type="button" id="menu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bars"></i> Settings
                           <span class="caret"></span>
                         </button>
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
							                   <li class="active">Accounts</li>
						            </ul>
                    </div>
                </div>
            </div>
<!-- End Title Bar -->

<!-- ========== Content ========== -->


          <section class="section">
              <div class="container-fluid">

<div class="panel">
  <div class="panel-body text-center">
    <span><i class="fas fa-gavel fa-10x"></i></span>
    <h1 class="text text-danger">UNDER CONSTRUCTION</h1>
    <form action="testupload.php" method="post" enctype="multipart/form-data">
    <table class="table-bordered" width="100%">
        <tr>
            <td>Select Photo (one or multiple):</td>
            <td><input type="file" name="files[]" multiple/></td>
        </tr>
        <tr>
            <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg, .png, .gif</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Create Gallery" id="selectedButton"/></td>
        </tr>
    </table>
</form>
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
