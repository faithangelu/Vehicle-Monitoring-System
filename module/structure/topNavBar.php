 <nav class="navbar top-navbar bg-white box-shadow">
   <div class="container-fluid">
         <div class="row">
             <div class="navbar-header no-padding">
                 <a class="navbar-brand" href="home.php">
                     <span><img src="northward1.png" class="logo" width="100px"> <?php Echo $company_short_name ?></span>
                 </a>
                <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-bars"></i></span>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="far fa-ellipsis-v"></i>
                  </button>
                  <button type="button" class="navbar-toggle mobile-nav-toggle" >
                    <i class="far fa-bars"></i>
                  </button>
               </div>
             <!-- /.navbar-header -->
            
           <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <a href="#" class="bg-info" role="button"></a>
            <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                 <li class="dropdown tour-two">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo " Hello, " . $_SESSION['email'] . " "; ?><span class="caret"></span></a>
                   <ul class="dropdown-menu profile-dropdown bg-gray">
                     <li><a href="profile"><i class="far fa-user"></i> Profile</a></li>
                     <li><a href="company-details"><i class="far fa-cog"></i> Settings</a></li>
                     <li role="separator" class="divider"></li>
                     <li><a href="user/logout" class="color-danger"><i class="far fa-sign-out"></i> Logout</a></li>
                   </ul>
                 </li>
                 <!-- /.dropdown -->
            <li><a href="#" class="hidden-xs hidden-sm open-right-sidebar"><i class="far fa-ellipsis-v"></i></a></li>
            
           </ul>
                 <!-- /.nav navbar-nav navbar-right -->
         </div>
         <!-- /.navbar-collapse -->
         </div>
         <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
 </nav>
