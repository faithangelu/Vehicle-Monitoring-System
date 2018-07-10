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
                                <th class="text-center">User Permission</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = "SELECT * from db_hr_employees" ;
                                $result=mysqli_query($con,$sql);
                                
                                if ($result->num_rows > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                            ?>            
                            <tr>
                              <td class="text-center"><?php echo $row['emp_id']; ?></td>
                              <td><a href="profile?id=<?php echo $row['emp_id']; ?>"><?php echo $row['first_name'].' '.$row['middle_name']. ' '.$row['last_name']; ?></a></td>
                              <td class="text-center"><?php echo $row['job_title']; ?></td>
                              <td class="text-right"><?php echo $row['email']; ?></td>
                               <td style="width:8%;" class="">
                                    <div class="btn-group btn-group-justified">
                                      <a href="#" data-toggle="modal" data-target="#userPermission<?php echo $row['emp_id']?>" class="btn collapse in edit-account" role="button"><i class="fa fa-pencil"> </i></a>
                                    </div>
                               </td>
                            </tr>
                             <!-- Modal Upload-->

                                <div class="modal fade" id="userPermission<?php echo $row['emp_id']?>" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
                                  <form class="form-horizontal" action="user/nc_register.php" method="post" name="permission" enctype="multipart/form-data">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="hideModalLabel">Employee No: <b><?php echo $row['emp_id']?></b><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row">
                                                  <div class="col-md-10 col-md-offset-1">
                                                        <div class="form-group has-feedback">
                                                            <label for="name3">Full Name</label>
                                                            <input type="text" class="form-control" id="name3" value="<?php echo $row['first_name'].' '.$row['middle_name']. ' '.$row['last_name']; ?>" readonly>
                                                            <span class="fa fa-pencil form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="exampleInputEmail3">Email address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail3" name="usrname" value="<?php echo $row['email']; ?>">
                                                            <span class="fa fa-envelope-o form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="exampleInputPassword3">Password</label>
                                                            <input type="password" class="form-control" id="myInput" name="pasword" placeholder="Enter Strong Password">
                                                            <span class="fa fa-key form-control-feedback"></span>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="switch">
                                                              <input type="checkbox">
                                                              <span class="slider"></span>
                                                            </label>
                                                        </div>
                                                  </div>    
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                                                    <button type="submit" id="submit" name="submitPermission" class="btn bg-primary btn-wide btn-rounded"><i class="fa fa-check"></i>Upload</button>
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
                                <th class="text-center">User Permission</th>
                                
                            </tr>
                        </tfoot>
                    </table>
                  </div>
              </div>
          </div>
        </div>

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
<link href="bootstrap.css" rel="stylesheet">
<link href="bootstrap-switch.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap-switch.js"></script>

<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<script>
/* function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
} */
 
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

$("[name='my-checkbox']").bootstrapSwitch();

</script>

<?php  require 'module/structure/html_close.php';?>
