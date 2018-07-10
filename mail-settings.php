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
                        <h2 class="title">Mail Settings</h2>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
							                   <li>Settings</li>
							                   <li class="active">Mail Settings</li>
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
            <div>
              <h4 class="panel-title">System Mails</h4>
            </div>
            <div class="pl-20">
               <small> Emails automatically sent by the Application</small>
            </div>

          </div>
          <div class="panel-body p-10">

                    <div class="form-group">
                        <label class="col-xs-4 control-label">From Name</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="buss_name" id="buss_name" placeholder="Sender Name"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">From Email</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="trade_name" id="trade_name" placeholder="juan@example.com"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">Reply To Name</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="buss_name" id="buss_name" placeholder="Person receiveing reply"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">Reply To Email</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="trade_name" id="trade_name" placeholder="another@example.com"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-4 control-label">Send a BCC email to </label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" name="trade_name" id="trade_name" placeholder="log@example.com"/>
                        </div>
                    </div>


          </div> <!-- / Panel Body -->
        </div> <!-- / Panel -->


      <div class="panel">
        <div class="panel-heading bg-info">
          <div>
            <h4 class="panel-title">Sales Module Mails</h4>
          </div>
          <div class="pl-20">
             <small> Emails sent by the Sales / Services Module</small>
          </div>

        </div>
        <div class="panel-body p-10">

                  <div class="form-group">
                      <label class="col-xs-4 control-label">From Name</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="buss_name" id="buss_name" placeholder="Sender Name"/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-4 control-label">From Email</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="trade_name" id="trade_name" placeholder="juan@example.com"/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-4 control-label">Reply To Name</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="buss_name" id="buss_name" placeholder="Person receiveing reply"/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-4 control-label">Reply To Email</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="trade_name" id="trade_name" placeholder="another@example.com"/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-4 control-label">Send a BCC email to </label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="trade_name" id="trade_name" placeholder="log@example.com"/>
                      </div>
                  </div>


        </div> <!-- / Panel Body -->
      </div> <!-- / Panel -->

    </div> <!-- / Column1 -->

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


      <div class="panel">
        <div class="panel-heading bg-info">
          <div>
            <h4 class="panel-title">Purchasing Module Mails</h4>
          </div>
          <div class="pl-20">
             <small> Emails sent by Purchasing Module</small>
          </div>

        </div>
        <div class="panel-body p-10">

                  <div class="form-group">
                      <label class="col-xs-4 control-label">From Name</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="buss_name" id="buss_name" placeholder="Sender Name"/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-4 control-label">From Email</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="trade_name" id="trade_name" placeholder="juan@example.com"/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-4 control-label">Reply To Name</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="buss_name" id="buss_name" placeholder="Person receiveing reply"/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-4 control-label">Reply To Email</label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="trade_name" id="trade_name" placeholder="another@example.com"/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-xs-4 control-label">Send a BCC email to </label>
                      <div class="col-xs-8">
                          <input type="text" class="form-control" name="trade_name" id="trade_name" placeholder="log@example.com"/>
                      </div>
                  </div>


        </div> <!-- / Panel Body -->
      </div> <!-- / Panel -->

      <div class="panel">
        <div class="panel-heading bg-info">
            <h4 class="panel-title"> Server Details </h4>
        </div>
        <div class="panel-body p-10">
          <div class="form-group">
              <label class="col-xs-4 control-label">Host</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="bank" id="bank" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">User</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="bank_no" id="bank_no" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Password</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="bank_no" id="bank_no" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">SMTP Security Protocol</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="bank_no" id="bank_no" placeholder="TLS" />
              </div>
          </div>
          <div class="form-group">
              <label class="col-xs-4 control-label">Port</label>
              <div class="col-xs-8">
                  <input type="text" class="form-control" name="bank_no" id="bank_no" placeholder="587" />
              </div>
          </div>
        </div>  <!-- / Panel Body -->
      </div>  <!-- / Panel -->

      <div class="col-xs-12 text-center">
          <button type="button" class="btn bg-success btn-wide btn-rounded btn-lg" ><i class="fa fa-check"></i>Save Mail Settings</button>
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
