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
                        <h2 class="title">Employee List</h2>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li class="active"><a href="Customers">Employee List</a></li>
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
                                <th class="text-center">Employee Name</th>
                                <th class="text-center">Position</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = "SELECT * from db_hr_employees";
                             $result=mysqli_query($con,$sql);
                                //echo $sql;
                                if ($result->num_rows > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                            ?>            
                            <tr>
                              <td class="text-center"><?php echo $row['emp_id']; ?><input type="hidden" name="id" id="id" value="<?php echo $row['emp_id']; ?>"></td>
                              <td><a href="profile?id=<?php echo $row['emp_id']; ?>"><?php echo $row['first_name'].' '.$row['middle_name']. ' ' .$row['last_name']; ?></a></td>
                              <td class="text-center"><?php echo $row['job_title']; ?></td>
                              <td class="text-center"><?php echo $row['email']; ?></td>
                              <?php if ($row['active'] == '1') { ?>
                              <td class="w-10 text-center line-height-35">
                                    <a href="employees-list?id=<?php echo $row['emp_id']; ?>" onclick="return confirm('Change status to inactive employee?')" class="btn btn-success btn-xs" type="submit" name="active">Active</a>
                              </td>        
                              <?php } else { ?>
                              <td class="w-10 text-center line-height-35">
                                    <a href="employees-list?inid=<?php echo $row['emp_id']; ?>" onclick="return confirm('Change status to active employee?')" class="btn btn-danger btn-xs" type="submit" name="inactive">Inactive</a>    
                              </td>
                               <?php } ?> 
                              <td class="w-10 text-center line-height-35">
                                    <a href="employees-list?delete=<?php echo $row['emp_id']; ?>" onclick="return confirm('Delete this employee?')" class="btn btn-danger btn-xs" type="submit" name="delete">Delete</a>    
                              </td>
                            </tr>
                            <?php } }; ?>
                        </tbody>
                        <tfoot class="bg-primary-300">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Employee Name</th>
                                <th class="text-center">Position</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
              </div>
          </div>
        </div>

</div> <!- End Main Page>

<?php 
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "UPDATE `db_hr_employees` SET active='0' WHERE emp_id='$id'";
    $result=mysqli_query($con, $sql);
    echo '<script>window.location.href = "employees-list?StatusChanged?&'.$id.'" </script>';
}

if (isset($_GET['inid'])){
    $id = $_GET['inid'];
    $sql = "UPDATE `db_hr_employees` SET active='1' WHERE emp_id='$id'";
    $result=mysqli_query($con, $sql);
    echo '<script>window.location.href = "employees-list?StatusChanged?&'.$id.'" </script>';
}


if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM `db_hr_employees` WHERE emp_id='$id'";
    $result=mysqli_query($con, $sql);
    echo '<script>window.location.href = "employees-list?Deleted?&'.$id.'" </script>';
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
