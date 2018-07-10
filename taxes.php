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
                        <h2 class="title">Taxes</h2>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-6 right-side">
                      <div class="dropdown pull-right">
                         <button class="btn bg-primary dropdown-toggle" type="button" id="menu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bars"></i> Tax Settings
                           <span class="caret"></span>
                         </button>
                         <ul class="dropdown-menu bg-grey" aria-labelledby="menu14">
                               <li><a href="#">Tax Rate</a></li>
                               <li><a href="#">Tax Registration</a></li>
                               <li><a href="#">eFPS Settings</li>

                         </ul>
                       </div>
                    </div>
                    <!-- /.col-sm-6 text-right -->
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                                 <li>Finance</li>
							                   <li class="active">Taxes</li>
                         </ul>
                     </div>
                 </div>
             </div>
  <!-- End Title Bar -->

  <!-- ========== Content ========== -->

          <section class="section">
              <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center p-5"> Value Added Tax </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="row p-5" >
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>2550M
                                                <span class="badge badge-danger">M</span>
                                              </a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-bookmark"></span>
                                                <br/>2550Q
                                                <span class="badge badge-primary">Q</span>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="row p-5">
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center p-5"> Witholding Tax </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="row p-5" >
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>1601E
                                                <span class="badge badge-danger">M</span>
                                              </a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-bookmark"></span>
                                                <br/>1601C
                                                <span class="badge badge-danger">M</span>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="row p-5">
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>2307</a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>2316</a>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center p-5"> Summary List </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="row p-5" >
                                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                 <br/>MAP
                                                 <span class="badge badge-danger">M</span>
                                              </a>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-bookmark"></span>
                                                <br/>SAWT
                                                <span class="badge badge-primary">Q</span>
                                              </a>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>SLS
                                                <span class="badge badge-primary">Q</span>
                                              </a>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>SLP
                                                <span class="badge badge-primary">Q</span>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="row p-5">
                                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>Inventory
                                                <span class="badge badge-success">A</span>

                                              </a>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>1604CF
                                                <span class="badge badge-success">A</span>
                                              </a>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>1604E
                                                <span class="badge badge-success">A</span>
                                              </a>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center p-5"> Income Tax </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="row p-5" >
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>1701Q
                                                <span class="badge badge-primary">Q</span>
                                              </a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-bookmark"></span>
                                                <br/>1702
                                                <span class="badge badge-success">A</span>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="row p-5">
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>1604E
                                                <span class="badge badge-success">A</span>
                                              </a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                      <div class="panel">
                          <div class="panel-heading">
                              <h3 class="panel-title text-center p-5"> Legend </h3>
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row p-5" >
                                      <div class="col-lg-1 col-md-2 col-sm-4 col-xs-4">

                                      </div>
                                      <div class="col-lg-11 col-md-10 col-sm-8 col-xs-8">
                                          <p><span class="badge badge-danger">M</span> - Monthly</p>
                                          <p><span class="badge badge-primary">Q</span> - Quarterly</p>
                                          <p><span class="badge badge-success">A</span> - Annually</p>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>

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



<?php  require 'module/structure/html_close.php';?>
