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
            </div>
<!-- End Title Bar -->

<!-- ========== Content ========== -->


          <section class="section">
              <div class="container-fluid">



<div class="row">
  <div class="panel ml-40 mr-40">
      <div class="panel-heading  pt-20">
          <div class="panel-title">
              <h2 class="pl-20">Trip Summary - Trip ID</h2>
              <hr>
              <h5 class="pl-20">Customer</h5>
              <h5 class="pl-20">Account</h5>
              <h5 class="pl-20">Pickup Location</h5>
              <h5 class="pl-20">Delivery Location</h5>
              <h5 class="pl-20">Driver</h5>
              <h5 class="pl-20">Helper</h5>



          </div>
      </div>

      <div class="panel-body pl-40">
          <div class="single-div-timeline">
              <div class="timeline-item" date-is='20-07-1990 8:00am'>
                  <p class="font-size-32 mb-15 text-left">Hello, 'Responsive timeline without mediaQueries!</p>
                  <p>
                      I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.
                  </p>
              </div>

              <div class="timeline-item" date-is='20-07-1990'>
                  <p class="font-size-32 mb-15">Oeehhh, that's awesome.. Me too!</p>
                  <p>
                      I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.
                  </p>
              </div>

              <div class="timeline-item" date-is='20-07-1990'>
                  <p class="font-size-32 mb-15">I'm last-child so my border fades...</p>
                  <p>
                      I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.
                  </p>
              </div>
          </div>
          <!-- /.single-div-timeline -->
      </div>
  </div>
</div>
<!-- /.end row -->






  </div>
</div>

              </div>  <!-- /.container-fluid -->
          </section> <!-- End of Content -->



</div> <!- End Main Page->

<?php
 require 'module/structure/rightNavBar.php';
 require 'module/structure/wrapper_close.php';
 require 'module/structure/commonjs.php';
 ?>

<?php  require 'module/structure/html_close.php';?>
