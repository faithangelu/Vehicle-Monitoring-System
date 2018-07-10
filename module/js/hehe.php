  <?php 
                    $db_ip = "127.0.0.1";
                    $db_user = "llmgco5_nclc_ops";
                    $db_pass = "abcd1234";
                    $db_table = "llmgco5_nclc_ops";
                    
                    
                    $con= mysqli_connect($dp_ip, $db_user, $db_pass, $db_table);
                    
                    // Check connection
                    if (mysqli_connect_errno())
                      {
                      echo "Failed to connect to MySQL; " . mysqli_connect_error();
                      }
                    
                    
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
                     
                      if(isset($_POST['unload'])) {
                       $date =  $_POST['date']; 
                       $id = $_POST['id'];
                       $sql = "UPDATE db_trip_ticket SET time_unloaded ='$date' WHERE ticket_id='$id'";
                       
                       if (mysqli_query($con, $sql)) {
                           $css = 'width: 80%; background-color: green';
                           $bar = '80% Complete';
                           $mes = 'Vehicle now unloaded.';
                        } else {
                            echo "Error updating record: " . mysqli_error($con);
                        }
                     }  
                     
                     if(isset($_POST['garage'])) {
                       $date =  $_POST['date']; 
                       $id = $_POST['id'];
                       $sql = "UPDATE db_trip_ticket SET time_to_garage='$date' WHERE ticket_id='$id'";
                       
                       if (mysqli_query($con, $sql)) {
                           $css = 'width: 90%; background-color: gray';
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