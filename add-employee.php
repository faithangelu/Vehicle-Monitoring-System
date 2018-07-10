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
                        <h2 class="title">Add employee</h2>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li>Settings</li>
							                   <li class="active">Employee Details</li>
						            </ul>
                    </div>
                </div>
            </div>
<!-- End Title Bar -->

<!-- ========== Content ========== -->


<section class="section">
  <div class="container-fluid">
      <form action ="" method="post" id="employeeForm" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Employee Details </h4>
          </div>
          <div class="panel-body p-10">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Upload Image</label>
                            <div class="col-xs-8">
                                <input type="file" class="form-control" name="image" id="image" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-xs-4 control-label">First Name<sup class="color-danger">*</sup></label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="first_name" id="first_name" required />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Middle Name<sup class="color-danger">*</sup></label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="mid_name" id="mid_name" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Last Name<sup class="color-danger">*</sup></label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="last_name" id="last_name" required/>
                            </div>
                        </div>
                    
                       <div class="form-group">
                          <label class="col-xs-4 control-label">Birthday</label>
                          <div class="col-xs-8 ">
                            <input type="date" class="form-control" name="b_day" id="b_day" />
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-xs-4 control-label">Marital Status</label>
                          <div class="col-xs-8">
                              <select class="form-control" id="status" name="status">
                                <option value=""></option> 
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                              </select>
                              <bR>
                          </div>
                        </div> 
                        
                        <div class="form-group">
                          <label class="col-xs-4 control-label">Mobile</label>
                          <div class="col-xs-8">
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No."/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-xs-4 control-label">Gender</label>
                          <div class="col-xs-8">
                              <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender"/>
                          </div>
                        </div>  
                     
                       <div class="form-group">
                          <label class="col-xs-4 control-label">Present Address</label>
                          <div class="col-xs-8">
                              <input type="text" class="form-control" name="curr_add" id="curr_add" placeholder="Address"/>
                          </div>
                       </div>
                       
                       <div class="form-group">
                            <label class="col-xs-4 control-label">Email<sup class="color-danger">*</sup></label>
                            <div class="col-xs-8">
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@domain.com" required/>
                            </div>
                       </div>    
                </div> <!-- / Panel Body -->
            </div> <!-- / Panel -->
        </div> <!-- / Column1 -->
      
      

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Job Assignment </h4>
          </div>
          <div class="panel-body p-10">
            <div class="form-group">
                <label class="col-xs-4 control-label">Department</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="dept" id="dept" placeholder="E.g - Finance, Administrative, Operations, etc. " />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Job Title<sup class="color-danger">*</sup></label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="job_title" id="job_title" required/>
                </div>
            </div>
          </div>
        </div>
          <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Emergency Contact </h4>
          </div>
          <div class="panel-body p-10">
            <div class="form-group">
                <label class="col-xs-4 control-label">Contact Person</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="econ_fname" id="econ_fname" placeholder="FN" />
                </div>
                <div class="col-xs-2">
                    <input type="text" class="form-control" name="econ_mname" id="econ_mname" placeholder="MN" />
                </div>
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="econ_lname" id="econ_lname" placeholder="LN"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Contact Number</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="econ_num" id="econ_num" placeholder="+639 123 4567 890" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Relationship</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="econ_rel" id="econ_rel" placeholder="E.g - Mother, Spouse, Child" />
                </div>
            </div>
            
            

          </div>  <!-- / Panel Body -->
        </div>  <!-- / Panel -->
        
    <div class="panel">
        <div class="panel-heading bg-info">
            <h4 class="panel-title"> Government ID</h4>
        </div>
        <div class="panel-body p-10">
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Government ID</label>
                        <div class="col-xs-8">
                          <select class="form-control" id="id_type" name="id_type">
                            <option value=""></option> 
                            <option value="Drivers License">Drivers License</option>
                            <option value="PRC">PRC Id</option>
                          </select>
                        </div>
                        <br />
                    </div>
                 <div class="form-group">
                    <label class="col-xs-4 control-label">Upload ID</label>
                    <div class="col-xs-8">
                        <input type="file" class="form-control" name="fileUpload" id="fileUpload" />
                    </div>
                </div>
        </div>  <!-- / Panel Body -->
      </div>  <!-- / Panel -->
      
      <div class="col-xs-12 text-center">
          <button type="submit" class="btn bg-success btn-wide btn-rounded btn-lg" name="submit" form="employeeForm"><i class="fa fa-check"></i>Add New Employee</button>
      </div>

    </div>  <!-- / Column 2 -->


    </div> <!-- / Row -->
    </form>
    <div class="row">

    </div>



    </div>
    <!-- /.container-fluid -->
