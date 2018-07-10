<?php
require_once 'page_load.php';
require 'module/structure/html_open.php';
 require 'module/structure/head.php';
// Page CSS
echo '<link rel="stylesheet" href="css/date-picker/bootstrap-datetpicker.css" />';
echo '<link rel="stylesheet" href="css/date-picker/jquery.timepicker.css" />';

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
                        <h2 class="title">Operations Management</h2>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li class="active"><a href="operations">Operations Management</a></li>
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
                  <div class="row">
                    <div class="col-md-3">
                      <div class="panel">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="panel-body p-20" >
                                    <form action="" method="post">
                                        <h3>Truck Schedule</h3>
                                        <input type="date"  class="form-control" name="filter_date">
                                        <button type="submit" name="filter" class="btn btn-primary mb-3">Submit</button>
                                        <h4><a href="#" data-toggle="modal" data-target="#uploadModal" class="btn btn-primary mb-6"><i class = "far fa-hand-point-right"></i> CLICK TO GENERATE E-TRIP TICKET</a></h4>
                                    </form>  
                                  </div>
                              </div>
                           </div>      
                      </div>
                    </div>
                    <?php 
                    if (isset($_POST['filter'])) {
                    $filter_date = $_POST['filter_date'];
                   
                    $filter_sql = "SELECT * FROM db_trip_ticket WHERE trip_date='$filter_date'";
                    $result = mysqli_query($con,$filter_sql);
                    $row = mysqli_fetch_assoc($result);
                    $veh =  $row['vehicle_id']; 
                    
                    }
                    ?>
                  </div>
                  <div class="row">
                    <?php 
                     $sql = "SELECT * from db_vehicle_category" ;
                     $result=mysqli_query($con,$sql);
                     if ($result->num_rows > 0) {
                         while ($row = mysqli_fetch_assoc($result)) {
                              $id = $row["veh_categ_id"];
                              
                    ?>   
                    <div class="col-md-3">
                    <a href = "vehicleCategSumm?categ=<?php echo $row["veh_categ_id"]; ?>&date=<?php echo $filter_date; ?>">
                        <div>
                            <div class="panel">
                                <div class="panel-heading bg-<?php echo $row["description"]; ?>">
                                    <div class="panel-title">
                                        <h5><?php echo $row["name"]; ?></h5>
                                    </div>
                                </div>
                                <div class="panel-body overflow-x-auto">
                                    <?php 
                                     $sql1 = "SELECT * from db_vehicles_detail where vehicle_category = '$id'" ;
                                     $result1=mysqli_query($con,$sql1);
                                     $count = $result1->num_rows; 
                                     
                                     $date = "SELECT * FROM db_vehicles_detail a
                                                JOIN db_vehicle_category b 
                                                	ON a.vehicle_category = b.veh_categ_id 
                                                JOIN db_trip_ticket c 
                                                	ON a.plate_no = c.vehicle_id 
                                                WHERE a.vehicle_category = '$id' and trip_date='$filter_date'";
                                     //   echo $date;
                                        
                                     $result2 = mysqli_query($con,$date);
                                     $count1 = $result2->num_rows;
                                     $row = mysqli_fetch_assoc($result2);
                                     //echo $row;
                                     
                                     ?>
                                  <div class="col-xs-12 p-n">
                                        <div class="col-xs-6 p-n">
                                            Total Units
                                        </div>
                                        <div class="col-xs-6 p-n">
                                            <b><?php echo $count; ?></b>
                                        </div>
                                  </div>
                                  <div class="col-xs-12 p-n">
                                        <div class="col-xs-6 p-n">
                                            Units Available
                                        </div>
                                        <div class="col-xs-6 p-n">
                                            <b><?php
                                            if (isset($_POST['filter'])) {
                                            $avail = $count - $count1;
                                            echo $avail; 
                                            }; ?></b>
                                         </div>
                                  </div>
                                  <div class="col-xs-12 p-n">
                                        <div class="col-xs-6 p-n">
                                            Units with Trips
                                        </div>
                                        <div class="col-xs-6 p-n">
                                            <b><?php 
                                            if (isset($_POST['filter'])) {
                                            //$avail = $count - $count1;
                                            echo $count1; 
                                            }; ?></b></b>
                                         </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <?php  } }; ?>
                  <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
    </section>
