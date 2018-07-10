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
                        <h2 class="title">Chart of Accounts</h2>
                    </div>

                    <!-- Button -->
                    <div class="col-sm-6 right-side">
                      <div class="dropdown pull-right">
                         <button class="btn bg-primary dropdown-toggle" type="button" id="menu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bars"></i> Account Settings
                           <span class="caret"></span>
                         </button>
                         <ul class="dropdown-menu bg-grey" aria-labelledby="menu14">
                               <li><a href="#" data-toggle="modal" data-target="#addModal">Add Account</a></li>
                               <li><a href=".edit-account" data-toggle="collapse">Edit Account</a></li>
                               <li><a href=".hide-account" data-toggle="collapse">Hide Account</a></li>
                               <li><a href="#" data-toggle="modal" data-target="#uploadModal">Upload Accounts</a></li>
                         </ul>
                       </div>
                    </div>
                  </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
                                 <li>Finance</li>
							                   <li class="active"><a href="accounts">Accounts</li>
						            </ul>
                    </div>
                </div>
            </div>
<!-- End Title Bar -->

<!-- ========== Content ========== -->

      <section class="section">
          <div class="container-fluid">

            <?php
              $sql0 = "SELECT * FROM account_type ORDER BY type_id ASC";
              $result0 = $con->query($sql0);
              while($row0 = $result0->fetch_array(MYSQLI_BOTH)) {
                $typeId = $row0["type_id"];
                $type = $row0["type"];
                $roman = $row0["roman"];
                $color = $row0["color"];

                echo '<div class="panel-group acc-panels" id="collapse" role="tablist" aria-multiselectable="false">';
                echo '<div class="panel ">';
                echo '<div class="panel-heading ' . $color . '" role="tab" id="heading2One">';
                echo '<h4 class="panel-title">';
                echo '<a role="button" data-toggle="collapse" href="#' . $type . '" aria-expanded="true" aria-controls="liability">';
                echo '<div class="row">';
                echo '<div class="col-md-1"><h4 class="text-center">' . $roman . '</h4></div>';
                echo '<div class="col-md-8"><h4 class="text-left">' . $type . '</h4></div>';
                echo '<div class="col-md-2"><h4 class="text-right">' . $totAmount . 'Amount</h4></div>';
                echo '<div class="col-md-1"><span class="caret"></span></div>';
                echo '</div>';
                echo '</a>';
                echo '</h4>';
                echo '</div>';

                echo '<div id="' . $type . '" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2One">';
                echo '        <div class="panel-body">';
                echo '          <table class="table-striped table-bordered">';
                echo '          <tbody>';

                              $sql = "SELECT * FROM accounts WHERE account_type='" . $typeId . "' ORDER BY account_id";
                              $result = $con->query($sql);
                              while($row = $result->fetch_assoc()) {
                                $acctNo = $row["account_id"];
                                $acctName = $row["account_name"];

                                $sql2 = "SELECT SUM(amount) FROM gl_tran_details WHERE account = " . $row['account_id'];
                                $result2 = $con->query($sql2);
                                $value = $result2->fetch_array(MYSQLI_BOTH);

                                echo '<tr>';
                                echo '<td style="width:20%;" class="text-center"><a href="acctdetails?acct=' . $row["account_id"] . '" >' . $row["account_id"] . '</a></td>';
                                echo '<td style="width:50%;" class="text-left"><a href="acctdetails?acct=' . $row["account_id"] . '">' . $row["account_name"] . '</a></td>';
                                echo '<td style="width:22%;" class="text-right">' . money_format("%(#14n", $value[0]) . '</td>';
                                echo '<td style="width:8%;" class="">
                                      <div class="btn-group btn-group-justified">
                                        <a href="editaccount?acct=' . $row["account_id"] . '" class="btn collapse in edit-account" role="button"><i class="fa fa-pencil"> </i></a>
                                        <a href="hideaccount?acct=' . $row["account_id"] . '" class="btn collapse in hide-account" role="button"><i class="fa fa-trash"> </i></a>
                                      </div>
                                      </td>';
                                echo '</tr>';
                                };

                  echo '        </tbody>';
                  echo '        </table>';
                  echo '</div></div></div></div>';
          }
          ?>

          </div>

      </section>
