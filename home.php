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
                    </div>
                    <div class="col-md-4">
                        <?php 
                        $id=$_SESSION['userId'];
                        //$sql = "SELECT db_trip_ticket.* FROM db_trip_ticket 
                        //JOIN db_hr_employees ON db_trip_ticket.driver = db_hr_employees.first_name
                        //JOIN db_user ON db_hr_employees.emp_id = db_user.emp_id
                        //where trip_date='$today' and db_user.emp_id='$userId'";
                        
                        $sql = "SELECT * from db_trip_ticket a JOIN db_hr_employees b 
                        ON a.helper2 = b.first_name JOIN db_user c ON c.emp_id=b.emp_id 
                        WHERE trip_date='$today' and c.userId='$id' and a.finished='0'";
                        
                         //echo $sql;
                         $result=mysqli_query($con,$sql);
                         if ($result->num_rows > 0) {
                         while($row = mysqli_fetch_assoc($result)) {
                         ?>
                            <div>
                            <div class="panel" >
                                <div class="panel-heading bg-info-600">
                                    <div class="panel-title">
                                        <h5>Trip Ticket: <b><?php echo $row['ticket_id']; ?> </b></h5>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                    <div class="form-group">
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
                                          <div class="col-xs-4" style="display:none" id="time">
                                             <input class="form-control" type ="text" id="d" name="date" value="<?php echo date("Y-n-d h:i:s"); ?>" readonly/>
                                          </div>
                                          <div class="col-xs-4" style="display:none" >
                                             <input class="form-control" type ="text" id="id" name="id" value="<?php echo $row['ticket_id']; ?>" readonly/>
                                          </div>
                                          <div class="col-xs-12">
                                              <button type="submit" class=".btn-lg form-control bg-danger " id="1" name="warehouse" style="margin: auto font-size: 24px; height:5 50px;">Warehouse</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                           <div class="col-xs-12" id="div2" style="display:none">
                                              <button class="form-control bg-primary s" id="2" name="loaded" >Loaded</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                           <div class="col-xs-12" id="div3" style="display:none">
                                              <button class="form-control bg-warning disabled" id="3" name="customer">Customer</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                          <div class="col-xs-12" id="div4" style="display:none">
                                          <label class="col-xs-4 control-label">OR/ Reference:</label>
                                          <div class="col-xs-8">
                                              <input class="form-control" type ="text" name="comment" id="comment"/>
                                          </div>      
                                              <button class="form-control disabled" style="background: green" id="4" name="und" >Unloaded</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                           <div class="col-xs-12" id="div5" style="display:none">
                                              <button class="form-control disabled" style="background: #bdc3c7" id="5" name="garage" >Garage</button>
                                          </div>
                                          <div class="col-xs-12">
                                              
                                          </div>
                                           <div class="col-xs-12" id="div6" style="display:none">
                                              <button class="form-control disabled" style="background: #f1c40f" id="6" name="end">End Time</button>
                                          </div>
                                      </div>
                                    </div>   
                                </div>
                               
                            </div>
                    </div>
                    <?php }  }; ?>
                    </div>
                    
                    
                    <!-- Column 2 -->
                    <div class="col-md-12">
                        <div>
                            <?php 
                            $email = $_SESSION['email'];
                            $sql = "SELECT * FROM db_user WHERE email='$email'";
                            $result=mysqli_query($con,$sql);
                            $row = mysqli_fetch_assoc($result);
                            //echo $sql;
                            //echo $row['role_id'];
                            if ($row['role_id'] != '5') {
                            ?>
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
                                                                <th class="text-center">Start Time</th>
                                                                <th class="text-center">Time to Warehouse</th>
                                                                <th class="text-center">Time to Loaded Area</th>
                                                                <th class="text-center">Time to Customer</th>    
                                                                <th class="text-center">Time Unloaded</th>    
                                                                <th class="text-center">Time to Garage</th>
                                                                <th class="text-center">End Time</th>
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
                                                              <td class="text-center"><a href="media/ticket_printing.php?id=<?php echo $row['ticket_id']; ?><?php echo $row['vehicle_id']; ?>"><?php echo $row['vehicle_id']; ?></a></td>
                                                              <td class="text-center"><?php echo $row['start_time']; ?></a></td>
                                                              <td class="text-center"><?php echo $row['time_warehouse']; ?></a></td>
                                                              <td class="text-center"><?php echo $row['time_loaded']; ?></div></td>
                                                              <td class="text-center"><?php echo $row['time_to_cust']; ?></td>
                                                              <td class="text-center"><?php echo $row['time_unloaded']; ?></td>
                                                              <td class="text-center"><?php echo $row['time_to_garage']; ?></td>
                                                              <td class="text-center"><?php echo $row['end_time']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                            <?php  } } ; ?>
                                                        <tfoot class="bg-primary-300">
                                                          <tr>
                                                              <th class="text-center">Ticket ID</th>
                                                                <th class="text-center">Vehicle Plate Number</th>
                                                                <th class="text-center">Start Time</th>
                                                                <th class="text-center">Time to Warehouse</th>
                                                                <th class="text-center">Time to Loaded Area</th>
                                                                <th class="text-center">Time to Customer</th>      
                                                                <th class="text-center">Time Unloaded</th>    
                                                                <th class="text-center">Time to Garage</th>
                                                                <th class="text-center">End Time</th>
                                                          </tr>
                                                        </tfoot>
                                                    </table>
                                                  </div>
                                              </div>
                                      </div>
                                    </div>
                                </div>
                                <?php 
                                echo '<script>setTimeout(function(){ window.location = "home";}, 5*60*1000);</script>';
                                } else { ?>
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
                                                                    
                                                                    <th class="text-center">Progress</th>
                                                                    
                                                                    <?php //<th class="text-center">Time</th> ?>
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
                                                                  <?php //<td class="text-center"><a href="media/ticket_printing.php?id=<?php echo $row['ticket_id']; ?<?php //echo $row['vehicle_id']; ?>
                                                                  <td class="text-center">
                                                                    <div class="progress text-left">
                                                                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" id="bar" style=""></div>
                                                                    <i class="fas fa-truck fa-flip-horizontal"></i>
                                                                    </div>
                                                                  </td>
                                                                  <?php //<td class="text-center"><div class="status"></div></td> ?>
                                                                  <?php //<td class="text-center"><div class="time"></div></td> ?>
                                                                </tr>
                                                            </tbody>
                                                                <?php  } } ; ?>
                                                            <tfoot class="bg-primary-300">
                                                              <tr>
                                                                  <?php //<th class="text-center">Vehicle Category</th> ?>
                                                                  <th class="text-center">Progress</th>
                                                                  <?php //<th class="text-center">Status</th> ?>
                                                                  <?php //<th class="text-center">Time</th> ?>
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
                            <?php }; ?>
                            
             
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

