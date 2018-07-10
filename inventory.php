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
                        <h2 class="title">Inventory</h2>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-6 right-side">
                      <div class="dropdown pull-right">
                         <button class="btn bg-primary dropdown-toggle" type="button" id="menu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="far fa-bars"></i> Inventory Settings
                           <span class="caret"></span>
                         </button>
                         <ul class="dropdown-menu bg-grey" aria-labelledby="menu14">
                               <li><a href="#">Add Inventroy Item</a></li>
                               <li><a href="#">Add Item Category</a></li>
                               <li><a href="#">Add Location</li>
                               <li><a href="#">Inventrory Reports</li>   

                         </ul>
                       </div>
                    </div>
                    <!-- /.col-sm-6 text-right -->
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							                   <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
							                   <li class="active">Inventory</li>
						            </ul>
                    </div>
                    <!-- /.col-sm-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      <!-- End Title Bar -->

      <!-- 4 boxes -->
                <section class="section">
                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <h2 class="text-center">ALL LOCATIONS</h2>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-success" href="#">
                                    <span class="number counter">50</span>
                                    <span class="name">items In Stock</span>
                                    <span class="bg-icon"><i class="far fa-comments"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->

                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-warning" href="#">
                                    <span class="number counter">20</span>
                                    <span class="name">items for Re-Order</span>
                                    <span class="bg-icon"><i class="far fa-bank"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->

                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-danger" href="#">
                                    <span class="number counter">30</span>
                                    <span class="name">items Out of Stock</span>
                                    <span class="bg-icon"><i class="far fa-ticket"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->
                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-danger-300" href="#">
                                    <span class="number counter">5</span>
                                    <span class="name">items with Committed Orders</span>
                                    <span class="bg-icon"><i class="far fa-ticket"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->
                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->


                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
      <!-- End of 4 boxes -->

<!-- 4 boxes -->

          <section class="section">
              <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center p-5"> Goods </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="row p-5" >
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="list-goods" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>List Goods

                                              </a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="addGoods" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-bookmark"></span>
                                                <br/>Add Goods

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


                  </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center p-5"> Location </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="row p-5" >
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>List Locations

                                              </a>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-bookmark"></span>
                                                <br/>Add Location

                                              </a>
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
                              <h3 class="panel-title text-center p-5"> Reports </h3>
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row p-5" >
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                              <br/>Manual Count
                                              <br/>of Goods

                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-bookmark"></span>
                                              <br/>Manual Count
                                              <br/> of Goods

                                            </a>
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
                                  <h3 class="panel-title text-center p-5"> Settings </h3>
                              </div>
                              <div class="panel-body">
                                  <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row p-5" >
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                  <br/>Unit of
                                                  <br/>Measure

                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              <a href="#" class="btn btn-danger-outline btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span>
                                                <br/>Add Category

                                              </a>
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
<script src="js/custom/finance/addAccount.js"></script>


<?php  require 'module/structure/html_close.php';?>