<!-- End of Section -->

<!-- Modal Add Account-->

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addModalLabel">Add an Account <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
            </div>
            <div class="modal-body">
                <form id="userForm" method="post" class="form-horizontal" >
                  <div class="form-group">
                      <label class="col-xs-5 control-label">Account Type</label>
                      <div class="col-xs-5">
                        <select class="form-control" name="acc_type" id="acc_type">
                          <?php
                            $sql = "SELECT * FROM account_type";
                            $result = $con->query($sql);

                            while($row = $result->fetch_assoc()) {
                              echo "<option value=" . $row["type_id"] . ">" . $row["type"] . "</option>\r\n" ;
                            };
                          ?>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-5 control-label">Account Name</label>
                      <div class="col-xs-5">
                          <input type="text" class="form-control" name="acc_name" id="acc_name" />
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-5 control-label">Account Code</label>
                      <div class="col-xs-5">
                          <input type="text" class="form-control" name="acc_code" id="acc_code" />
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-5 control-label">Parent Account</label>
                      <div class="col-xs-5">
                        <input class="form-control" list="parent_Account" name="acc_parent" id="acc_parent" /></label>
                          <datalist id="parent_Account">
                            <?php
                              $sql = "SELECT * FROM account_type";
                              $result = $con->query($sql);

                              while($row = $result->fetch_assoc()) {
                                echo "<option>" . $row["type"] . "</option>";
                              };
                            ?>
                          </datalist>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-5 control-label">Description</label>
                      <div class="col-xs-5">
                          <textarea  class="form-control" name="acc_desc" id="acc_desc"> </textarea>
                      </div>
                  </div>

            </div>
            <div class="modal-footer">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
                    <button type="button" class="btn bg-success btn-wide btn-rounded" ><i class="fa fa-check"></i>Save</button>
                </div>
                <!-- /.btn-group -->
            </div>
          </form>
        </div>
    </div>
</div>


<!-- Modal Upload-->

<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
  <form class="form-horizontal" action="module/upload2server/uploadAccounts?from=accounts" method="post" name="upload_excel" enctype="multipart/form-data">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="hideModalLabel">Upload Accounts<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
            </div>
            <div class="modal-body">
              <div class="row"">

                          <input id="userId" name="userId" type="hidden" value=<?php echo $_SESSION['userId']?>></input>
                          <input id="transType" name="transType" type="hidden" value=1></input>

                          <!-- File Button -->
                          <div class="form-group p-20">
                              <label class="col-md-4 control-label" for="filebutton">Select File</label>
                              <div class="col-md-4">
                                  <input type="file" name="file" id="file" class="input-large">
                              </div>
                          </div>

              </div>
            </div>
            <div class="modal-footer">
                <div class="pull-left">
                <a href="templates/Template - Chart of Accounts.csv" download>Download CSV template</a>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                    <button type="submit" id="submit" name="Upload" class="btn bg-success btn-wide btn-rounded"><i class="fa fa-check"></i>Upload</button>
                </div>
                <!-- /.btn-group -->
            </div>
        </div>
    </div>
    </form>
</div>



</div> <!- End Main Page>

<?php
 require 'module/structure/rightNavBar.php';
 require 'module/structure/wrapper_close.php';
 require 'module/structure/commonjs.php';
 ?>

    <!-- ========== PAGE JS FILES ========== -->
    <script src="js/prism/prism.js"></script>
    <script src="js/waypoint/waypoints.min.js"></script>
    <script src="js/counterUp/jquery.counterup.min.js"></script>
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/bootstrap-tour/bootstrap-tour.js"></script>
    <script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>
    <script src="js/custom/finance/addAccount.js"></script>



<?php  require 'module/structure/html_close.php';?>
