<?php
require_once 'page_load.php';
require_once 'module/db/connect_main.php';

?>

<!DOCTYPE html>
<html>
       
  <?php 
    require 'module/structure/head.php';
  ?>


<body>
    <div id="wrapper">

<!- Left Navigation Bar ->
      <?php require 'module/structure/menu-left.php';?>

<!- Main Display ->
        <div id="page-wrapper" class="grey-bg">

<!- Top Navigation Bar ->
      <?php require 'module/structure/header.php';?>

<!- Breadcrumbs ->
<div class="row navbar white-bg ">

  <div class="container-fluid">
     <div class="navbar-header ">
       <ul class="breadcrumb crumbler navbar-top-links">
         <li><a href="#">Home</a></li>
       </ul>
     </div>
  </div>

</div>

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                    data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                        class="fa fa-cog"></i></span></button>
            <div class="dropdown-menu">
				<div class="dropdown-item settings-icon">
					<span id="" class="fa fa-check-square-o"></span>
					<span id="" class="fa fa-square-o"></span>
					<a id=""  class="setting-item" href="#">&nbsp;Calendar</a>
				</div>
				<div class="dropdown-item settings-icon">
					<span id="" class="fa fa-check-square-o"></span>
					<span id="" class="fa fa-square-o"></span>
					<a id="" class="setting-item" href="#">&nbsp;Check Numbers</a>
				</div>
				<div class="dropdown-item settings-icon">
					<span id="" class="fa fa-check-square-o"></span>
					<span id="" class="fa fa-square-o"></span>
					<a id=""  class="setting-item" href="#">&nbsp;Favorites</a>
				</div>
				<div class="dropdown-item settings-icon">
					<span id="" class="fa fa-check-square-o"></span>
					<span id="" class="fa fa-square-o"></span>
					<a id=""  class="setting-item" href="#">&nbsp;Due Checks</a>
				</div>
				<div class="dropdown-item settings-icon">
					<span id="" class="fa fa-check-square-o"></span>
					<span id="" class="fa fa-square-o"></span>
					<a id=""  class="setting-item" href="#">&nbsp;Recent Activity</a>
				</div>
				<div class="dropdown-item settings-icon">
					<span id="" class="fa fa-check-square-o"></span>
					<span id="" class="fa fa-square-o"></span>
					<a id=""  class="setting-item" href="#">&nbsp;Account Numbers</a>
				</div>
				<div class="dropdown-divider"></div>
                <a id="" class="dropdown-item" href="#">Panel Settings</a>
            </div>

        </div>
        
        <h4 class="page-title">LLMG Human Resources Database</h4>
    </div>
</div>

<!-- Page-Content -->
<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card-box tilebox-one">
			<span><i class="fa fa-id-badge text-muted pull-right"> </i></span>
            <h5 class="text-muted text-uppercase m-b-30">Employees</h5>

      <div class="row">
          <div class="col-xs-6 col-md-6 col-lg-6 col-xl-6">
            <div class="card text-xs-center">
              <div class="card-block">
                <i class="fa fa-list-alt fa-4x"></i>
              </div>
              <div class="card-footer">
                <a href="module/emp_list.php" class="btn btn-primary">List Employees</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-6 col-lg-6 col-xl-6">
            <div class="card text-xs-center">
              <div class="card-block">
                <i class="fa fa-user-plus fa-5x"></i>
              </div>
              <div class="card-footer">
                <a href="module/emp_add.php" class="btn btn-primary">Add Employee</a>
              </div>
            </div>
          </div>

      </div> <!-- End of Left Box 1st Row -->

      </div>
    </div> <!-- End of Left Box -->

    <div class="col-xs-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card-box tilebox-one">
			       <span><i class="fa fa-home text-muted pull-right"> </i></span>
            <h5 class="text-muted text-uppercase m-b-30">Attendance</h5>

      <div class="row">
          <div class="col-xs-6 col-md-6 col-lg-6 col-xl-6 ">
            <div class="card text-xs-center">
              <div class="card-block">
                <i class="fa fa-clock-o fa-5x"></i>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">List Attendance</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-6 col-lg-6 col-xl-6">
            <div class="card text-xs-center">
              <div class="card-block">
                <i class="fa fa-upload fa-5x"></i>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Upload Timecards</a>
              </div>
            </div>
          </div>

      </div> <!-- End of Center Box 1st Row -->

      </div>
    </div> <!-- End of Center Box -->

    <div class="col-xs-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card-box tilebox-one">
			<span><i class="fa fa-inbox text-muted pull-right"> </i></span>
            <h5 class="text-muted text-uppercase m-b-30">Payroll</h5>

            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6 col-xl-6 ">
                  <div class="card text-xs-center">
                    <div class="card-block">
                      <i class="fa fa-credit-card-alt fa-5x"></i>
                    </div>
                    <div class="card-footer">
                      <a href="#" class="btn btn-primary">Compute Salaries</a>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-6 col-lg-6 col-xl-6">
                  <div class="card text-xs-center">
                    <div class="card-block">
                      <i class="fa fa-print fa-5x"></i>
                    </div>
                    <div class="card-footer">
                      <a href="module/print_slips.php" class="btn btn-primary">Print Payslips</a>
                    </div>
                  </div>
                </div>

      </div> <!-- End of Right Box 1st Row -->

      </div>
    </div> <!-- End of Right Box -->

</div>
<!-- end row -->

<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-12 col-xl-12">
        <div class="card-box tilebox-one">
			<span><i class="fa fa-folder-open text-muted pull-right"> </i></span>
            <h5 class="text-muted text-uppercase m-b-30">Employer Corner</h5>

      <div class="row">
          <div class="col-xs-6 col-md-6 col-lg-2 col-xl-2">
            <div class="card text-xs-center">
              <div class="card-block">
                <i class="fa fa-files-o fa-4x"></i>
              </div>
              <div class="card-footer">
                <a href="module/sss.php" class="btn btn-primary">SSS</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-6 col-lg-2 col-xl-2">
            <div class="card text-xs-center">
              <div class="card-block">
                <i class="fa fa-files-o fa-5x"></i>
              </div>
              <div class="card-footer">
                <a href="module/pagibig.php" class="btn btn-primary">Pagibig</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-6 col-lg-2 col-xl-2">
            <div class="card text-xs-center">
              <div class="card-block">
                <i class="fa fa-files-o fa-5x"></i>
              </div>
              <div class="card-footer">
                <a href="module/philhealth.php" class="btn btn-primary">PhilHealth</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-6 col-lg-2 col-xl-2">
            <div class="card text-xs-center">
              <div class="card-block">
                <i class="fa fa-files-o fa-5x"></i>
              </div>
              <div class="card-footer">
                <a href="module/bir.php" class="btn btn-primary">BIR</a>
              </div>
            </div>
          </div>
          
          <div class="col-xs-6 col-md-6 col-lg-2 col-xl-2">
            <div class="card text-xs-center">
              <div class="card-block">
                <i class="fa fa-files-o fa-5x"></i>
              </div>
              <div class="card-footer">
                <a href="module/invoice.php" class="btn btn-primary">Print Invoice</a>
              </div>
            </div>
          </div>



      </div> <!-- End of Left Box 1st Row -->

      </div>
    </div> <!-- End of Left Box -->

</div>
  <!-- end row -->


<!- Footer ->
      <?php require 'module/structure/footer.php';?>

</div> <!- End content wrapper->

</div> <!- End page wrapper->

</div>



    <!-- Mainly scripts -->
    <script src="assets/js/jquery-2.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/js/inspinia.js"></script>
    <script src="assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

</body>
</html>