<script>
 $(document).ready(function(){
    
        //1st
        $("#1").click(function(){
            var date = $("#d").val();
            var msg = "Vehicle now on warehouse.";
            var data = { 
                'date': $("#d").val() ,
                'id': $("#id").val()
            };
            alert(msg);
            $.ajax({
                type: "POST",
                url: "module/js/warehouse_js.php",
                data: data, 
                dataType: "html",
                success: function(result){
                    $("#bar").css({"width": "20%", "background-color" : "red"});
                    $("#bar").text("20% Complete");
                    $(".status").text(msg);
                    $(".time").text(result); 
                    $("#1").hide();
                    $('#div2').css({"display": "block"});
                        $("#2").click(function(){
                                //$("#d").load( "module/js/datetime.php" );
                                $.get( "module/js/datetime.php", function( data ) {
                                    var date = {
                                        'date' : data,
                                        'id': $("#id").val()
                                    }
                                    var msg1 = "Vehicle loaded.";
                                    console.log(data);
                                    alert(msg1);
                                    $.ajax({
                                        type: "POST",
                                        url: "module/js/loaded_js.php",
                                        data: date, 
                                        dataType: "html",
                                        success: function(result){
                                            console.log(result);
                                            $("#bar").css({"width": "40%", "background-color" : "blue"});
                                            $('#bar').text("40% Complete");
                                            $('.status').text(msg1);
                                            $(".time").text(result); 
                                            $("#2").hide();
                                            $('#div3').css({"display": "block"});
                                                //3rd
                                                $("#3").click(function(){
                                                     $.get( "module/js/datetime.php", function( data ) {
                                                        var date = {
                                                            'date' : data,
                                                            'id': $("#id").val()
                                                        }
                                                        var msg2 = "On the way to customer.";
                                                        console.log(data);
                                                        alert(msg2);
                                                        $.ajax({
                                                            type: "POST",
                                                            url: "module/js/customer_js.php",
                                                            data: date, 
                                                            dataType: "html",
                                                            success: function(result){
                                                                console.log(result);
                                                                $("#bar").css({"width": "60%", "background-color" : "orange"});
                                                                $('#bar').text("60% Complete");
                                                                $('.status').text(msg2);
                                                                $(".time").text(result); 
                                                                $("#3").hide();
                                                                $('#div4').css({"display": "block"});
                                                                //4th
                                                                     $("#4").click(function(){
                                                                         $.get( "module/js/datetime.php", function( data ) {
                                                                            var date = {
                                                                                'date' : data,
                                                                                'id': $("#id").val(),
                                                                                'comment': $("#comment").val()
                                                                            }
                                                                            var msg3 = "Unloaded.";
                                                                            console.log(data);
                                                                            alert(msg3);
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url: "module/js/unloaded_js.php",
                                                                                data: date, 
                                                                                dataType: "html",
                                                                                success: function(result){
                                                                                    console.log(result);
                                                                                    $("#bar").css({"width": "80%", "background-color" : "green"});
                                                                                    $('#bar').text("80% Complete");
                                                                                    $('.status').text(msg3);
                                                                                    $(".time").text(result); 
                                                                                    $("#4").hide();
                                                                                    $('#div5').css({"display": "block"});
                                                                                        //5th 
                                                                                        $("#5").click(function(){
                                                                                             $.get( "module/js/datetime.php", function( data ) {
                                                                                                var date = {
                                                                                                    'date' : data,
                                                                                                    'id': $("#id").val()
                                                                                                }
                                                                                                var msg4 = "On the way to garage.";
                                                                                                console.log(data);
                                                                                                alert(msg4);
                                                                                                $.ajax({
                                                                                                    type: "POST",
                                                                                                    url: "module/js/garage_js.php",
                                                                                                    data: date, 
                                                                                                    dataType: "html",
                                                                                                    success: function(result){
                                                                                                        console.log(result);
                                                                                                        $("#bar").css({"width": "90%", "background-color" : "gray"});
                                                                                                        $('#bar').text("90% Complete");
                                                                                                        $('.status').text(msg4);
                                                                                                        $(".time").text(result); 
                                                                                                        $("#5").hide();
                                                                                                        $('#div6').css({"display": "block"});
                                                                                                            //6th 
                                                                                                             $("#6").click(function(){
                                                                                                                 $.get( "module/js/datetime.php", function( data ) {
                                                                                                                    var date = {
                                                                                                                        'date' : data,
                                                                                                                        'id': $("#id").val(),
                                                                                                                        'finished' : '1'
                                                                                                                    }
                                                                                                                    var msg5 = "End time.";
                                                                                                                    console.log(data);
                                                                                                                    alert(msg5);
                                                                                                                    $.ajax({
                                                                                                                        type: "POST",
                                                                                                                        url: "module/js/endtime_js.php",
                                                                                                                        data: date, 
                                                                                                                        dataType: "html",
                                                                                                                        success: function(result){
                                                                                                                            console.log(result);
                                                                                                                            $("#bar").css({"width": "100%", "background-color" : "dark-yellow"});
                                                                                                                            $('#bar').text("100% Complete");
                                                                                                                            $('.status').text(msg5);
                                                                                                                            $(".time").text(result); 
                                                                                                                            $("#6").hide();
                                                                                                                            window.location.href = "https://ops.northward.ph/home?FinishedTrip";
                                                                                                                            
                                                                                                                        }
                                                                                                                    });
                                                                                                                });    
                                                                                                            
                                                                                                            });        
                                                                                    
                                                                                                        
                                                                                                    }
                                                                                                });
                                                                                            });    
                                                                                        
                                                                                        });        
                                                                                    
                                                                                }
                                                                            });
                                                                        });    
                                                                    });        
                                                                    
                                                            }
                                                        });
                                                    });    
                                                
                                                });                
                                        }
                                    });
                                });    
                            });    
                }
            });    
        });
    });
</script>
<!-- ========== PAGE JS FILES ========== -->
<script src="js/prism/prism.js"></script>
<script src="js/waypoint/waypoints.min.js"></script>
<script src="js/counterUp/jquery.counterup.min.js"></script>
<script src="js/icheck/icheck.min.js"></script>
<script src="js/bootstrap-tour/bootstrap-tour.js"></script>
<script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>


<?php  require 'module/structure/html_close.php';?>
