<?php
require_once 'page_load.php';
require 'module/structure/html_open.php';
require 'module/structure/head.php';
require 'module/structure/datatablecss.php'; // This is making problems in display
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
                        <h2 class="title">Trip List</h2>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li class="active"><a href="trip_list">Trip List</a></li>
						            </ul>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      <!-- End Title Bar -->

      <div class="row p-10">
         <div class="col-md-10 col-md-offset-1">

             <div class="panel">

                 <div class="panel-body p-20">
                    <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-primary-300">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Vehicle Plate</th>
                                <th class="text-center">Customer</th>
                                <th class="text-center">Account</th>
                                <th class="text-center">Trip Date</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = "SELECT * from db_trip_ticket";
                             $result=mysqli_query($con,$sql);
                                //echo $sql;
                                if ($result->num_rows > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                            ?>            
                            <tr>
                              <td class="text-center"><?php echo $row['ticket_id']; ?></td>
                              <td class="text-center"><?php echo $row['vehicle_id']; ?></td>
                              <td class="text-center"><?php echo $row['customer']; ?></td>
                              <td class="text-center"><?php echo $row['account']; ?></td>
                              <td class="text-center"><?php echo $row['trip_date']; ?></td>
                              <?php if ($row['finished'] == '1' ) { ?>
                              <td class="text-center">
                                  <button type="button" class="btn btn-success btn-xs btn-labeled">Finished Trip<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>    
                              </td> 
                              <?php } else { ?>
                              <td class="w-10 text-center line-height-35">
                                    <button class="btn btn-info btn-xs btn-labeled" data-toggle="modal" data-target="#editTrip<?php echo $row['ticket_id']?>" type="button">Edit Trip<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                              </td>
                              <?php } ?>
                            </tr>
                            
                            <!-- Modal Upload for Check Details-->
                                <div class="modal fade" id="editTrip<?php echo $row['ticket_id']?>" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
                                  <form class="form-horizontal" action="" method="post" name="permission" enctype="multipart/form-data">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="hideModalLabel">Edit Trip<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row">
                                                  <div class="col-md-10 col-md-offset-1">
                                                       <div class="form-group has-feedback">
                                                            <label for="name3">Trip Date:</label>
                                                            <input type="hidden" class="form-control" id="id" name="ticket_id" value="<?php echo $row['ticket_id']?>">
                                                            <input type="date" class="form-control" id="id" name="edit_date" value="<?php echo $row['trip_date']?>">
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="name3">Driver:</label>
                                                            <input type="text" class="form-control" id="edit_driver" name="edit_driver" value="<?php echo $row['driver']; ?>">
                                                            
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="exampleInputEmail3">Helper 1:</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail3" name="edit_helper1" value="<?php echo $row['helper1']; ?>">
                                                            
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="exampleInputPassword3">Helper 2:</label>
                                                            <input type="text" class="form-control" id="myInput" name="edit_helper2" value="<?php echo $row['helper2']; ?>">
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="btn-group" role="group">
                                                                <button type="submit" id="editTrip" name="editTrip" class="btn bg-primary btn-wide btn-rounded"><i class="fa fa-check"></i>Update Trip</button>
                                                            </div>
                                                            <!-- /.btn-group -->
                                                        </div>
                                                  </div>    
                                              </div>
                                            </div>
                                        </div>    
                                    </div>
                                  </form>
                                </div>
                                <?php } }; ?>
                        </tbody>
                        <tfoot class="bg-primary-300">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Vehicle Plate</th>
                                <th class="text-center">Customer</th>
                                <th class="text-center">Account</th>
                                <th class="text-center">Trip Date</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
              </div>
          </div>
        </div>

</div> <!- End Main Page>

<?php 
   if(isset($_POST['editTrip'])) {
       $id = $_POST['ticket_id'];
       $date = $_POST['edit_date'];
       $driver = $_POST['edit_driver'];
       $helper1 = $_POST['edit_helper1'];
       $helper2 = $_POST['edit_helper2'];
       
       $sql = "UPDATE `db_trip_ticket` SET `trip_date`='$date',`driver`='$driver',`helper1`='$helper1',`helper2`='$helper2' WHERE ticket_id='$id' ";
       $query = mysqli_query($con, $sql);
       echo sql;
       if($query== 'TRUE') {
        echo '<script>window.location.href = "trip_list?EditedTrip&id='.$id.'" </script>'; 
        //echo $sql;
       } else {
        echo '<script>window.location.href = "trip_list?SomethingWrong&id='.$id.'" </script>';
        //echo $sql;
       }
   }
?>


<?php
require 'module/structure/rightNavBar.php';
require 'module/structure/wrapper_close.php';
require 'module/structure/commonjs.php';
?>

<script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>

<!-- ======= DATA TABLES JS ====== -->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<link href="bootstrap.css" rel="stylesheet">
<link href="bootstrap-switch.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap-switch.js"></script>


<script>

$('#projectTable').DataTable({
    dom: 'Bfrtip',
    lengthMenu: [
        [ 10, 20, 40, -1 ],
        [ '10 rows', '20 rows', '40 rows', 'Show all' ]
      ],

    buttons: [
      'pageLength'
      ]

  });


</script>

<?php  require 'module/structure/html_close.php';?>
