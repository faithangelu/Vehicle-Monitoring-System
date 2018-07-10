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
                        <h2 class="title">Receivables</h2>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fas fa-home"></i> Home</a></li>
                                 <li>Finance</li>
                                 <li class="active">Receivables</li>
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
                                         
                  </div>
                  <!-- /.row -->
            <br />
                  <div class="row p-10">
                     <div class="col-md-10 col-md-offset-1">
                        <?php require "module/structure/finance_counter.php"; ?>
                        <hr>
                        
                         <div class="panel">
                             <div class="panel-body p-20">
                                <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead class="bg-success-100">
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Client</th>
                                            <th class="text-center">Details</th>
                                        </tr>
                                    </thead>
                                    <?php  
                                        $sql = "SELECT * from db_customer" ;
                                        $result=mysqli_query($con,$sql);
                                        
                                        if ($result->num_rows > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                          <td style="width:10%;" class="text-center"><?php echo $row["supplier_id"]; ?></td>
                                          <td class="text-center"><?php echo $row["business_name"]; ?></a></td>
                                          <?php  
                                                $name = $row['business_name'];
                                                //echo $name;
                                                $sql1 = "SELECT * from db_trip_rate";// where customer='$name'" ;
                                                $result1=mysqli_query($con,$sql1);
                                                $row1 = $result1->num_rows; 
                                            ?>
                                          <?php //<td class="text-center"><a href="trip_rates?categ=&name=<?php echo $row["business_name"];  echo $row1; </a></td> ?>
                                          <td style="width:10%;" class="text-center">
                                                <div class="btn-group btn-group-justified">
                                                  <a href="receiveSummary?name=<?php echo $row["business_name"]; ?>&id=<?php echo $row["supplier_id"];?>" class="btn btn-success btn-xs" role="button">View Details</a></td>
                                                </div>
                                          </td>
                                        </tr>
                                    </tbody>
                                    <?php } };?>
                                    <tfoot class="bg-success-100">
                                        <tr>
                                          <th class="text-center">ID</th>
                                          <th class="text-center">Client</th>
                                          <th class="text-center">Details</th>
                                        </tr>
                                    </tfoot>
                                </table>
                              </div>
                          </div>
                      </div>
                    </div>


              </div>  <!-- /.container-fluid -->
    </section> <!-- End of Content -->

</div> <!- End Main Page>

<?php
require 'module/structure/rightNavBar.php';
require 'module/structure/wrapper_close.php';
require 'module/structure/commonjs.php';
?>

<!-- ======= DATA TABLES JS ====== -->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>
<script src="js/custom/finance/addaAccount.js"></script>

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
