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
                        <h2 class="title">Add Receivable</h2>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li><a href="inventory">Finance</a></li>
                                 <li><a href="list-goods">Receivables</a></li>
							                   <li class="active">Add Receivable</li>
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
              <h4 class="panel-title"> Receivable Details </h4>
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

                      <div class="form-group">
                          <label class="col-xs-4 control-label pt-10">Supplier SKU</label>
                          <div class="col-xs-8 pt-10">
                              <input type="text" class="form-control" name="last_name" id="last_name" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-xs-4 control-label">Company SKU</label>
                          <div class="col-xs-8">
                              <input type="text" class="form-control" name="first_name" id="first_name" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-xs-4 control-label">Unit of Measure</label>
                          <div class="col-xs-8">
                              <input type="text" class="form-control" name="middle_name" id="middle_name" />
                          </div>
                      </div>

                   <div class="form-group">
                        <label class="col-xs-4 control-label">Weight in kg / Unit</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="tin" id="tin" />
                        </div>
                    </div>

          </div> <!-- / Panel Body -->
        </div> <!-- / Panel -->

        <div class="panel">
          <div class="panel-heading bg-info">
              <h4 class="panel-title"> Price Details </h4>
          </div>
          <div class="panel-body p-10">
            <div class="form-group">
                <label class="col-xs-4 control-label">Purchase Price</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="credit_terms" id="credit_terms" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-4 control-label">Tax</label>
                <div class="col-xs-8">
                  <label class="radio-inline">
                      <input type="radio" name="taxreg" value="1" checked="checked">VAT inclusive
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="taxreg" value="0">VAT exclusive
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="taxreg" value="0">VAT exempt
                  </label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-4 control-label">Selling SRP</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="credit_limit" id="credit_limit" />
                </div>
            </div>
          </div>
        </div>

      </div> <!-- / Column1 -->

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

      <div class="panel">
        <div class="panel-heading bg-info">
            <h4 class="panel-title"> Account </h4>
        </div>
        <div class="panel-body p-10">
          <div class="form-group">
              <label class="col-xs-4 control-label">Purchase Account</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_landline" id="comp_landline" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Sale Account</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_mobile" id="comp_mobile" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Inventory Account</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_website" id="comp_website" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Discount Account</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="comp_facebook" id="comp_facebook" />
              </div>
          </div>


        </div>  <!-- / Panel Body -->
      </div>  <!-- / Panel -->

      <div class="panel">
        <div class="panel-heading bg-info">
            <h4 class="panel-title"> Stocking Level </h4>
        </div>
        <div class="panel-body p-10">
          <div class="form-group">
              <label class="col-xs-4 control-label">Reorder Level</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="bank" id="bank" />
              </div>
          </div>

        </div>  <!-- / Panel Body -->
      </div>  <!-- / Panel -->


      <div class="col-xs-12 text-center">
          <button type="button" class="btn bg-success btn-wide btn-rounded btn-lg" ><i class="fa fa-check"></i>Save New Receivable</button>
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
