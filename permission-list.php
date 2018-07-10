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
                        <h2 class="title">Permission List</h2>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li class="active"><a href="Customers">Permission List</a></li>
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
                                <th class="text-center">Permission</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = "SELECT * from db_hr_employees where job_title != 'Driver'";
                             $result=mysqli_query($con,$sql);
                                //echo $sql;
                                if ($result->num_rows > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                            ?>            
                            <tr>
                              <td class="text-center"><?php echo $row['emp_id']; ?></td>
                              <td><a href="profile?id=<?php echo $row['emp_id']; ?>"><?php echo $row['first_name'].' '.$row['middle_name']. ' ' .$row['last_name']; ?></a></td>
                              <td class="text-center"><?php echo $row['job_title']; ?></td>
                              <td class="text-center"><?php echo $row['email']; ?></td>
                              <?php 
                                $id = $row['emp_id'];
                                $user = "SELECT * from db_user where emp_id = $id";
                                //echo $user;
                                $result1=mysqli_query($con,$user);
                                $row1 = mysqli_fetch_assoc($result1);
                                //echo $row1['email'];
                                if ($row['email']==$row1['email']) { ?>
                                    <td class="w-10 text-center line-height-35">
                                        <div class="btn-group btn-group-justified">
                                            <a href="#" data-toggle="modal" data-target="#checkDetails<?php echo $row['emp_id']?>" class="btn collapse in edit-account" role="button"><i class="fa fa-check color-success font-size-18" aria-hidden="true"></i></a>
                                        </div>
                                    </td> 
                              <?php } else { ?>
                                   <td style="width:8%;" class="">
                                    <div class="btn-group btn-group-justified">
                                      <a href="#" data-toggle="modal" data-target="#userPermission<?php echo $row['emp_id']?>" class="btn collapse in edit-account" role="button"><i class="fa fa-pencil"> </i></a>
                                    </div>
                                   </td>
                              <?php }; ?>
                            </tr>
                            <!-- Modal Upload for Check Details-->
                                <div class="modal fade" id="checkDetails<?php echo $row['emp_id']?>" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
                                  <form class="form-horizontal" action="" method="post" name="check" enctype="multipart/form-data">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="hideModalLabel">Permission<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row">
                                                  <div class="col-md-10 col-md-offset-1">
                                                       <div class="form-group has-feedback">
                                                            <label for="name3">Employee No:</label>
                                                            <input type="text" class="form-control" id="id"name="id" value="<?php echo $row['emp_id']?>" readonly>
                                                            <span class="fa fa-hashtag form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="name3">Full Name</label>
                                                            <input type="text" class="form-control" id="name3" value="<?php echo $row['first_name'].' '.$row['middle_name']. ' '.$row['last_name']; ?>" readonly>
                                                            <span class="fa fa-user form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="exampleInputEmail3">Email address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail3" name="email" value="<?php echo $row['email']; ?>" readonly>
                                                            <span class="fa fa-envelope form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="exampleInputPassword3">Password</label>
                                                            <input type="password" class="form-control" id="myInput" name="password" placeholder="<?php echo $row1['pass']; ?>" readonly>
                                                            <span class="fa fa-key form-control-feedback"></span>
                                                        </div>
                                                  </div>    
                                              </div>
                                            </div>
                                        </div>    
                                    </div>
                                  </form>
                                </div>
                             <!-- Modal Upload for User Permission-->
                                <div class="modal fade" id="userPermission<?php echo $row['emp_id']?>" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
                                  <form class="form-horizontal" action="" method="post" name="permission" enctype="multipart/form-data">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="hideModalLabel">Permission<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row">
                                                  <div class="col-md-10 col-md-offset-1">
                                                       <input type="hidden" name="length" value="10">
                                                       <div class="form-group has-feedback">
                                                            <label for="name3">Employee No:</label>
                                                            <input type="text" class="form-control" name="id" value="<?php echo $row['emp_id']?>" readonly>
                                                            <span class="fa fa-hashtag form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="name3">Full Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $row['first_name'].' '.$row['middle_name']. ' '.$row['last_name']; ?>" readonly>
                                                            <span class="fa fa-user form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="exampleInputEmail3">Email address</label>
                                                            <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" readonly>
                                                            <span class="fa fa-envelope form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="exampleInputPassword3">User Role</label>
                                                            <select class="form-control" name="role">
                                                                <?php 
                                                                $user_role = "SELECT * from db_user_role" ;
                                                                $results=mysqli_query($con,$user_role);
                                                                
                                                                if ($results->num_rows > 0) {
                                                                    while($rows = mysqli_fetch_assoc($results)) {
                                                                ?>
                                                                <option value="<?php echo $rows['role_id']; ?>"><?php echo $rows['role_name']; ?></option>
                                                                <?php } }; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="exampleInputPassword3">Password</label>
                                                            <input type="text" class="form-control" id="password" name="password" placeholder="Please use strong password">
                                                            <span class="fa fa-key form-control-feedback"></span>
                                                            
                                                        </div>
                                                  </div>    
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="btn-group" role="group">
                                                    <button type="submit" id="submit_Permission" name="submitPermission" class="btn bg-primary btn-wide btn-rounded"><i class="fa fa-check"></i>Saved</button>
                                                </div>
                                                <!-- /.btn-group -->
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
                                <th class="text-center">Employee Name</th>
                                <th class="text-center">Position</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Permission</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
              </div>
          </div>
        </div>

</div> <!- End Main Page>

<?php 
    if(isset($_POST['submitPermission'])) {
        $user = mysqli_real_escape_string($con, $_POST['email']);
        $pass = mysqli_real_escape_string($con, $_POST['password']);
        $uhash = password_hash($user, PASSWORD_DEFAULT);
        $phash = password_hash($pass, PASSWORD_DEFAULT);
        $id = $_POST['id'];
        $date = date_create();
        $now = date_format($date, 'Y-m-d H:i:s');
        $role = $_POST['role'];
        
        $string_length=12;
        $characters ="bcdfghjklmnpqrstvwxyzCDFGHJKLMNPQRSTVWXYZ23456789";
        $uhash = '';
        $max = strlen($characters) - 1;
        for ($i = 0; $i < $string_length; $i++) {
            $uhash .= $characters[mt_rand(0, $max)];
          }
        
        
		 // Add to User Table
		$stmt1 = $con->prepare("INSERT INTO db_user (role_id, emp_id, email, pass, pass_hash, user_hash, join_date) VALUES (?,?,?,?,?,?,?)");
		$stmt1->bind_param("iisssss",$role, $id, $user, $pass, $phash, $uhash, $now);
		$stmt1->execute();

		echo '<script>window.location.href = "permission-list?PermissionAccessed?&'.$user.'" </script>';
			
	$stmt->close();
    mysqli_close($con); 
    } else {
        echo "mali";
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
