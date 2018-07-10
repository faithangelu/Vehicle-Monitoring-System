<!-- Counter -->
                <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <a class="dashboard-stat bg-success-300" href="#">
                              <?php 
                                $sql= "SELECT * from db_customer";
                                $result=mysqli_query($con,$sql);
                                $num_rows = mysqli_num_rows($result);    
                              ?>
                              <span class="number counter"> <?php echo $num_rows; ?></span>
                              <span class="name">Customer</span>
                              <span class="bg-icon"><i class="far fa-child"></i></span>
                          </a>
                          <!-- /.dashboard-stat -->

                      </div>
                      <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <a class="dashboard-stat bg-success-500" href="#">
                              <?php 
                                $sql= "SELECT * from db_trip_rate";
                                $result=mysqli_query($con,$sql);
                                $num_rows = mysqli_num_rows($result);    
                              ?>
                              <span class="number counter"><?php echo $num_rows; ?></span></span>
                              <span class="name">Trip Rates</span>
                              <span class="bg-icon"><i class="far fa-money-bill-alt"></i></span>
                          </a>
                          <!-- /.dashboard-stat -->
                      </div>
                      <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <a class="dashboard-stat bg-success-600" href="#">
                              <?php 
                                $sql= "SELECT * from db_vehicles_detail where remarks='Up to date'";
                                $result=mysqli_query($con,$sql);
                                $num_rows = mysqli_num_rows($result);    
                              ?>
                              <span class="number counter"><?php echo $num_rows; ?></span></span>
                              <span class="name">Updated OR CR</span>
                              <span class="bg-icon"><i class="far fa-file"></i></span>
                          </a>
                          <!-- /.dashboard-stat -->

                      </div>
                      <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <a class="dashboard-stat bg-success-700" href="#">
                              <?php 
                                $sql= "SELECT * from db_vehicles_detail where remarks='Not up to date'";
                                $result=mysqli_query($con,$sql);
                                $num_rows = mysqli_num_rows($result);    
                              ?>
                              <span class="number counter"><?php echo $num_rows; ?></span></span>
                              <span class="name">Not updated OR CR</span>
                              <span class="bg-icon"><i class="far fa-file-pdf"></i></span>
                          </a>
                          <!-- /.dashboard-stat -->

                      </div>
                      <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->


                  </div>
        <!-- End counter -->      