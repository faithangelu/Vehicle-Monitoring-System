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
                        <h2 class="title">Add Customer</h2>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li><a href="customers">Customer Management</a></li>
							                   <li class="active">Add Customer</li>
						            </ul>
                    </div>
                </div>
            </div>
<!-- End Title Bar -->

<!-- ========== Content ========== -->


<section class="section">
  <div class="container-fluid">
      <form action="" method="post">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel">
              <div class="panel-heading bg-info">
                  <h4 class="panel-title"> Customer Details </h4>
              </div>
                <div class="panel-body p-10">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Customer Name</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="buss_name" id="buss_name" />
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Trade Name</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="trade_name" id="trade_name" />
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Customer Category</label>
                            <div class="col-xs-8">
                              <select class="form-control" id="vend_category" name="vend_category">
                                <option value=""></option>
                                <?php $sql = "SELECT * FROM supplier_category ORDER BY name ASC";
                                  $result = $con->query($sql);
                                  while($row = $result->fetch_array(MYSQLI_BOTH)) {
                                    echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
                                  };
                                ?>
                              </select>
                            </div>
                            <br />
                        </div>
    
                        <div class="form-group">
                            <label class="col-xs-4 control-label pt-10">Business Registration</label>
                            <div class="col-xs-8 pt-10">
                              <select class="form-control" id="buss_reg" name="buss_reg">
                                <option value="1">Corporation</option>
                                <option value="2">Sole Proprietor</option>
                                <option value="3">Partnership</option>
                                <option value="4">Not Registered</option>
                              </select>
                            </div>
                        </div>
    
    
    
                        <div id="soleprop" style="display: none">
                          <div class="form-group">
                              <label class="col-xs-4 control-label pt-10">Last Name</label>
                              <div class="col-xs-8 pt-10">
                                  <input type="text" class="form-control" name="last_name" id="last_name" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-4 control-label">First Name</label>
                              <div class="col-xs-8">
                                  <input type="text" class="form-control" name="first_name" id="first_name" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-4 control-label">Middle Name</label>
                              <div class="col-xs-8">
                                  <input type="text" class="form-control" name="middle_name" id="middle_name" />
                              </div>
                          </div>
                        </div>
    
                      <div class="form-group">
                          <label class="col-xs-4 control-label pt-10">Address</label>
                          <div class="col-xs-8 pt-10">
                            <input type="text" class="form-control" name="add0" id="add0" placeholder="Unit No., Street"/>
                          </div>
                          <label class="col-xs-4 control-label pt-10">Address</label>
                          <div class="col-xs-8 pt-10">
                            <input type="text" class="form-control" name="add1" id="add1" placeholder="Barangay"/>
                          </div>
                          <label class="col-xs-4 control-label">Address</label>
                          <div class="col-xs-8">
                              <input type="text" class="form-control" name="add1" id="add2" placeholder="District"/>
                          </div>
                          <label class="col-xs-4 control-label">Address</label>
                          <div class="col-xs-8">
                              <input type="text" class="form-control" name="add2" id="add3" placeholder="Municipality / City"/>
                          </div>
                          <label class="col-xs-4 control-label">Address</label>
                          <div class="col-xs-8">
                              <input type="text" class="form-control" name="add2" id="add4" placeholder="Province"/>
                          </div>
                      </div>
    
                        <div class="form-group">
                            <label class="col-xs-4 control-label">TIN</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="tin" id="tin" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Client Category</label>
                            <div class="col-xs-8">
                                <select class="form-control" id="client_cat" name="client_cat">
                                <option value="1">Good</option>
                                <option value="2">Services</option>
                                <option value="3">Both</option>
                              </select>
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
                        
                        
    
              </div> <!-- / Panel Body -->
            </div> <!-- / Panel -->

        
        
            <div class="panel">
                <div class="panel-heading bg-info">
                    <h4 class="panel-title"> Classification </h4>
                </div>
                <div class="panel-body p-10">
                  <div class="form-group">
                      <label class="col-xs-4 control-label">Salesman</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="sales" id="sales" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-xs-4 control-label">Area</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="area" id="area" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-xs-4 control-label">Size</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="size" id="size" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-xs-4 control-label">Visit Frequency</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="freq" id="freq" />
                      </div>
                  </div>
                </div>  <!-- / Panel Body -->
            </div>  <!-- / Panel -->
          </div> <!-- / Column1 -->

             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

              <div class="panel">
                <div class="panel-heading bg-info">
                    <h4 class="panel-title"> Bank Details </h4>
                </div>
                <div class="panel-body p-10">
                  <div class="form-group">
                      <label class="col-xs-4 control-label">Bank</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="bank" id="bank" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-xs-4 control-label">Bank Account Number</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="bank_no" id="bank_no" />
                      </div>
                  </div>
                </div>  <!-- / Panel Body -->
              </div>  <!-- / Panel -->

               <div class="panel">
                      <div class="panel-heading bg-info">
                          <h4 class="panel-title"> Credit Details </h4>
                      </div>
                      <div class="panel-body p-10">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Credit Terms</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="credit_terms" id="credit_terms" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Credit Limit</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="credit_limit" id="credit_limit" />
                            </div>
                        </div>
                     </div>
                </div>

              <div class="col-xs-12 text-center">
                  <button type="submit" class="btn bg-success btn-wide btn-rounded btn-lg" name="submit"><i class="fa fa-check"></i>Save New Customer</button>
              </div>
      
         </div>  <!-- / Column 2 -->
        </div> <!-- / Row -->
            <div class="row">
            </div>
        </div>
   
    <!-- /.container-fluid -->
</section>
</form>

<?php 
if(isset($_POST['submit'])) {
$busi = $_POST['buss_name'];
$trade = $_POST['trade_name'] ;
$reg = $_POST['buss_reg'];
$last = $_POST['last_name'];
$first = $_POST['first_name'];
$mid = $_POST['middle_name'];
$ven_cat = $_POST['vend_category'];
$add0 = $_POST['add1'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$add3 = $_POST['add3'];
$add4 = $_POST['add4'];
$tin = $_POST['tin'];
$tax = $_POST['tax_reg'];
$terms = $_POST['credit_terms'];
$limit = $_POST['credit_limit'];
$landline = $_POST['comp_landline'];
$mobile = $_POST['comp_mobile'];
$website = $_POST['comp_website'];
$facebook = $_POST['comp_facebook'];
$name =$_POST['contact_name'];
$number =$_POST['contact_number'];
$email =$_POST['contact_email'];
$bank =$_POST['bank'];
$bank_no = $_POST['bank_no'];
$sales = $_POST['sales'];
$area = $_POST['area'];
$size = $_POST['size'];
$freq = $_POST['freq'];

$status = 0;
$active = 0;

$sql = "INSERT INTO `db_customer`( `business_name`, `trade_name`, `business_type`, `owner_last_name`, `owner_first_name`, `owner_middle_name`, `vendor_categ`, `unit_bldg_no`, `street`, `barangay`, `district`, `province`, `tax_type`, `tin`, `active`, `status`, `salesman`, `area`, `size`, `visit_freq`)
VALUES  ('$busi', '$trade', '$reg', '$last', '$first', '$mid','$ven_cat', '$add0', '$add1', '$add2', '$add3', '$add4','$tax','$tin','$active','$status', '$sales','$area','$size', '$freq')";

    if (mysqli_query($con, $sql)) {
        echo '<script>window.location.href = "https://ops.northward.ph/customers?Saved";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

}

?>

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
