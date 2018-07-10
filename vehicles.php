<?php
require_once 'page_load.php';
require 'module/structure/html_open.php';
require 'module/structure/head.php';
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
                        <h2 class="title">Vehicle Management</h2>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-6 right-side">
                         <button class="btn bg-primary " type="button" id="menu14" d aria-haspopup="true" aria-expanded="false">
                           <a href="#" data-toggle="modal" data-target="#uploadModal1">Add Vehicle</a>
                           <i class="fa fa-plus"></i>
                         </button>
                         
                    </div>
                    <!-- /.col-sm-6 text-right -->
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li class="active"><a href="vehicles">Vehicle Management</a></li>
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

        <?php require 'module/structure/counter.php'; ?>    
<!-- /.row -->
<hr>
                  
             <div class="panel">

                 <div class="panel-body p-20">
                    <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="bg-info-300">
                            <tr>
                                <th class="text-center">Vehicle Plate Number</th>
                                <th class="text-center">Vehicle Make</th>
                                <th class="text-center">Vehicle Category</th>
                                <th class="text-center">OR CR</th>
                                <th class="text-center">Remarks</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                $sql = "SELECT * from db_vehicles_detail" ;
                                $result=mysqli_query($con,$sql);
                                
                                if ($result->num_rows > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                              <td class="text-center"><?php echo $row['plate_no']; ?></td>
                              <td class="text-center"><?php echo $row['make']; ?></a></td>
                              <?php
                              if ($row['vehicle_category'] =='0') {
                                  echo '<td class="text-center">4 wheeler</td>';
                              } else if ($row['vehicle_category'] =='1') {
                                  echo '<td class="text-center">6 wheeler</td>';
                              } else if ($row['vehicle_category'] =='2') {
                                  echo '<td class="text-center">10 wheeler</td>';
                              } else if ($row['vehicle_category'] =='3'){
                                  echo '<td class="text-center">Tractor Head</td>';
                              } else {
                                  echo '<td class="text-center">Low Bed</td>';
                              }
                              ?>
                              <td class="text-center"><a href="module/upload/<?php echo $row['file_path']; ?>"><?php echo $row['file_path']; ?></td>
                              <td class="text-center"><?php echo $row['remarks']; ?></td>
                              <?php if ($row['status'] == '1') { ?>
                              <td class="w-10 text-center line-height-35">
                                    <a href="vehicles?id=<?php echo $row['vehicle_id']; ?>" onclick="return confirm('Inactive vehicle?')" class="btn btn-success btn-xs" type="submit" name="active">Active</a>
                              </td>        
                              <?php } else { ?>
                              <td class="w-10 text-center line-height-35">
                                    <a href="vehicles?inid=<?php echo $row['vehicle_id']; ?>" onclick="return confirm('Active vehicle?')" class="btn btn-danger btn-xs" type="submit" name="inactive">Inactive</a>    
                              </td>
                            </tr>
                            <?php } };
                            }; ?> 
                        </tbody>
                        <tfoot class="bg-info-300">
                            <tr>
                                <th class="text-center">Vehicle Plate Number</th>
                                <th class="text-center">Vehicle Make</th>
                                <th class="text-center">Vehicle Category</th>
                                <th class="text-center">OR CR</th>
                                <th class="text-center">Remarks</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
              </div>
          </div>
        </div>
<?php 
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "UPDATE `db_vehicles_detail` SET status='0' WHERE vehicle_id='$id'";
    $result=mysqli_query($con, $sql);
    echo '<script>window.location.href = "vehicles?AddedVehicle?&'.$id.'" </script>';
}

if (isset($_GET['inid'])){
    $id = $_GET['inid'];
    $sql = "UPDATE `db_vehicles_detail` SET status='1' WHERE vehicle_id='$id'";
    $result=mysqli_query($con, $sql);
    echo '<script>window.location.href = "vehicles?AddedVehicle?&'.$id.'" </script>';
}
?>

</div> <!- End Main Page>

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
<?php require 'module/structure/datatablecss.php'; // This is making problems in display ?>


<script>
$(document).ready(function() {
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
} );
</script>

<?php  require 'module/structure/html_close.php';?>
