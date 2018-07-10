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

                        <h2 class="title">Add Announcements</h2>

                    </div>

                </div>



                <!-- Breadcrumb -->

                <div class="row breadcrumb-div">

                    <div class="col-sm-6">

                        <ul class="breadcrumb">

							                   <li><a href="home"><i class="fa fa-home"></i> Home</a></li>

							                   <li>Admin</li>

							                   <li class="active">Add Announcement</li>

						            </ul>

                    </div>

                </div>

            </div>

<!-- End Title Bar -->



<!-- ========== Content ========== -->




<form action="" method="post">
<section class="section">

  <div class="container-fluid">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

      <div class="panel">

        <div class="panel-heading bg-info">

            <h4 class="panel-title"> Announcement Details </h4>

        </div>

        <div class="panel-body p-10">
          <div class="form-group">
              <label class="col-xs-4 control-label">Message</label>
              <div class="col-xs-8">
                  <textarea class="form-control" name="text" id="text"></textarea>
              </div>
          </div>

          <div class="form-group">
              <label class="col-xs-4 control-label">Valid Until</label>
              <div class="col-xs-8">
                 <input class="form-control" type ="date" name="date" id="date" />
             
                 </div>
          </div>
        </div>  <!-- / Panel Body -->
      </div>  <!-- / Panel -->
       
                
            
      <div class="col-xs-12 text-center">
          <button type="submit" class="btn bg-success btn-wide btn-rounded btn-lg" name="submit"><i class="fa fa-check"></i>Save Announcement</button>
      </div>



    </div>  <!-- / Column 2 -->
    </div> <!-- / Row -->
    <div class="row">
    </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- End of Content -->
</form>

<?php
if(isset($_POST['submit'])) {
$texts = $_POST['text'];
$date = $_POST['date'];
$user = $_SESSION['userId'];

$sql = "INSERT into db_announcements (text, end_date, created_by, created_date) VALUES ('$texts', '$date', '$user', '$today')";
    
    if (mysqli_query($con, $sql)) {
        echo '<script>window.location.href = "https://ops.northward.ph/home?addedAnnouncement";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

}

?>



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

