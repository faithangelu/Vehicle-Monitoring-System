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
                        <h2 class="title">Profile</h2>
                    </div>

                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
							<li class="active">Profile</li>
					    </ul>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      <!-- End Title Bar -->





      <div class="row mt-30 p-20">
                                      <div class="col-md-3">
                                          <div class="panel border-primary no-border border-3-top">
                                              <div class="panel-heading">
                                                  <div class="panel-title">
                                                      <h5>Employee Picture</h5>
                                                  </div>
                                              </div>
                                               <?php  
                                                             $id = 0;
                                                             if ( !empty($_GET['id'])) {
                                                              // keep track post values
                                                             $id = $_GET['id'];
                                                                                                                           
                                                             $sql = "SELECT * from db_hr_employees where emp_id=$id " ;
                                                              $result=mysqli_query($con,$sql);
                                                              
                                                            if ($result->num_rows > 0) {
                                                            $row = mysqli_fetch_assoc($result);
                                                       ?>
                                              <div class="panel-body">
                                                  <div class="row">
                                                      <div class="col-md-8 col-md-offset-2">
                                                          <img src="module/upload/employee-picture/<?php echo $row['picture']; ?> " alt="User Avatar" class="img-responsive" width="auto" height="auto">
                                                          <div class="text-center">
                                                              
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- /.panel -->

                                          <div class="panel border-primary no-border border-3-top">
                                              <div class="panel-heading">
                                                   <?php $str = $row['middle_name']; ?>
                                                  <div class="panel-title text-center">
                                                      <h5><?php echo $row['first_name'].' '.$str[0].'. '.$row['last_name']; ?></h5>
                                                  </div>
                                                  <?php }};?>
                                              </div>
                                              <div class="panel-body">
                                                  <div class="row">
                                                      <table class="table table-striped">
                                                      	<tbody>
                                                      		<tr>
                                                      			<th>Email</th>
                                                      			<td>
                                                                <small class="color-success"><i class="fa fa-envelope"></i> <?php echo $row['email']; ?></small>
                                                            </td>
                                                      		</tr>
                                                      		<tr>
                                                      			<th>Department</th>
                                                            <td>
                                                                <small class="color-success"><i class="fa fa-building"></i> <?php echo $row['dept']; ?></small>
                                                            </td>                                                      		
                                                          </tr>
                                                      		<tr>
                                                      			<th>Position</th>
                                                            <td>
                                                                <small class="color-success"><i class="fa fa-briefcase"></i> <?php echo $row['job_title']; ?></small>
                                                            </td> 
                                                          </tr>
                                                      	</tbody>
                                                      </table>
                                                  </div>
                                              </div>
                                            </div>
                                          <!-- /.panel -->
                                      </div>
                                      <!-- /.col-md-3 -->

                                      <div class="col-md-9">

                                          <ul class="nav nav-tabs nav-justified" role="tablist">
                                          		<li role="presentation" class="active"><a href="#emp_details" aria-controls="emp_details" role="tab" data-toggle="tab">Employee Details</a></li>
                                          		<li role="presentation"><a href="#emp_comp" aria-controls="emp_comp" role="tab" data-toggle="tab">Compensation</a></li>
                                          		<li role="presentation"><a href="#emp_contact" aria-controls="emp_contact" role="tab" data-toggle="tab">Emergency Contact</a></li>
                                          		<li role="presentation"><a href="#emp_dep" aria-controls="emp_dep" role="tab" data-toggle="tab">Dependents</a></li>
                                              <li role="presentation"><a href="#emp_nos" aria-controls="emp_nos" role="tab" data-toggle="tab">Government Nos.</a></li>
                                              <li role="presentation"><a href="#emp_gov_id" aria-controls="emp_gov_id" role="tab" data-toggle="tab">Government ID</a></li>
                                      	   </ul>

                                          <div class="tab-content bg-white p-15">
                                      		<div role="tabpanel" class="tab-pane active" id="emp_details">
                                              <div class="col-md-6">
                                                <table class="table table-striped">

                                                    <tbody class="text-center line-height-35">
                                                      <tr>
                                                        <td class="w-30 line-height-35">Salutation:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['salutation']; ?></b></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="w-30 line-height-35">Full Name:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></b></td>
                                                      </tr>
                                                      
                                                      <tr>
                                                        <td class="w-20 line-height-35">Telephone:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['tel_no']; ?></b></td>
                                                      </tr>
                                                       <tr>
                                                        <td class="w-20 line-height-35">Present Address:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['perm_add']; ?></b></td>
                                                      </tr>
                                                       <tr>
                                                        <td class="w-20 line-height-35">Present Address:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['curr_add']; ?></b></td>
                                                      </tr>
                                                       
                                                    </tbody>
                                                  </table >
                                              </div>

                                              <div class="col-md-6">
                                                <table class="table table-striped">

                                                    <tbody class="text-center line-height-35">
                                                     <tr>
                                                        <td class="w-20 line-height-35">Birthday:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="w-30 line-height-35">Marital Status:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="w-20 line-height-35">Mobile No:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="w-20 line-height-35">Gender:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="w-20 line-height-35">Nationality:</td>
                                                        <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                      </tr>
                                                    </tbody>
                                                  </table >
                                              </div>


                                    		   </div>
                                      		<div role="tabpanel" class="tab-pane" id="emp_comp">
                                      		    <div class="col-md-6">
                                      		    <table class="table table-striped">
                                          		    <tbody class="text-center line-height-35">
                                                         <tr>
                                                            <td class="w-20 line-height-35">Birthday:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-30 line-height-35">Marital Status:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Mobile No:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Gender:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Nationality:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table class="table table-striped">
        
                                                            <tbody class="text-center line-height-35">
                                                             <tr>
                                                                <td class="w-20 line-height-35">Birthday:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-30 line-height-35">Marital Status:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Mobile No:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Gender:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Nationality:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                              </tr>
                                                            </tbody>
                                                          </table >
                                                    </div>
                                      		</div>
                                      		<div role="tabpanel" class="tab-pane" id="emp_contact">
                                      		    <div class="col-md-6">
                                      		    <table class="table table-striped">
                                          		    <tbody class="text-center line-height-35">
                                                         <tr>
                                                            <td class="w-20 line-height-35">Birthday:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-30 line-height-35">Marital Status:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Mobile No:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Gender:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Nationality:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table class="table table-striped">
        
                                                            <tbody class="text-center line-height-35">
                                                             <tr>
                                                                <td class="w-20 line-height-35">Birthday:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-30 line-height-35">Marital Status:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Mobile No:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Gender:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Nationality:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                              </tr>
                                                            </tbody>
                                                          </table >
                                                    </div>
                                      		</div>
                                      		<div role="tabpanel" class="tab-pane" id="emp_dep">
                                      		     <div class="col-md-6">
                                      		    <table class="table table-striped">
                                          		    <tbody class="text-center line-height-35">
                                                         <tr>
                                                            <td class="w-20 line-height-35">Birthday:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-30 line-height-35">Marital Status:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Mobile No:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Gender:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Nationality:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table class="table table-striped">
        
                                                            <tbody class="text-center line-height-35">
                                                             <tr>
                                                                <td class="w-20 line-height-35">Birthday:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-30 line-height-35">Marital Status:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Mobile No:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Gender:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Nationality:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                              </tr>
                                                            </tbody>
                                                          </table >
                                                    </div>
                                      		</div>
                                            <div role="tabpanel" class="tab-pane" id="emp_nos">
                                                  <div class="col-md-6">
                                      		    <table class="table table-striped">
                                          		    <tbody class="text-center line-height-35">
                                                         <tr>
                                                            <td class="w-20 line-height-35">Birthday:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-30 line-height-35">Marital Status:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Mobile No:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Gender:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Nationality:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table class="table table-striped">
        
                                                            <tbody class="text-center line-height-35">
                                                             <tr>
                                                                <td class="w-20 line-height-35">Birthday:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-30 line-height-35">Marital Status:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Mobile No:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Gender:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Nationality:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                              </tr>
                                                            </tbody>
                                                          </table >
                                                    </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="emp_gov_id">
                                                  <div class="col-md-6">
                                      		    <table class="table table-striped">
                                          		    <tbody class="text-center line-height-35">
                                                         <tr>
                                                            <td class="w-20 line-height-35">Birthday:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-30 line-height-35">Marital Status:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Mobile No:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Gender:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="w-20 line-height-35">Nationality:</td>
                                                            <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table class="table table-striped">
        
                                                            <tbody class="text-center line-height-35">
                                                             <tr>
                                                                <td class="w-20 line-height-35">Birthday:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['birthday']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-30 line-height-35">Marital Status:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['m_status']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Mobile No:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['mobile']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Gender:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['gender']; ?></b></td>
                                                              </tr>
                                                              <tr>
                                                                <td class="w-20 line-height-35">Nationality:</td>
                                                                <td class="line-height-35 text-left"><b><?php echo $row['nationality']; ?></b></td>
                                                              </tr>
                                                            </tbody>
                                                          </table >
                                                    </div>
                                            </div>




                                          <div class="section-title">
                                              <h6 class="title underline">Northward Crest Logistics Corporation</h6>
                                              <p class="sub-title"></p>
                                          </div>
                                              <!-- /.section-title -->
                                      	</div>
                                      </div>
                                      <!-- /.col-md-9 -->
                                  </div>
                                  <!-- /.row -->





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
