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
                        <h2 class="title">Dashboard</h2>
                    </div>
                    <!-- /.col-sm-6 -->
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
							                   <li class="active">Dashboard</li>
						            </ul>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<!-- End Title Bar -->

<!-- ========== Content ========== -->
          <section class="section">
              <div class="container-fluid">
                  <div class="row mt-15">

                    <!-- Column 1 -->
                    <div class="col-md-4">
                        <div>
                        <div class="panel">
                            <div class="panel-heading bg-warning">
                                <div class="panel-title">
                                    <h5>Announcements</h5>
                                </div>
                            </div>
                            <div class="panel-body">
                              <ul class="fa-ul">
                                <?php
                                $sql = "SELECT * from db_announcements where end_date >= '$today' ";
                                 //echo $sql . "<br />";
                                $result=mysqli_query($con,$sql);
                                
                                if ($result->num_rows > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $date=date_create($row['end_date']);
                                        echo "<li><span class='fa-li'><i class='fas fa-bullhorn'></i></span> " . $row['text'] . " --- " . date_format($date,"F j, Y") . "</li>";
                                    }
                                } else {
                                    echo "None at present.";
                                }

                                ?>
                              </ul>

                            </div>
                        </div>
                        </div>
                        <?php 
                        $id=$_SESSION['userId'];
                        //$sql = "SELECT db_trip_ticket.* FROM db_trip_ticket 
                        //JOIN db_hr_employees ON db_trip_ticket.driver = db_hr_employees.first_name
                        //JOIN db_user ON db_hr_employees.emp_id = db_user.emp_id
                        //where trip_date='$today' and db_user.emp_id='$userId'";
                        
                        $sql = "SELECT * from db_trip_ticket a JOIN db_hr_employees b 
                        ON a.driver = b.first_name JOIN db_user c ON c.emp_id=b.emp_id 
                        WHERE trip_date='$today' and c.userId='$id';";
                        
                         //echo $sql;
                         $result=mysqli_query($con,$sql);
                         if ($result->num_rows > 0) {
                         while($row = mysqli_fetch_assoc($result)) {
                         ?>
                            <div>
                            <div class="panel" >
                                <div class="panel-heading bg-danger-600">
                                    <div class="panel-title">
                                        <h5>Trip Ticket: <b><?php echo $row['ticket_id']; ?> </b></h5>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                    <div class="form-group">
                                        <form action="" method="post">
                                          <label class="col-xs-4 control-label">Date of Transaction:</label>
                                          <div class="col-xs-8">
                                             <input class="form-control" type ="text" value="<?php echo $row['trip_date']; ?> " readonly/>
                                          </div>
                                          <label class="col-xs-4 control-label">Vehicle Plate No.:</label>
                                          <div class="col-xs-8">
                                             <input class="form-control" type ="text" value="<?php echo $row['vehicle_id']; ?> " readonly/>
                                          </div>
                                          <label class="col-xs-4 control-label">Customer:</label>
                                          <div class="col-xs-8">
                                             <input class="form-control" type ="text" value="<?php echo $row['customer']; ?> " readonly/>
                                          </div>
                                          <label class="col-xs-4 control-label">Account:</label>
                                          <div class="col-xs-8">
                                             <input class="form-control" type ="text" value="<?php echo $row['account']; ?> " readonly/>
                                          </div>
                                          <div class="col-xs-4" style="display:none">
                                             <input class="form-control" type ="text" id="d" name="date" value="<?php echo date("Y-n-d h:i:s"); ?>" readonly/>
                                          </div>
                                          <div class="col-xs-4" style="display:none">
                                             <input class="form-control" type ="text" id="id" name="id" value="<?php echo $row['ticket_id']; ?>" readonly/>
                                          </div>
                                          <div class="col-xs-12">
                                              <button type="submit" class="form-control bg-danger " id="1" name="warehouse">Warehouse</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                           <div class="col-xs-12">
                                              <button class="form-control bg-primary s" id="2" name="loaded" >Loaded</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                           <div class="col-xs-12 customer" ">
                                              <button class="form-control bg-warning disabled" id="3" name="customer">Customer</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                         <div class="col-xs-12">
                                              <button class="form-control disabled" style="background: green" id="4" name="und" >Unloaded</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                           <div class="col-xs-12">
                                              <button class="form-control disabled" style="background: #bdc3c7" id="5" name="garage" >Garage</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                           <div class="col-xs-12">
                                              <button class="form-control disabled" style="background: #f1c40f" id="6" name="end">End Time</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>   
                                </div>
                               
                            </div>
                    </div>
                    <?php }  }; ?>
                    </div>
                    
                    <?php 
                    $db_ip = "127.0.0.1";
                    $db_user = "llmgco5_nclc_ops";
                    $db_pass = "abcd1234";
                    $db_table = "llmgco5_nclc_ops";
                    
                    
                    $con= mysqli_connect($dp_ip, $db_user, $db_pass, $db_table);
                    
                    if(isset($_POST['warehouse'])) {
                        $date = $_POST['date']; 
                        $id = $_POST['id'];
                        $sql = "UPDATE db_trip_ticket SET time_warehouse='$date' WHERE ticket_id='$id'";

                        if (mysqli_query($con, $sql)) {
                          
                           $css = 'width: 20%; background-color: red';
                           $bar = '20% Complete';
                           $mes = 'Vehicle now on warehouse.'; 
                           
                        } else {
                            echo "Error updating record: " . mysqli_error($con);
                        }
                    }  
                    if(isset($_POST['loaded'])) {
                       $date =  $_POST['date']; 
                       $id = $_POST['id'];
                       $sql = "UPDATE db_trip_ticket SET time_loaded='$date' WHERE ticket_id='$id'";
                       
                       if (mysqli_query($con, $sql)) {
                           $css = 'width: 40%; background-color: blue';
                           $bar = '40% Complete';
                           $mes = 'Vehicle now on loaded.';
                        } else {
                            echo "Error updating record: " . mysqli_error($con);
                        }
                     }  
                    if(isset($_POST['customer'])) {
                       $date =  $_POST['date']; 
                       $id = $_POST['id'];
                       $sql = "UPDATE db_trip_ticket SET time_to_cust='$date' WHERE ticket_id='$id'";
                       
                       if (mysqli_query($con, $sql)) {
                           $css = 'width: 60%; background-color: orange';
                           $bar = '60% Complete';
                           $mes = 'Vehicle now on customer.';
                        } else {
                            echo "Error updating record: " . mysqli_error($con);
                        }
                     }  
                     
                     if(isset($_POST['und'])) {
                       $date =  $_POST['date']; 
                       $id = $_POST['id'];
                       $sql = "UPDATE db_trip_ticket SET time_unloaded='$date' WHERE ticket_id='$id'";
                       
                       if (mysqli_query($con, $sql)) {
                           $css = 'width: 80%; background-color: green';
                           $bar = '80% Complete';
                           $mes = 'Vehicle on unload.';
                        } else {
                            echo "Error updating record: " . mysqli_error($con);
                        }
                     }  
                     if(isset($_POST['garage'])) {
                       $date =  $_POST['date']; 
                       $id = $_POST['id'];
                       $sql = "UPDATE db_trip_ticket SET time_to_garage='$date' WHERE ticket_id='$id'";
                       
                       if (mysqli_query($con, $sql)) {
                           $css = 'width: 90%; background-color: grey';
                           $bar = '90% Complete';
                           $mes = 'Vehicle on the way to garage.';
                        } else {
                            echo "Error updating record: " . mysqli_error($con);
                        }
                     }  
                     if(isset($_POST['end'])) {
                       $date =  $_POST['date']; 
                       $id = $_POST['id'];
                       $sql = "UPDATE db_trip_ticket SET end_time='$date' WHERE ticket_id='$id'";
                       
                       if (mysqli_query($con, $sql)) {
                           $css = 'width: 100%; background-color: dark-yellow';
                           $bar = '100% Complete';
                           $mes = 'End time.';
                        } else {
                            echo "Error updating record: " . mysqli_error($con);
                        }
                     }  
                    ?>
                    
                    <!-- Column 2 -->
                    <div class="col-md-8">
                        <div>
                            <div class="panel" >
                                <div class="panel-heading bg-success-700">
                                    <div class="panel-title">
                                        <h5>Trip Summary of <?php echo date("F j, Y"); ?></h5>
                                    </div>
                                </div>
                                <div class="panel-body">
                                   <div class="row p-10">
                                        <div class="col-md-12">
                                             <div class="panel">
                                                 <div class="panel-body p-20">
                                                    <table id="projectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead class="bg-primary-300">
                                                            <tr>
                                                                <th class="text-center">Ticket ID</th>
                                                                <th class="text-center">Vehicle Plate Number</th>
                                                                <th class="text-center">Progress</th>
                                                                <th class="text-center">Status</th>
                                                            </tr>
                                                        </thead>
                                                         <?php 
                                                              $sql = "SELECT * FROM db_trip_ticket WHERE trip_date='$today'";
                                                              $result=mysqli_query($con,$sql);
                                                                 if ($result->num_rows > 0) {
                                                                 while($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <tbody>
                                                            <tr>
                                                              <td class="text-center"><?php echo $row['ticket_id']; ?></td>
                                                              <td class="text-center"><a href="media/ticket_printing.php?id=<?php echo $row['ticket_id']; ?>"><?php echo $row['vehicle_id']; ?></a></td>
                                                              <td class="text-center">
                                                                <div class="progress text-left">
                                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" id="bar" style="<?php echo $css; ?>"><?php echo $bar; ?></div>
                                                                <i class="fas fa-truck fa-flip-horizontal"></i>
                                                                </div>
                                                              </td>
                                                              <td class="text-center"><div class="status"><?php echo $mes; ?></div></td>
                                                            </tr>
                                                        </tbody>
                                                            <?php  } } ; ?>
                                                        <tfoot class="bg-primary-300">
                                                          <tr>
                                                              <th class="text-center">Plate Number</th>
                                                              <th class="text-center">Vehicle Category</th>
                                                              <th class="text-center">Progress</th>
                                                              <th class="text-center">Status</th>
                                                          </tr>
                                                        </tfoot>
                                                    </table>
                                                  </div>
                                              </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
                  <!-- /.row -->
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
