<?php
require_once 'page_load.php';
require 'module/structure/html_open.php';
 require 'module/structure/head.php';
// Page CSS
echo '<link rel="stylesheet" href="css/timeline/single-div-timeline.css">';
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
                        <h2 class="title">Trip Details</h2>
                    </div>
                      <!-- /.col-sm-6 -->
                    <div class="col-sm-6 right-side">
                         <button class="btn bg-primary " type="button" id="menu14" d aria-haspopup="true" aria-expanded="false">
                           <a href="#" data-toggle="modal" data-target="#uploadModal1">Print this Summary</a>
                           <i class="fa fa-plus"></i>
                         </button>
                         
                    </div>
                    <!-- /.col-sm-6 text-right -->
                </div>
                

                <!-- Breadcrumb -->
                <div class="row breadcrumb-div">
                    <div class="col-sm-6">
                        <ul class="breadcrumb">
							<li><a href="home"><i class="fa fa-home"></i> Home</a></li>
                            <li>Operations</li>
						    <li class="active">Trip Details</li>
						</ul>
                    </div>
                </div>
            </div><!-- End Title Bar -->
            <br>
            <div class="container-fluid">
                <center>
                    <?php $id = $_GET['id']; 
                    
                    echo $id; 
                    ?>
                    
                    <iframe height="850px" width="75%" src="media/bill_printing.php?id=<?php echo $id; ?>" name="iframe_a"></iframe>
                </center>
            </div>
           
</div> <!-- End Main Page->



<?php
 require 'module/structure/rightNavBar.php';
 require 'module/structure/wrapper_close.php';
 require 'module/structure/commonjs.php';
 ?>



<?php  require 'module/structure/html_close.php';?>

