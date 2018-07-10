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
      <form action ="" method="post" id="employeeForm">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Employee Details </h4>
          </div>
          <div class="panel-body p-10">
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Salutation<sup class="color-danger">*</sup></label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="salutation" id="salutation" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">First Name<sup class="color-danger">*</sup></label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="first_name" id="first_name" required/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Middle Name<sup class="color-danger">*</sup></label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="mid_name" id="mid_name" required/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Last Name<sup class="color-danger">*</sup></label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="last_name" id="last_name" required/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Name Extension</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="name_ext" id="name_ext" />
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
                              <input type="text" class="form-control" name="m_status" id="m_status" placeholder="Status"/>
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
                      <label class="col-xs-4 control-label">Permanent Address</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="perm_add" id="perm_add" placeholder="Address"/>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="col-xs-4 control-label">Present Address</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="curr_add" id="curr_add" placeholder="Address"/>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="col-xs-4 control-label">Nationality</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Nationality"/>
                      </div>
                      </div>
                      <div class="form-group">
                <label class="col-xs-4 control-label">Email<sup class="color-danger">*</sup></label>
                      <div class="col-xs-8">
                          <input type="email" class="form-control" name="email" id="email" placeholder="name@domain.com" required/>
                      </div>
                     </div>    
                 <div class="form-group">
                 <label class="col-xs-4 control-label">Telephone</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone"/>
                      </div>
            </div>
                     
                  </div>



          </div> <!-- / Panel Body -->
        </div> <!-- / Panel -->
   <div class="panel">
        <div class="panel-heading bg-info">
            <h4 class="panel-title"> Compensation </h4>
        </div>
        <div class="panel-body p-10">
          <div class="form-group">
              <label class="col-xs-4 control-label">Base Pay</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="base_pay" id="base_pay" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Pay Interval</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="pay_int" id="pay_int" />
              </div>
          </div>
           <div class="form-group">
              <label class="col-xs-4 control-label">Salary Grade</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="salary_grd" id="salary_grd" />
              </div>
          </div>
          <div class="form-group">
               <label class="col-xs-4 control-label">Position</label>
               <div class="col-xs-8">
                <label class="radio-inline">
                    <input type="radio" name="taxreg" value="1" checked="checked">Managerial
                </label>
                <label class="radio-inline">
                    <input type="radio" name="taxreg" value="0">Rank-and-file
                </label>
              </div>
         </div>      
        </div>  <!-- / Panel Body -->
      </div>  <!-- / Panel -->

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
                    <input type="text" class="form-control" name="econ_num" id="econ_num" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Relationship</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="econ_rel" id="econ_rel" />
                </div>
            </div>
            
            

          </div>  <!-- / Panel Body -->
        </div>  <!-- / Panel -->
        
      
        
      </div> <!-- / Column1 -->
      
      

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Job Assignment </h4>
          </div>
          <div class="panel-body p-10">
            <div class="form-group">
                <label class="col-xs-4 control-label">Business Unit</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="bus_unit" id="bus_unit" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Department</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="dept" id="dept" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Job Title<sup class="color-danger">*</sup></label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="job_title" id="job_title" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Reporting Manager</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="rep_manager" id="rep_manager" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Date Joined</label>
                <div class="col-xs-8">
                    <input type="date" class="form-control" name="date_joined" id="date_joined" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Employment Status</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="emp_status" id="emp_status" />
                </div>
            </div>
          </div>
        </div>
          <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Dependents </h4>
          </div>
          <div class="panel-body p-10">
            <div class="form-group">
                <label class="col-xs-4 control-label">Dependent Name</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="dep_fname" id="dep_name" placeholder="FN"/>
                </div>
                 <div class="col-xs-2">
                    <input type="text" class="form-control" name="dep_mname" id="dep_name" placeholder="MN"/>
                </div>
                 <div class="col-xs-3">
                    <input type="text" class="form-control" name="dep_lname" id="dep_name" placeholder="LN" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Relationship</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="dep_relation" id="dep_relation" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Date of Birth</label>
                <div class="col-xs-8">
                    <input type="date" class="form-control" name="dep_birth" id="dep_birth" />
                </div>
            </div>
          </div>  <!-- / Panel Body -->
        </div>  <!-- / Panel -->
        
        <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Government Numbers </h4>
          </div>
          <div class="panel-body p-10">
             <div class="form-group">
                <label class="col-xs-4 control-label">Professional</label>
                <div class="col-xs-8">
                <label class="radio-inline">
                    <input type="radio" name="taxreg" value="1" checked="checked">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="taxreg" value="0">No
                </label>
            </div> 
            <div class="form-group">
                <label class="col-xs-4 control-label">PRC Number</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="employee_prc" id="employee_prc" />
                </div>
            </div>
             <div class="form-group">
                <label class="col-xs-4 control-label">TIN Number</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="employee_tin" id="employee_tin" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">SSS Number</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="employee_sss" id="employee_sss" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Pag-Ibig Number</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="employee_pagibig" id="employee_pagibig" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">PhilHealth Number</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="employee_philhealth" id="employee_philhealth" />
                </div>
            </div>
            
          </div>
         </div>
        </div>
        
    <div class="panel">
        <div class="panel-heading bg-info">
            <h4 class="panel-title"> Government ID</h4>
        </div>
        <div class="panel-body p-10">
                    <div class="form-group">
                        <label class="col-xs-4 control-label">Government ID</label>
                        <div class="col-xs-8">
                          <select class="form-control" id="id_type">
                            <option value=""></option> 
                            <option value="">Drivers License</option>
                            <option value="">PRC Id</option>
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
$salutation = $_POST['salutation'];
$ln = $_POST['last_name'];
$fn = $_POST['first_name'];
$midname = $_POST['mid_name'];
$name_ext = $_POST['name_ext'];
$b_day = $_POST['b_day'];
$m_status = $_POST['m_status'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$nationality = $_POST['nationality'];
$gender = $_POST['gender'];
$tel_no = $_POST['tel_no'];
$perm_add = $_POST['perm_add'];
$perm_zip = $_POST['perm_zip'];
$curr_add = $_POST['curr_add'];
$curr_zip = $_POST['curr_zip'];

$bus_unit = $_POST['bus_unit'];
$dept = $_POST['dept'];
$job_title= $_POST['job_title'];
$rep_manager= $_POST['rep_manager'];
//$month = $_POST['month'];
//$day = $_POST['day'];
//$year= $_POST['year'];
//$joined = $year. "-" .$month. "-" .$day;
$joined = $_POST['date_joined'];
$emp_status= $_POST['emp_status'];

//Compensations
$base = $_POST['base_pay'];
$interval = $_POST['pay_inerval'];
$salary = $_POST['salary_grd'];
$position = $_POST['position'];

//Emergency Contact
$efname = $_POST['econ_fname'];
$emname = $_POST['econ_mname'];
$elname = $_POST['econ_lname'];
$number = $_POST['econ_num'];
$relation = $_POST['econ_rel'];

//dependents
$fname = $_POST['dep_fname'];
$mname = $_POST['dep_mname'];
$lname = $_POST['dep_lname'];
$relation = $_POST['dep_relation'];
$bday = $_POST['dep_birth'];


//Gov No.
$profession = $_POST['professional'] ;
$prc_no = $_POST['prc_no'];
$tin_no = $_POST['tin_no'];
$sss_no = $_POST['sss_no'];
$pagibig_no = $_POST['pagibig_no'];
$philhealth_no = $_POST['philhealth_no'];

$sql = "INSERT INTO `db_hr_employees`( `salutation`, `last_name`, `first_name`, `middle_name`, `name_ext`, `b_day`, `m_status`, `mobile`, `email`, `gender`, `nationality`, `tel_no`, `perm_add`, `perm_zip`, `curr_add`, `curr_zip`, `bus_unit`, `dept`, `job_title`, `rep_manager`, `date_joined`, `emp_status`) 
  VALUES ('$salutation','$ln','$fn','$midname','$name_ext','$b_day','$m_status','$mobile','$email','$gender','$nationality','$tel_no','$perm_add','$perm_zip','$curr_add','$curr_zip','$bus_unit','$dept','$job_title','$rep_manager','$joined','$emp_status')";
 
if (mysqli_query($con, $sql)) {
   //Echo "tets";
   echo '<script>window.location.href = "https://ops.northward.ph/employees-list?Saved";</script>';
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

<script>
    $(function($) {
        $.validate({
            form : '#two-column',
            modules : 'security'
        });
    });
</script

<?php  require 'module/structure/html_close.php';?>
