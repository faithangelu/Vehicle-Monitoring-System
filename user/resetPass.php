<!DOCTYPE html>
<html>

<?php require '../module/structure/head_user.php'?>

<body class="blue-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <i class="fa fa-check fa-5x"></i>
            </div>
            <h3>RESET Password</h3>
            <p>Kindly input your NEW password. </p>


            <form  id="regForm" class="m-t" data-toggle="validator" action="resetConfirm.php"  method="post">
                <div class="form-group dark">
                    <?php
                    ECHO '<input type="hidden" class="form-control" name="usrname"  value="' . $_GET["email"] . '">';
                    ?>
                  </div>

                  <div class="form-group dark">
                      <?php
                      ECHO '<input type="hidden" class="form-control" name="confirmString"  value="' . $_GET["confirm"] . '">';
                      ?>
                  </div>


                <div class="form-group dark">
                    <input type="password"  class="form-control" placeholder="Password" name="pasword" id="pass1" required="">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group dark">
                    <input type="password"  class="form-control" placeholder="Confirm Password" data-match="#pass1" data-match-error="Whoops, these don't match" required="">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" value="Submit" class="btn btn-info block full-width m-b">Reset</button>
                </div>
              </form>
            <a class="text-primary" href="login.php"><strong><i class="fa fa-arrow-left"></i> &nbsp; Back to Login Page </strong></a>
            <p class="m-t"> <small><?php echo $comp115 . ' &copy; ' . date(Y)?></small> </p>
        </div>
    </div>

	<!-- Mainly scripts -->
    <script src="../assets/js/jquery-2.1.1.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/plugins/bootstrapValidator/validator.js"></script>


</body>

</html>
