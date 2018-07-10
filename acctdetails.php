<?php
require_once 'page_load.php';
require 'module/structure/html_open.php';
require 'module/structure/head.php';
?>
<!-- ========== PAGE STYLES ========== -->
<link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css" />

<?php
// Page CSS
require 'module/structure/head_close.php';
require 'module/structure/topNavBar.php';
require 'module/structure/wrapper_open.php';
require 'module/structure/leftNavBar.php';
?>

<div class="main-page">




    <!-- Title Bar -->
            <div class="container-fluid">
                <div class="row page-title-div">
                    <div class="col-sm-6">
                        <h2 class="title">Account Details</h2>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
                                 <li>Finance</li>
                                 <li><a href="accounts">Accounts</a></li>
							                   <li class="active"><a href="acctdetails">Account Details</a></li>
						            </ul>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      <!-- End Title Bar -->

<?php
$sql2 = "SELECT account_name FROM accounts WHERE account_id = " . $_GET['acct'];
$result2 = $con->query($sql2);
if (!$result2) {
  exit();
}
$value = $result2->fetch_array(MYSQLI_ASSOC);
 ?>


      <div class="row p-10">
         <div class="col-md-10 col-md-offset-1">

             <div class="panel">
                 <div class="panel-heading">
                     <div class="panel-title">
                         <h3><?php echo $_GET['acct'] . " - " . strtoupper($value['account_name']); ?></h3>
                     </div>
                 </div>

                 <div class="panel-body p-20">
                    <table id="projectTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">Transaction Date</th>
                                <th class="text-center">Transaction ID</th>
                                <th class="text-center">Description </th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Account Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $balance = 0;
                        $sql3 = "
                        SELECT
                        gl_tran_details.tran_id,
                        gl_tran_details.account,
                        gl_tran_details.amount,
                        gl_tran.trans_date,
                        gl_tran.trans_details
                        FROM gl_tran_details
                        INNER JOIN gl_tran
                        ON gl_tran_details.tran_id = gl_tran.tran_id
                        WHERE gl_tran_details.account = " . $_GET['acct'] . "
                        ORDER BY gl_tran.trans_date ASC";
                        $result3 = $con->query($sql3) or trigger_error($con->error."[$sql3]");
                        while($row = $result3->fetch_array(MYSQLI_BOTH)) {
                         $balance = $balance + $row[2];

                            echo '<tr>';
                            echo '  <td class="text-center">' . $row[3] . '</td>'; // Date
                            echo '  <td class="text-center"><a href="journal-record?from=' .  $_GET['acct'] . '&trans=' .  $row[0] . '">' . $row[0] . '</a></td>'; // Transaction ID
                            echo '  <td class="text-center"><a href="journal-record?from=' .  $_GET['acct'] . '&trans=' .  $row[0] . '">' . $row[4] . '</a></td>'; // Transaction
                            echo '  <td class="text-right">' . number_format($row[2],2,".",",") . '</td>'; // Amount
                            echo '  <td class="text-right">' . number_format($balance,2,".",",") . '</td>'; // Balance
                            echo '</tr>';
                          }
                        ?>


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

  <!-- ======= DATA TABLES JS ====== -->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


  <script>
  $(document).ready(function() {
    $('#projectTable').DataTable({
      dom: 'Bfrtip',
      lengthMenu: [
          [ 20, 40, 80, -1 ],
          [ '20 rows', '40 rows', '80 rows', 'Show all' ]
        ],

      buttons: [
        'pageLength',
        'copy',
        'csv',
        {
          extend: 'excelHtml5',
          title: 'Data export'
        },
        {
          extend: 'pdfHtml5',
          title: 'Data export'
        },
        'print'
        ]

    });
  } );
  </script>

<?php  require 'module/structure/html_close.php';?>
