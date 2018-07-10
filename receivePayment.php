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
                        <h2 class="title">Receive Payment</h2>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li><a href="inventory">Finance</a></li>
                                 <li><a href="list-goods">Receivables</a></li>
							                   <li class="active">Payment</li>
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
              <h4 class="panel-title"> Payment Details </h4>
          </div>
          <div class="panel-body p-10">

                    <div class="form-group">
                        <label class="col-xs-4 control-label pt-10">Category</label>
                        <div class="col-xs-8  pt-10">
                          <select class="form-control" id="vend_category">
                            <option value="1">Vendor</option>
                            <option value="2">Customer</option>
                            <option value="3">Employee</option>
                            <option value="4">Others</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label p-10">Particulars</label>
                        <div class="col-xs-8 p-10">
                            <input type="text" class="form-control" name="trade_name" id="trade_name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label pt-10">Refence Id</label>
                        <div class="col-xs-8 pt-10">
                            <input type="text" class="form-control" name="last_name" id="last_name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">Amount</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="buss_name" id="buss_name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">Due Date</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="buss_name" id="buss_name" />
                        </div>
                    </div>


          </div> <!-- / Panel Body -->
        </div> <!-- / Panel -->

      </div> <!-- / Column1 -->

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

      <div class="panel">
        <div class="panel-heading bg-info">
            <h4 class="panel-title"> Payment </h4>
        </div>
        <div class="panel-body p-10">
          <div class="form-group">
              <label class="col-xs-4 control-label">Mode</label>
              <div class="col-xs-8">
                <label class="radio-inline">
                    <input type="radio" class="pay_mode" name="pay_mode" value="2" checked="checked">Cash
                </label>
                <label class="radio-inline">
                    <input type="radio" class="pay_mode" name="pay_mode" value="1" >Cheque
                </label>
                <label class="radio-inline">
                    <input type="radio" class="pay_mode" name="pay_mode" value="3">Bank Deposit
                </label>
              </div>
          </div>

          <div id="cheque" style="display: none">
          <p class="pt-20 pl-10"><em>Cheque Details</em></p>

          <div class="form-group">
              <label class="col-xs-4 control-label">Bank</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_mobile" id="comp_mobile" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Cheque Number</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_website" id="comp_website" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Date</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_facebook" id="comp_facebook" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Amount</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_facebook" id="comp_facebook" />
              </div>
          </div>
          </div>

        </div>  <!-- / Panel Body -->
      </div>  <!-- / Panel -->

      <div class="panel">
        <div class="panel-heading bg-info">
            <h4 class="panel-title"> Payment Status </h4>
        </div>
        <div class="panel-body p-10">
          <div class="form-group">
              <label class="col-xs-4 control-label">Deposit to:</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="bank" id="bank" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Payment Status</label>
              <div class="col-xs-8">
                  <button type="button" class="btn bg-danger-300 btn-wide btn-rounded" >Pending</button>
              </div>
          </div>

        </div>  <!-- / Panel Body -->
      </div>  <!-- / Panel -->


      <div class="col-xs-12 text-center">
          <button type="button" class="btn bg-success btn-wide btn-rounded btn-lg" ><i class="fa fa-check"></i>Save New Payment</button>
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
            $(".pay_mode").change(function () {
                if ($(this).val() == "1") {
                    $("#cheque").show();
                } else {
                    $("#cheque").hide();
                }
            });
        });
    </script>


<?php  require 'module/structure/html_close.php';?>
