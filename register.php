<?php
require 'module/structure/html_open.php';
require_once 'config.php';
require_once 'module/structure/head_login.php'
?>



    <body class="">
        <div class="main-wrapper">

            <div class="login-bg-color bg-black-300">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">

                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <i class="fa fa-check fa-5x"></i>
                              </div>
                            </div>
                            <div class="panel-body">
                                <div class="section-title text-center">
                                  <h4>REGISTRATION</h4>
                                  <p class="sub-title text-center">Kindly provide your email and desired password</p>

                                </div>

                                <form  id="regForm" class="m-t" data-toggle="validator" action="user/registration.php"  method="post">
                                    <div class="form-group dark">
                                        <input type="email" class="form-control" placeholder="Email" name="usrname"  required="">
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    <div class="form-group dark">
                                        <input type="password"  class="form-control" placeholder="Password" name="pasword" id="pass1" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dark">
                                        <input type="password"  class="form-control" placeholder="Confirm Password" data-match="#pass1" data-match-error="Whoops, these don't match" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" value="Submit" class="btn btn-info block full-width m-b">Register</button>
                                    </div>
                                  </form>



                                <hr>

                                <div class="text-center">
                                    <a class="text-primary" href="login.php"><strong><i class="fa fa-arrow-left"></i> &nbsp; Back to Login Page </strong></a>
                                </div>
                                <!-- /.text-center -->

                            </div>
                        </div>
                        <!-- /.panel -->
                        <p class="text-muted text-center"><small><?php echo $comp115 . ' &copy; ' . date(Y)?></small></p>
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

<?php
require_once "module/structure/commonjs.php"
 ?>
        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/icheck/icheck.min.js"></script>
        <script src="js/bootstrapValidator/validator.js"></script>


        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

<?php  require 'module/structure/html_close.php';?>
