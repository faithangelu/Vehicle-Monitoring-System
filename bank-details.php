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

                        <h2 class="title">Bank Details</h2>

                    </div>

                </div>



                <!-- Breadcrumb -->

                <div class="row breadcrumb-div">

                    <div class="col-sm-6">

                        <ul class="breadcrumb">

							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>

							                   <li>Settings</li>

							                   <li class="active">Bank Details</li>

						            </ul>

                    </div>

                </div>

            </div>

<!-- End Title Bar -->



<!-- ========== Content ========== -->





<section class="section">

  <div class="container-fluid">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

      <div class="panel">

        <div class="panel-heading bg-info">

            <h4 class="panel-title"> Accounting Details </h4>

        </div>

        <div class="panel-body p-10">

          <div class="form-group">

              <label class="col-xs-4 control-label">Tax Registration</label>

              <div class="col-xs-8">

                <label class="radio-inline">

                    <input type="radio" name="taxreg" value="1" checked="checked">VAT Registered

                </label>

                <label class="radio-inline">

                    <input type="radio" name="taxreg" value="0">Non VAT

                </label>

              </div>

          </div>



          <div class="form-group">

              <label class="col-xs-4 control-label">TIN</label>

              <div class="col-xs-8">

                  <input type="text" class="form-control" name="tin" id="tin" />

              </div>

          </div>

          <div class="form-group">

              <label class="col-xs-4 control-label">Branch Code</label>

              <div class="col-xs-8">

                  <input type="text" class="form-control" name="branch" id="branch" />

              </div>

          </div>

                    <div class="form-group">

              <label class="col-xs-4 control-label">BIR RDO</label>

              <div class="col-xs-8">

                  <input type="text" class="form-control" name="rdo" id="rdo" />

              </div>

          </div>

          <div class="form-group">

              <label class="col-xs-4 control-label">Reporting Cycle</label>

              <div class="col-xs-8 pt-10">

                <select class="form-control" id="rep_cycle">

                  <option value="1" selected>Calendar</option>

                  <option value="2">Fiscal</option>

                </select>

              </div>

          </div>



          <div class="form-group">

              <label class="col-xs-4 control-label">Fiscal Month End</label>

              <div class="col-xs-8 pt-10">

                <select class="form-control" id="fiscal_end">

                  <option value="1">January</option>

                  <option value="2">February</option>

                  <option value="3">March</option>

                  <option value="4">April</option>

                  <option value="5">May</option>

                  <option value="6">June</option>

                  <option value="7">July</option>

                  <option value="8">August</option>

                  <option value="9">September</option>

                  <option value="10">October</option>

                  <option value="11">November</option>

                  <option value="12" selected>December</option>

                </select>

              </div>

          </div>



        </div>  <!-- / Panel Body -->

      </div>  <!-- / Panel -->



      <div class="panel">

        <div class="panel-heading bg-info">

            <h4 class="panel-title"> Bank Details </h4>

        </div>

        <div class="panel-body p-10">

          <div class="form-group">

              <label class="col-xs-4 control-label">Bank Account Number</label>

              <div class="col-xs-8">

                  <input type="text" class="form-control" name="bank_no" id="bank_no" />

              </div>

          </div>

        </div>  <!-- / Panel Body -->

      </div>  <!-- / Panel -->



      <div class="col-xs-12 text-center">

          <button type="submit" class="btn bg-success btn-wide btn-rounded btn-lg" ><i class="fa fa-check"></i>Save Bank Details</button>

      </div>



    </div>  <!-- / Column 2 -->





    </div> <!-- / Row -->



    <div class="row">



    </div>







    </div>

    <!-- /.container-fluid -->

</section>

<!-- End of Content -->







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



    <script type="text/javascript">

        $(function () {

            $("#buss_reg").change(function () {

                if ($(this).val() == "2") {

                    $("#soleprop").show();

                } else {

                    $("#soleprop").hide();

                }

            });

        });

    </script>





<?php  require 'module/structure/html_close.php';?>