<!-- End of Content -->


<!-- Modal Upload-->

        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="hideModalLabel">Add Etrip Ticket<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                    </div>
                    <div class="modal-body">
                      <div class="row"">
                                     <input id="userId" name="userId" type="hidden" value=<?php echo $_SESSION['userId']?>></input>
                                     <input id="userId" name="userId" type="hidden" value=<?php echo $_SESSION['userId']?>></input>
                                  <div class="form-group">
                                      <label class="col-xs-4 control-label">Trip Ticket No.:</label>
                                      <div class="col-xs-6">
                                        <?php   
                                            $sql = "SELECT * FROM db_trip_ticket" ;
                                            $result=mysqli_query($con,$sql);
                                            $row = mysqli_num_rows($result);
                                            $row++;
                                            echo '<input class="form-control" type ="text" name="ticket" id="ticket" value="'.$row.'" readonly />';
                                        ?>
                                         
                                      </div>
                                      <label class="col-xs-4 control-label">Date:</label>
                                      <div class="col-xs-4">
                                         <input class="form-control" type ="date" name="ticket_date" id="ticket_date" value="<?php echo date("Y-n-d"); ?>" />
                                      </div>
                                      <div class="col-xs-2">
                                         <input class="form-control" type ="text" name="ticket_time" id="ticket_time" value="<?php echo date("h:i:s"); ?>" />
                                      </div>
                                      <label class="col-xs-4 control-label">Pickup Location:</label>
                                      <div class="col-xs-6">
                                         <input class="form-control" type ="text" name="pickup" id="pickup"/>
                                      </div>
                                      <label class="col-xs-4 control-label">Client:</label>
                                      <div class="col-xs-6">
                                        <select class="form-control" id="client" name="client">
                                            <?php   
                                             $sql = "SELECT supplier_id, business_name, trade_name FROM db_customer" ;
                                             $result=mysqli_query($con,$sql);
                                                                                      
                                             if ($result->num_rows > 0) {
                                             while ($row = mysqli_fetch_assoc($result)) { ?>
                                             <option value="<?php echo $row['business_name']; ?>"><?php echo $row['business_name']; ?></option>";
                                             <?php } }; ?>
                                        </select>
                                      </div>
                                      <div class="col-xs-10">
                                      </div>
                                      <label class="col-xs-4 control-label">Account:</label>
                                      <div class="col-xs-6">
                                          <select class="form-control" id="account" name="account">
                                            <?php   
                                             $sql = "SELECT * FROM db_trip_rate" ;
                                             $result=mysqli_query($con,$sql);
                                                                                      
                                             if ($result->num_rows > 0) {
                                             while ($row = mysqli_fetch_assoc($result)) { ?>
                                                <option value="<?php echo $row['delivery']; ?>"><?php echo $row['delivery']. " - " .$row['city']; ?></option>
                                            <?php  } }; ?>
                                          </select>
                                      </div>
                                       <div class="col-xs-10">
                                      </div>
                                      <br><br>
                                      <label class="col-xs-4 control-label">Vehicle Plate No:</label>
                                      <div class="col-xs-6">
                                        <select class="form-control" id="veh_plate" name="plate">
                                         <?php   
                                             $sql = "SELECT vehicle_id, plate_no from db_vehicles_detail " ;
                                             $result=mysqli_query($con,$sql);
                                                                                      
                                             if ($result->num_rows > 0) {
                                             while ($row = mysqli_fetch_assoc($result)) { ?>
                                             <option value="<?php echo $row['plate_no']; ?>"><?php echo $row['plate_no']; ?></option>";
                                             <?php } }; ?>
                                        </select>    
                                      </div>
                                      <div class="col-xs-10">
                                      </div>
                                      <br><br>
                                      
                                      <label class="col-xs-4 control-label" >Name of Driver:</label>
                                      <div class="col-xs-6">
                                        <select class="form-control" id="driver" name="driver">
                                            <?php   
                                             $sql = "SELECT emp_id, first_name, last_name FROM db_hr_employees where job_title='Driver'" ;
                                             $result=mysqli_query($con,$sql);
                                
                                             if ($result->num_rows > 0) {
                                             while ($row = mysqli_fetch_assoc($result)) { ?>
                                             <option value="<?php echo $row['first_name']." ". $row['last_name']; ?>"><?php echo $row['first_name']." ". $row['last_name']; ?></option>";
                                             <?php } }; ?>
                                        </select>
                                      </div>
                                      <div class="col-xs-10">
                                      </div>
                                      <br><br>
                                      <label class="col-xs-4 control-label">Helper 1:</label>
                                      <div class="col-xs-6">
                                           <select class="form-control" id="helper1" name="helper1">
                                            <?php   
                                             $sql = "SELECT emp_id, first_name, last_name FROM db_hr_employees where job_title='Helper'" ;
                                             $result=mysqli_query($con,$sql);
                                                                                      
                                             if ($result->num_rows > 0) {
                                             while ($row = mysqli_fetch_assoc($result)) { ?>
                                             <option value="<?php echo $row['first_name']; ?>"><?php echo $row['first_name']." ". $row['last_name']; ?></option>";
                                             <?php } }; ?>
                                            </select>
                                      </div>
                                      <div class="col-xs-10">
                                      </div>
                                      <br><br>
                                      <label class="col-xs-4 control-label">Helper 2:</label>
                                      <div class="col-xs-6">
                                           <select class="form-control" id="helper2" name="helper2">
                                            <?php   
                                             $sql = "SELECT emp_id, first_name, last_name FROM db_hr_employees where job_title='Helper'" ;
                                             $result=mysqli_query($con,$sql);
                                                                                      
                                             if ($result->num_rows > 0) {
                                              while ($row = mysqli_fetch_assoc($result)) { ?>
                                             <option value="<?php echo $row['first_name']." ". $row['last_name']; ?>"><?php echo $row['first_name']." ". $row['last_name']; ?></option>";
                                             <?php } }; ?>
                                            </select>
                                       </div>
                                  </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group" role="group">
                            <button type="submit" id="submit" name="upload" class="btn bg-primary btn-wide btn-rounded"><i class="fa fa-check"></i>Add Etrip</button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                </div>
              </div>
            </form>
            <?php
            if (isset($_POST['upload'])) {
                $ticket = $_POST['ticket'];
                $ticket_date = $_POST['ticket_date'];
                $time = $_POST['ticket_time'];
                $plate = $_POST['plate'];
                $account = $_POST['account'];
                $client = $_POST['client'];
                $drivers = $_POST['driver'];
                $helper1 = $_POST['helper1'];
                $helper2 = $_POST['helper2'];
                $pd = $_POST['pickup'];
                $dl = $_POST['account'];
                
                $sql = "INSERT into db_trip_ticket (`vehicle_id`, `customer`, `account`, `trip_date`, `start_time`, `driver`, `helper1`, `helper2`,`pickup_loc`, `del_loc`  ) 
                VALUES ('$plate', '$client','$account', '$ticket_date', '$time', '$drivers', '$helper1', '$helper2','$pd','$dl')";
    
                if (mysqli_query($con, $sql)) {
                        echo '<script>window.location.href = "https://ops.northward.ph/home?GeneratedTrip";</script>';
                } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                }
                
            }
            ?>
        </div>


</div> <!- End Main Page>

<?php
require 'module/structure/rightNavBar.php';
require 'module/structure/wrapper_close.php';
require 'module/structure/commonjs.php';
?>


<?php  require 'module/structure/html_close.php';?>
