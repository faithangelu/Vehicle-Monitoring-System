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
                        <h2 class="title">Add Vehicle</h2>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li><a href="vehicles">Vehicle Management</a></li>
							                   <li class="active">Add Vehicle</li>
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
                  <h4 class="panel-title"> Vehicle Details </h4>
              </div>
                <div class="panel-body p-10">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Make</label>
                            <div class="col-xs-8">
                               <input class="form-control" type ="text" name="make" id="make" />
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Year Model</label>
                            <div class="col-xs-8">
                                <input class="form-control" type ="text" name="model" id="model" />
                            </div>
                        </div>
    
                      <div class="form-group">
                          <label class="col-xs-4 control-label pt-10">Body Type</label>
                          <div class="col-xs-8 pt-10">
                            <input class="form-control" type ="text" name="type" id="type" />
                          </div>
                      </div>
    
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Plate Number</label>
                            <div class="col-xs-8">
                                <input class="form-control" type ="text" name="plate" id="plate" />
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label class="col-xs-4 control-label">Engine</label>
                            <div class="col-xs-8">
                               <input class="form-control" type ="text" name="engine" id="engine" />
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label class="col-xs-4 control-label">Chassis</label>
                            <div class="col-xs-8">
                                <input class="form-control" type ="text" name="chassis" id="chassis" />
                            </div>
                        </div>
                        
    
                        
                        
                         <div class="form-group">
                          <label class="col-xs-4 control-label pt-10">Remarks</label>
                          <div class="col-xs-8 pt-10">
                             <textarea class="form-control" type ="text" name="remarks" id="remarks"></textarea>
                          </div>
                      </div>
    
                         
    
              </div> <!-- / Panel Body -->
            </div> <!-- / Panel -->

        
            <div class="panel">
                <div class="panel-heading bg-info">
                    <h4 class="panel-title"> Upload ORCR File </h4>
                </div>
                <div class="panel-body p-10">
                 <div class="form-group">
                                      <label class="col-xs-4 control-label" for="filebutton">File ORCR</label>
                                      <div class="col-xs-7">
                                          <input name="file" id="file[]" class="form-control" type="file">
                                          <p>Note: Required format: <br>.pdf</p>
                                       </div>  
                                  </div>
                </div>  <!-- / Panel Body -->
            </div>  <!-- / Panel -->  
          </div> <!-- / Column1 -->
         

             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

              <div class="panel">
                <div class="panel-heading bg-info">
                    <h4 class="panel-title"> Insurance Details</h4>
                </div>
                <div class="panel-body p-10">
                  <div class="form-group">
                          <label class="col-xs-4 control-label pt-10">Insurance Start Date</label>
                          <div class="col-xs-8 pt-10">
                            <input class="form-control" type ="text" name="start_date" id="start_date" />
                          </div>
                      </div>
    
                         <div class="form-group">
                          <label class="col-xs-4 control-label pt-10">Insurance End Date</label>
                          <div class="col-xs-8 pt-10">
                            <input class="form-control" type ="text" name="end_date" id="end_date" />
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
                          <label class="col-xs-4 control-label pt-10">Vehicle Category</label>
                          <div class="col-xs-8 pt-10">
                             <select class="form-control" name="veh_category">
                                            <option value="1">4 Wheeler</option>
                                            <option value="2">6 Wheeler</option>
                                            <option value="3">10 Wheeler</option>
                                            <option value="4">Tractor Head</option>
                                        </select>
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
if(isset($_POST['submit'])){
 
 $make = $_POST['make'];
 $model = $_POST['model'];
 $type = $_POST['type'];
 $plate = $_POST['plate'];
 $eng = $_POST['engine'];
 $cha = $_POST['chassis'];
 $cat = $_POST['category'];
 $start = $_POST['start_date'];
 $end = $_POST['end_date'];
 $name = $_FILES['file']['name'];
 $target_dir = "module/upload/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif", "pdf");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Insert record
  $sql = "INSERT INTO `db_vehicles_detail`(`make`, `year_model`, `body_type`, `plate_no`, `engine_no`, `chassis_no`, `vehicle_category`, `insurance_start_date`, `insurance_end_date`, `file_path` , `remarks`) 
  VALUES ('$make', '$model','$type', '$plate', '$eng', '$cha', '$cat', '$start','$end','$name', '$remarks')";
  
  if (mysqli_query($con, $sql)) {
      // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
     echo '<script>window.location.href = "https://ops.northward.ph/vehicles?AddedVehicle";</script>';                 
 
     } else {
              echo "Error: " . $sql . "<br>" . $con->error;
     }
    }
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM `db_vehicles_detail` WHERE vehicle_id='$id'";
    $result=mysqli_query($con, $sql);
    echo '<script>window.location.href = "vehicles?Deleted?&'.$id.'" </script>';
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
