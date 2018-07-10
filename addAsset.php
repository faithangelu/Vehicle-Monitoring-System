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
                        <h2 class="title">Add Asset</h2>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
                                 <li>Finance</li>
							                   <li><a href="assets">Assets</a></li>
							                   <li class="active">Add Asset</li>
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
                <h4 class="panel-title"> Asset Classification </h4>
            </div>
            <div class="panel-body p-10">
              <div class="form-group">
                  <label class="col-xs-4 control-label">Asset Type</label>
                  <select class="form-control" id="asset_type">
                    <option value="1">Property</option>
                    <option value="2">Building</option>
                    <option value="3">Furniture and Fixtures</option>
                    <option value="4">Equipment</option>
                    <option value="5">Motor Vehicle</option>
                  </select>
              </div>

              <div class="form-group">
                  <label class="col-xs-4 control-label">Asset Classification</label>
                  <select class="form-control" id="asset_class">
                    <option value="1">Values will be based on Asset Type</option>
                  </select>
              </div>
            </div>  <!-- / Panel Body -->
          </div>  <!-- / Panel -->

        <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Asset Details </h4>
          </div>
          <div class="panel-body p-10">

                    <div class="form-group">
                        <label class="col-xs-4 control-label">Asset Name</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="buss_name" id="buss_name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">Description</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="trade_name" id="trade_name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">Purchase Date</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="tin" id="tin" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">Capital Goods</label>
                        <div class="col-xs-8">
                          <label class="radio-inline">
                              <input type="radio" name="taxreg" value="1" >Yes
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="taxreg" value="0" checked="checked">No
                          </label>
                        </div>
                    </div>

                    <div id="property">
                      <div class="form-group">
                          <label class="col-xs-4 control-label pt-10">Transfer Certificate of Title (TCT)</label>
                          <div class="col-xs-8 pt-10">
                              <input type="text" class="form-control" name="last_name" id="last_name" />
                          </div>
                      </div>
                    </div>

                    <div id="equipment" style="display: none">
                      <div class="form-group">
                          <label class="col-xs-4 control-label pt-10">Serial Number</label>
                          <div class="col-xs-8 pt-10">
                              <input type="text" class="form-control" name="last_name" id="last_name" />
                          </div>
                      </div>
                    </div>

                    <div id="motorvehicle" style="display: none">
                      <div class="form-group">
                          <label class="col-xs-4 control-label pt-10">Engine Number</label>
                          <div class="col-xs-8 pt-10">
                              <input type="text" class="form-control" name="last_name" id="last_name" />
                          </div>
                          <label class="col-xs-4 control-label pt-10">Chasis Number</label>
                          <div class="col-xs-8 pt-10">
                              <input type="text" class="form-control" name="last_name" id="last_name" />
                          </div>
                      </div>
                    </div>




          </div> <!-- / Panel Body -->
        </div> <!-- / Panel -->



      </div> <!-- / Column1 -->

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

        <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Accounting Account </h4>
          </div>
          <div class="panel-body p-10">
            <div class="form-group">
                <label class="col-xs-4 control-label">Asset Account</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="credit_terms" id="credit_terms" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Depreciation Account</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="credit_limit" id="credit_limit" />
                </div>
            </div>
          </div>
        </div>

      <div class="panel">
        <div class="panel-heading bg-info">
            <h4 class="panel-title"> Payment Details </h4>
        </div>
        <div class="panel-body p-10">
          <div class="form-group">
              <label class="col-xs-4 control-label">Amount</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_landline" id="comp_landline" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Vendor</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_mobile" id="comp_mobile" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Payment Financed</label>
              <div class="col-xs-8">
                <label class="radio-inline">
                    <input type="radio" name="taxreg" value="1" >Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="taxreg" value="0" checked="checked">No
                </label>
              </div>
          </div>

          <div class="financing">
          <div class="form-group">
              <label class="col-xs-4 control-label">Financing Company</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_website" id="comp_website" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Amount Financed</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_facebook" id="comp_facebook" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Loan Duration in mos</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_facebook" id="comp_facebook" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Bank Charges</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_facebook" id="comp_facebook" />
              </div>
          </div>

          </div>
        </div>  <!-- / Panel Body -->
      </div>  <!-- / Panel -->



      <div class="col-xs-12 text-center">
          <button type="button" class="btn bg-success btn-wide btn-rounded btn-lg" ><i class="fa fa-check"></i>Save New Asset</button>
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
            $("#asset_type").change(function () {
                if ($(this).val() == "1") {
                    $("#property").show();
                    $("#equipment").hide();
                    $("#motorvehicle").hide();
                } else if ($(this).val() == "4") {
                    $("#equipment").show();
                    $("#property").hide();
                    $("#motorvehicle").hide();
                } else if ($(this).val() == "5") {
                    $("#motorvehicle").show();
                    $("#property").hide();
                    $("#equipment").hide();
                }
                else {
                    $("#property").hide();
                    $("#equipment").hide();
                    $("#motorvehicle").hide();
                }
            });
        });
    </script>


<?php  require 'module/structure/html_close.php';?>
