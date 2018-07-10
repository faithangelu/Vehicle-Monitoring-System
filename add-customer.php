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
      <form action="" method="post" enctype="multipart/form-data">
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
                          <label class="col-xs-4 control-label pt-10">Address</label>
                          <div class="col-xs-8 pt-10">
                            <input type="text" class="form-control" name="add0" id="add0" placeholder="Complete Address"/>
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

        
            <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
            <div class="panel">
                <div class="panel-heading bg-info">
                    <h4 class="panel-title"> Upload CSV file of Accounts </h4>
                </div>
                <div class="panel-body p-10">
                  <div class="form-group">
                      <label class="col-xs-4 control-label">Choose CSV file:</label>
                      <div class="col-xs-8">
                          <input type="file" name="file" id="file" >
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
$add0 = $_POST['add0'];
//$add1 = $_POST['add1'];
//$add2 = $_POST['add2'];
//$add3 = $_POST['add3'];
//$add4 = $_POST['add4'];
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
//$sales = $_POST['sales'];
//$area = $_POST['area'];
//$size = $_POST['size'];
//$freq = $_POST['freq'];

$status = 0;
$active = 0;

$sql = "INSERT INTO `db_customer`( `business_name`, `trade_name`, `business_type`, `vendor_categ`, `address`, `tax_type`, `tin`, `active`, `status`)
VALUES  ('$busi', '$trade', '$reg', '$ven_cat', '$add0','$tax','$tin','$active','$status')";

    if (mysqli_query($con, $sql)) {
        
        $fileName = $_FILES["file"]["tmp_name"];
    
        if ($_FILES["file"]["size"] > 0) {
            
            $file = fopen($fileName, "r");
            
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                $sqlInsert = "INSERT INTO db_trip_rate (trip_id, client, delivery, city, 4wh, 6wh, 10wh, tractor) 
                VALUES ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "', '" . $column[3] . "', '" . $column[4] . "','" . $column[5] . "','" . $column[6] . "', '" . $column[7] . "')";
                $result = mysqli_query($con, $sqlInsert);
                
                //echo $sqlInsert;
                if ($result) {
                    $type = "success";
                    $message = "CSV Data Imported into the Database";
                    //redirect 
                    echo '<script>window.location.href = "https://ops.northward.ph/customers?accounts?Saved";</script>';
                } else {
                    $type = "error";
                    $message = "Problem in Importing CSV Data";
                }
            }
        }
        
            
         
    } 
    else {
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