</section>
<!-- End of Content -->

<?php 
if (isset($_POST['submit'])) { 
//$salutation = $_POST['salutation'];
$ln = $_POST['last_name'];
$fn = $_POST['first_name'];
$midname = $_POST['mid_name'];
//$name_ext = $_POST['name_ext'];
$b_day = $_POST['b_day'];
$m_status = $_POST['m_status'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
//$nationality = $_POST['nationality'];
$gender = $_POST['gender'];
//$tel_no = $_POST['tel_no'];
//$perm_add = $_POST['perm_add'];
//$perm_zip = $_POST['perm_zip'];
$curr_add = $_POST['curr_add'];
//$curr_zip = $_POST['curr_zip'];

//$bus_unit = $_POST['bus_unit'];
$dept = $_POST['dept'];
$job_title= $_POST['job_title'];
//$rep_manager= $_POST['rep_manager'];
//$month = $_POST['month'];
//$day = $_POST['day'];
//$year= $_POST['year'];
//$joined = $year. "-" .$month. "-" .$day;
//$joined = $_POST['date_joined'];
//$emp_status= $_POST['emp_status'];

//Compensations
//$base = $_POST['base_pay'];
//$interval = $_POST['pay_inerval'];
//$salary = $_POST['salary_grd'];
//$position = $_POST['position'];

//Emergency Contact
$efname = $_POST['econ_fname'];
$emname = $_POST['econ_mname'];
$elname = $_POST['econ_lname'];
$number = $_POST['econ_num'];
$relation = $_POST['econ_rel'];
$active = 1;
//dependents
//$fname = $_POST['dep_fname'];
//$mname = $_POST['dep_mname'];
//$lname = $_POST['dep_lname'];
//$relation = $_POST['dep_relation'];
//$bday = $_POST['dep_birth'];


//Gov No.
//$profession = $_POST['professional'] ;
//$prc_no = $_POST['prc_no'];
//$tin_no = $_POST['tin_no'];
//$sss_no = $_POST['sss_no'];
//$pagibig_no = $_POST['pagibig_no'];
//$philhealth_no = $_POST['philhealth_no'];

//Gov Id
$id_type = $_POST['id_type'];
$upload = $_FILES['fileUpload']['name'];
$image = $_FILES['image']['name'];
$target_dir = "module/upload/employee-gov/";
$target_file = $target_dir . basename($upload);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif", "pdf");

// Check extension


$sql = "INSERT INTO `db_hr_employees`(`last_name`, `first_name`, `middle_name`, `b_day`, `m_status`, `mobile`, `email`, `gender`, `curr_add`, `dept`, `job_title`,`e_fname`,`e_mname`, `e_lname`, `econtact_num`, `econtact_rel`, `govern_id`, `id_type`, `active`) 
VALUES ('$ln','$fn','$midname','$b_day','$m_status','$mobile','$email','$gender','$curr_add','$dept','$job_title','$efname', '$emname','$elname','$number','$relation', '$id_type', '$upload', '$active')";
        
        if (mysqli_query($con, $sql)) {
            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$upload);
            echo '<script>window.location.href = "https://ops.northward.ph/employees-list?Saved";</script>';
            //echo $sql;
        } else {
           echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

?>

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
    <script src="js/form-validator/jquery.form-validator.min.js"></script>


<?php  require 'module/structure/html_close.php';?>
