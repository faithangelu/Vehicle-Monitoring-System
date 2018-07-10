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
                        <h2 class="title">Company Details</h2>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li>Settings</li>
							                   <li class="active">Company Details</li>
						            </ul>
                    </div>
                </div>
            </div>

<!-- End Title Bar -->



<!-- ========== Content ========== -->



<form action="" method="post" > 
    <section class="section">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel">
              <div class="panel-heading bg-info">
                  <h4 class="panel-title"> Company Details </h4>
              </div>
              <div class="panel-body p-10">
                  <?php 
                        $sql = "SELECT * FROM `db_company_info` WHERE 1";
                        $result=mysqli_query($con,$sql);
                        $row = mysqli_fetch_assoc($result);
                        //echo $row['company_name']; 
                    ?>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Company Name</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="buss_name" id="buss_name" value="<?php echo strtoupper($row['company_name']); ?>" readonly/>
                            </div>
                            <label class="col-xs-4 control-label">Trade Name</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="trade_name" id="trade_name" value="<?php echo strtoupper($row['trade_name']); ?>"  readonly/>
                            </div>
                            <div id="soleprop" style="display: none">
                              <label class="col-xs-4 control-label pt-10">Last Name</label>
                              <div class="col-xs-8 pt-10">
                                  <input type="text" class="form-control" name="last_name" id="last_name" />
                              </div>
                              <label class="col-xs-4 control-label">First Name</label>
                              <div class="col-xs-8">
                                  <input type="text" class="form-control" name="first_name" id="first_name" />
                              </div>
                              <label class="col-xs-4 control-label">Middle Name</label>
                              <div class="col-xs-8">
                                  <input type="text" class="form-control" name="middle_name" id="middle_name" />
                              </div>
                          </div>
                          <label class="col-xs-4 control-label pt-10">Address</label>
                          <div class="col-xs-8 pt-10">
                              <input type="text" class="form-control" name="add1" id="add2" value="<?php echo strtoupper($row['barangay'].', '.$row['mun_city'].', '.$row['province'].' '.$row['zip']); ?>" readonly/>
                          </div>
 
                      </div>
              </div> <!-- / Panel Body -->
            </div> <!-- / Panel -->
    
            <div class="panel">
              <div class="panel-heading bg-info">
                  <h4 class="panel-title"> Government Numbers </h4>
              </div>
              <div class="panel-body p-10">
                <div class="form-group">
                    <label class="col-xs-4 control-label">Employer SSS:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="emplyr_sss" id="emplyr_sss" value="<?php echo $row['sss']; ?>" readonly/>
                    </div>
                
                    <label class="col-xs-4 control-label">Employer Pag-Ibig:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="emplyr_pagibig" id="emplyr_pagibig" value="<?php echo $row['pag-ibig']; ?>" readonly/>
                    </div>
             
                    <label class="col-xs-4 control-label">Employer PhilHealth:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="emplyr_philhealth" id="emplyr_philhealth" value="<?php echo $row['philhealth']; ?>" readonly/>
                    </div>
               
                    <label class="col-xs-4 control-label">Employer TIN:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="emplyr_tin" id="emplyr_tin" value="<?php echo $row['tin']; ?>" readonly/>
                    </div>
                </div>
              </div>
            </div>
          </div> <!-- / Column1 -->
    
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
             <div class="panel">
              <div class="panel-heading bg-info">
                  <h4 class="panel-title"> Contact Details </h4>
              </div>
               <div class="panel-body p-10">
                <div class="form-group">
                    <label class="col-xs-4 control-label">Company Landline</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="comp_landline" id="comp_landline" value="<?php echo $row['landline']; ?>" readonly/>
                    </div>
               
                    <label class="col-xs-4 control-label">Company Mobile</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="comp_mobile" id="comp_mobile" value="<?php echo $row['mobile']; ?>" readonly/>
                    </div>
               
                    <label class="col-xs-4 control-label">Company Website</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="comp_website" id="comp_website" value="<?php echo $row['website']; ?>" readonly/>
                    </div>
               
                    <label class="col-xs-4 control-label">Company Facebook Page</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="comp_facebook" id="comp_facebook" value="<?php echo $row['facebook']; ?>" readonly />
                    </div>
                </div>
              </div>  <!-- / Panel Body -->
             </div>  <!-- / Panel -->
           </div>  <!-- / Column 2 -->
        </div> <!-- / Row -->
            <div class="row">
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
</form>
<!-- End of Content -->
</div> <!- End Main Page>

<?php 
/*
if(isset($_POST['submit'])) {
$tin = $_POST['tin'];
$busi = $_POST['buss_name'];
$trade = $_POST['trade_name'] ;
$reg = $_POST['buss_reg'];
$last = $_POST['last_name'];
$first = $_POST['first_name'];
$mid = $_POST['middle_name'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$add3 = $_POST['add3'];
$add4 = $_POST['add4'];
$sss = $_POST['emplyr_sss'];
$pagibig = $_POST['pagibig'];
$phealth = $_POST['phealth'];
$landline = $_POST['landline'];
$mobile = $_POST['mobile'];
$website = $_POST['website'];
$facebook = $_POST['facebook'];

$sql = "INSERT INTO company_info(tin, company_name,last_name,first_name,middle_name,trade_name, unit_number, street, barangay, mun_city, province,zip, sss, pag-ibig, philhealth, landline, mobile, website, facebook)  
        VALUES  ('$tin', '$busi', '$last', '$first', '$mid', '$trade', '$reg', '$add1', '$add2', '$add3', '$add4','$add5', '$sss', '$pagibig', '$phealth', '$landline', '$mobile', '$website', '$facebook')";
    
    if (mysqli_query($con, $sql)) {
        echo '<script>window.location.href = "https://ops.northward.ph/company-details?Saved";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}*/
?>



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



    <script type="text/javascript">

        $(function () {

            $("#buss_reg").change(function () {

                if ($(this).val() == "2") {

                    $("#soleprop").show();

                } else {

                    $("#soleprop").hide();

                }

            });

        });

    </script>





<?php  require 'module/structure/html_close.php';?>

