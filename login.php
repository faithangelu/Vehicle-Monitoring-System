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
                                    <center><img src="northward.png" alt="company-logo" class="img-responsive" width="300px" ></center>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="section-title text-center">
                                  <h4><?php Echo $module1;?></h4>
                                  <p class="sub-title text-center">Web Application for <?php Echo $company_name ;?> </p>
                                </div>

                                <form id="loginForm" class="m-t" data-toggle="validator" action="user/nc_login_c.php" method="post">
                                	<div class="form-group">
                                		<label for="inputEmail">Email address</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter Your Email Id" name="usrname" required="">
                                    <div class="help-block with-errors"></div>
                                	</div>
                                	<div class="form-group">
                                		<label for="inputPassword">Password</label>
                                    <input type="password" class="form-control" id="inputPassword1" placeholder="Password" name="pasword" required="">
                                    <div class="help-block with-errors"></div>
                                	</div>

                                    
                                    <div class="form-group mt-20">
                                        <div class="">
                                            <div class="form-group has-error">
                                                <?php echo $_GET['error'];; ?>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>



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
