


 <!-- ========== LEFT SIDEBAR ========== -->
 <div class="left-sidebar fixed-sidebar bg-black-300 box-shadow tour-three">
     <div class="sidebar-content">

         <div class="sidebar-nav">
             <ul class="side-nav color-gray">
                <?php
                $id = $_SESSION['userId'] ;
                $get_detail = "SELECT * from db_user where userId='$id'";
                $result=mysqli_query($con,$get_detail);
                $row = mysqli_fetch_assoc($result);
                $id = $row['role_id'];
                           
                $dashboard = '<li><a href="home"><i class="far fa-tachometer fa-fw"></i> <span>Dashboard</span></a></li>';    
                $customer_mngt = '<li  class="has-children">
                                 <a href="#"><i class="far fa-child  fa-fw"></i> <span>Customer Management </span><i class="far fa-angle-right arrow"></i></a>
                                 <ul class="child-nav">
                                 <li><a href="add-customer"><i class="far fa-plus"></i> <span>Add New Customer</span></a></li>
                                 <li><a href="customers"><i class="far fa-list-alt"></i> <span>Customer list</span></a></li> 
                                 </ul>
                                 </li>';
                $vehicle_mngt = '<li  class="has-children">
                                <a href="#"><i class="far fa-truck  fa-fw"></i> <span>Vehicle Management </span><i class="far fa-angle-right arrow"></i></a>
                                <ul class="child-nav">
                                <li><a href="add-vehicle"><i class="far fa-plus"></i> <span>Add New Vehicle</span></a></li>
                                <li><a href="vehicles"><i class="far fa-list-alt"></i> <span>Vehicles list</span></a></li>
                                </ul>
                                </li>';    
                
                $operations_mngt = '<li  class="has-children">
                                    <a href="#"><i class="far fa-industry  fa-fw"></i> <span>Operations Management </span><i class="far fa-angle-right arrow"></i></a>
                                    <ul class="child-nav">
                                    <li><a href="operations"><i class="far fa-calendar-check"></i> <span>Vehicle Dispatch</span></a></li>
                                    <li><a href="trip_list"><i class="far fa-list-alt"></i> <span>Trip list</span></a></li>
                                    </ul>
                                    </li>';  
                                    
                $admin = '<li class="has-children">
                        <a href="#"><i class="far fa-clipboard fa-fw"></i> <span>Admin</span> <i class="far fa-angle-right arrow"></i></a>
                        <ul class="child-nav">
                        <li><a href="add-employees"><i class="far fa-plus"></i> <span>Add New Employee</span></a></li>
                        <li><a href="employees-list"><i class="far fa-list-alt"></i> <span>Personnel List</span></a></li>
                        <li><a href="permission-list"><i class="far fa-lock"></i> <span>User Permission</span></a></li>
                        <li><a href="addAnnouncement"><i class="far fa-bullhorn"></i> <span>Add Announcements</span></a></li>
                        </ul>
                        </li>';                 
                        //<li><a href="#"><i class="far fa-list"></i> <span>License Monitor</span></a></li> 
                        
                $finance = '<li class="has-children">
                            <a href="#"><i class="far fa-ruble-sign fa-fw"></i> <span>Finance</span> <i class="far fa-angle-right arrow"></i></a>
                            <ul class="child-nav">
                            <li><a href="receivables"><i class="far fa-briefcase"></i> <span>Receivables</span></a></li>
                            <li><a href="trip_rates"><i class="far fa-money-bill-alt"></i> <span>Trip Rates</span></a></li>
                            </ul>
                            </li>';      
                            
                            '<li class="has-children">
                            <a href="#"><i class="far fa-cog fa-fw fa-spin"></i> <span></span> <i class="far fa-angle-right arrow"></i></a>
                            <ul class="child-nav">';
                $info = '<li><a href="company-details"><i class="far fa-briefcase"></i> <span>Company Info</span></a></li>';
                $manual= '<li><a href="manual.pdf"><i class="far fa-question-circle"></i> <span>Help</span></a></li>';
                            '<li><a href="bank-details"><i class="far fa-envelope"></i> <span>Finance Settings</span></a></li>
                            </ul>
                            </li>';                             
                                 
                if ( $id == '1' || $id == '6' ) { 
                // SYSTEM ADMINISTRATOR 
                echo $dashboard;
                echo $customer_mngt;
                echo $vehicle_mngt;
                echo $operations_mngt;
                echo $admin;
                echo $finance ;
                echo $info;
                echo $manual; 
                 
                } else if ($id == '2' || $id == '7') { 
                // OPSMAN
                echo $dashboard;
                echo $customer_mngt;
                echo $vehicle_mngt;
                echo $info;
                echo $manual;
                 
                } else if ($id == '3') { 
                //ADMIN
                echo $dashboard;
                echo $customer_mngt;
                echo $operations_mngt;
                echo $info;
                echo $manual;
                 
                } else if ($id == '4') { 
                //FINANCE                
                echo $dashboard;
                echo $admin;
                echo $finance;
                echo $info;
                echo $manual; 
                
                } else if ($id == 5) { 
                //DRIVERS
                echo $dashboard;
                echo $info;
                echo $manual; 
                
                }; ?>
                
               <!-- /.side-nav -->
            </ul>
         </div>
         <!-- /.sidebar-nav -->
     </div>
     <!-- /.sidebar-content -->
 </div>
 <!-- /.left-sidebar -->
