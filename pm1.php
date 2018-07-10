
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Options Admin - Responsive Web Application Kit</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="css/main.css" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="index.html">
                			    <img src="images/logo-dark.svg" alt="Options - Admin Template" class="logo">
                			</a>
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                				<i class="fa fa-ellipsis-v"></i>
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                                <li class="hidden-sm hidden-xs"><a href="#"><i class="fa fa-search"></i></a></li>
                				<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                                <li class=""><a href="#" class="color-primary"><i class="fa fa-diamond"></i> Upgrade</a></li>
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li class="dropdown">
                					<a href="#" class="dropdown-toggle bg-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus-circle"></i> Add New <span class="caret"></span></a>
                					<ul class="dropdown-menu" >
                						<li><a href="#"><i class="fa fa-plus-square-o"></i> Customer</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square-o"></i> Employee</a></li>
                						<li><a href="#"><i class="fa fa-plus-square-o"></i> Estimate</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square-o"></i> Task</a></li>
                						<li><a href="#"><i class="fa fa-plus-square-o"></i> Team Member</a></li>
                						<li role="separator" class="divider"></li>
                						<li><a href="#">Create Order</a></li>
                						<li role="separator" class="divider"></li>
                						<li><a href="#">Generate Report</a></li>
                					</ul>
                				</li>
                                <!-- /.dropdown -->
                                <li><a href="#" class=""><i class="fa fa-bell"></i></a></li>
                				<li><a href="#" class=""><i class="fa fa-comments"></i></a></li>
                				<li class="dropdown">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">John Doe <span class="caret"></span></a>
                					<ul class="dropdown-menu profile-dropdown">
                						<li class="profile-menu bg-gray">
                						    <div class="">
                						        <img src="http://placehold.it/60/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                                <div class="profile-name">
                                                    <h6>John Doe</h6>
                                                    <a href="#">View Profile</a>
                                                </div>
                                                <div class="clearfix"></div>
                						    </div>
                						</li>
                						<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                						<li><a href="#"><i class="fa fa-sliders"></i> Account Details</a></li>
                						<li role="separator" class="divider"></li>
                						<li><a href="#" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                					</ul>
                				</li>
                                <!-- /.dropdown -->
                                <li><a href="#" class="hidden-xs hidden-sm open-right-sidebar"><i class="fa fa-ellipsis-v"></i></a></li>
                			</ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>

            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <div class="left-sidebar bg-black-300 box-shadow">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                <h6 class="title">John Doe</h6>
                                <small class="info">PHP Developer</small>
                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="index.html"><i class="fa fa-bolt"></i> <span>Layout 1</span></a></li>
                                            <li><a href="dashboard-2.html"><i class="fa fa-bookmark"></i> <span>Layout 2</span></a></li><li><a href="dashboard-full-width.html"><i class="fa fa-dashboard"></i> <span>Layout 3</span></a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-file-text"></i> <span>Page Layouts</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="layout-fixed-top.html"><i class="fa fa-lock"></i> <span>Fixed Navbar</span></a></li>
                                            <li><a href="layout-fixed-top-side.html"><i class="fa fa-thumb-tack"></i> <span>Fixed Top & Sidebar</span></a></li>
                                            <li><a href="layout-static-top-side.html"><i class="fa fa-unlock"></i> <span>Static Top & Sidebar</span></a></li>
                                            <li><a href="layout-small-sidebar.html"><i class="fa fa-sign-in"></i> <span>Small Sidebar</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-paint-brush"></i> <span>Color Schemes</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="color-primary.html"><i class="fa fa-bank"></i> <span>Primary Color</span></a></li>
                                            <li><a href="color-danger.html"><i class="fa fa-bell"></i> <span>Danger Color</span></a></li>
                                            <li><a href="color-success.html"><i class="fa fa-check"></i> <span>Success Color</span></a></li>
                                            <li><a href="color-warning.html"><i class="fa fa-info"></i> <span>Warning Color</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-map-signs"></i> <span>Sidebar Layouts</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="sidebar-light.html"><i class="fa fa-newspaper-o "></i> <span>Light Sidebar</span></a></li>
                                            <li><a href="sidebar-default.html"><i class="fa fa-leaf "></i> <span>Default Sidebar</span></a></li>
                                            <li><a href="sidebar-primary.html"><i class="fa fa-check"></i> <span>Primary Sidebar</span></a></li>
                                            <li><a href="sidebar-indigo.html"><i class="fa fa-info"></i> <span>Indigo Sidebar</span></a></li>
                                            <li><a href="sidebar-sea-green.html"><i class="fa fa-male"></i> <span>Sea Green Sidebar</span></a></li>
                                            <li><a href="sidebar-navy.html"><i class="fa fa-sign-in"></i> <span>Navy Sidebar</span></a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Components</span>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-magic"></i> <span>UI Components</span> <span class="label label-success ml-5">Hot</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="ui-buttons.html"><i class="fa fa-plane"></i> <span>Buttons</span></a></li>
                                            <li><a href="ui-panels.html"><i class="fa fa-puzzle-piece"></i> <span>Panels</span></a></li>
                                            <li><a href="ui-modals.html"><i class="fa fa-random"></i> <span>Modals</span></a></li>
                                            <li><a href="ui-page-headers.html"><i class="fa fa-road"></i> <span>Page Headers</span></a></li>
                                            <li><a href="ui-loaders.html"><i class="fa fa-spinner"></i> <span>Loaders</span></a></li>
                                            <li><a href="ui-confirmation.html"><i class="fa fa-info"></i> <span>Confirmation</span></a></li>
                                            <li><a href="ui-dropdown-menu.html"><i class="fa fa-sitemap"></i> <span>Dropdown Menu</span></a></li>
                                            <li><a href="ui-media-objects.html"><i class="fa fa-photo"></i> <span>Media Objects</span></a></li>
                                            <li><a href="ui-timeout-idle.html"><i class="fa fa-ticket"></i> <span>Timeout Idle</span></a></li>
                                            <li><a href="ui-timeout-session.html"><i class="fa fa-suitcase"></i> <span>Timeout Session</span></a></li>
                                            <li><a href="ui-bootstrap-tour.html"><i class="fa fa-fighter-jet"></i> <span>Bootstrap Tour</span></a></li>
                                            <li><a href="ui-timeline.html"><i class="fa fa-clock-o"></i> <span>Timeline</span></a></li>
                                            <li><a href="ui-date-picker.html"><i class="fa fa-calendar"></i> <span>Date Picker</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-bars"></i> <span>Bootstrap Components</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="bt-accordions.html"><i class="fa fa-bar-chart"></i> <span>Accordions</span></a></li>
                                            <li><a href="bt-affix.html"><i class="fa fa-bell-o"></i> <span>Affix</span></a></li>
                                            <li><a href="bt-alerts.html"><i class="fa fa-info-circle"></i> <span>Alerts</span></a></li>
                                            <li><a href="bt-button-dropdown.html"><i class="fa fa-bookmark"></i> <span>Button Dropdown</span></a></li>
                                            <li><a href="bt-button-groups.html"><i class="fa fa-bomb"></i> <span>Button Groups</span></a></li>
                                            <li><a href="bt-buttons.html"><i class="fa fa-bug"></i> <span>Buttons</span></a></li>
                                            <li><a href="bt-carousel.html"><i class="fa fa-bullseye"></i> <span>Carousel</span></a></li>
                                            <li><a href="bt-code.html"><i class="fa fa-code"></i> <span>Code</span></a></li>
                                            <li><a href="bt-collapse.html"><i class="fa fa-plane"></i> <span>Collapse</span></a></li>
                                            <li><a href="bt-dropdowns.html"><i class="fa fa-calendar"></i> <span>Dropdowns</span></a></li>
                                            <li><a href="bt-grid.html"><i class="fa fa-th"></i> <span>Grid</span></a></li>
                                            <li><a href="bt-helpers.html"><i class="fa fa-hand-o-right"></i> <span>Helpers</span></a></li>
                                            <li><a href="bt-labels-badges.html"><i class="fa fa-signal"></i> <span>Labels & Badges</span></a></li>
                                            <li><a href="bt-modals.html"><i class="fa fa-shopping-cart"></i> <span>Modals</span></a></li>
                                            <li><a href="bt-pagination.html"><i class="fa fa-video-camera"></i> <span>Pagination</span></a></li>
                                            <li><a href="bt-popover.html"><i class="fa fa-camera"></i> <span>Popover</span></a></li>
                                            <li><a href="bt-scrollspy.html"><i class="fa fa-arrows-alt"></i> <span>Scrollspy</span></a></li>
                                            <li><a href="bt-tabs.html"><i class="fa fa-cloud"></i> <span>Tabs</span></a></li>
                                            <li><a href="bt-tooltips.html"><i class="fa fa-crop"></i> <span>Tooltips</span></a></li>
                                            <li><a href="bt-typography.html"><i class="fa fa-text-width"></i> <span>Typography</span></a></li>
                                            <li><a href="bt-progress-bar.html"><i class="fa fa-tasks"></i> <span>Progress Bar</span></a></li>
                                        </ul>
                                    </li>
                                     <li class="has-children">
                                        <a href="#"><i class="fa fa-comments-o"></i> <span>Tables</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="table-basic.html"><i class="fa fa-lock"></i> <span>Basic Tables</span></a></li>
                                            <li class="active"><a href="table-datatable.html"><i class="fa fa-list"></i> <span>Datatables</span></a></li>
                                            <li><a href="table-user-details.html"><i class="fa fa-table"></i> <span>Tabular User Details</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="font-awesome.html"><i class="fa fa-font-awesome"></i> <span>Font Awesome</span></a></li>
                                    <li><a href="animations.html"><i class="fa fa-spinner animate"></i> <span>CSS Animations</span></a></li>
                                    <li class="nav-header">
                                        <span class="">Charts</span>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span>Amcharts</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="chart-column-bar.html"><i class="fa fa-barcode"></i> <span>Column & Bar Charts</span></a></li>
                                            <li><a href="chart-line-area.html"><i class="fa fa-line-chart"></i> <span>Line & Area Charts</span></a></li>
                                            <li><a href="chart-pie-chart.html"><i class="fa fa-pie-chart"></i> <span>Pie Charts</span></a></li>
                                            <li><a href="chart-funnel.html"><i class="fa fa-area-chart"></i> <span>Funnel Chart</span></a></li>
                                            <li><a href="chart-others.html"><i class="fa fa-comments"></i> <span>Other Charts</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="charts-high-chart.html"><i class="fa fa-area-chart"></i> <span>High Chart</span></a></li>
                                    <li><a href="charts-chartjs.html"><i class="fa fa-area-chart"></i> <span>Chart.js</span></a></li>

                                    <li class="nav-header">
                                        <span class="">Forms</span>
                                    </li>
                                    <li class=""><a href="form-basic.html"><i class="fa fa-cloud"></i> <span>Basic Forms</span></a></li>
                                    <li class=""><a href="form-layouts.html"><i class="fa fa-bars"></i> <span>Form Layouts</span></a></li>
                                    <li class=""><a href="form-validations.html"><i class="fa fa-info"></i> <span>Validations</span></a></li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span>Form Components</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li class=""><a href="form-checkbox.html"><i class="fa fa-check"></i> <span>Checkboxes</span></a></li>
                                            <li class=""><a href="form-bt-switches.html"><i class="fa fa-bullhorn"></i> <span>Bootstrap Switch</span></a></li>
                                            <li class=""><a href="form-input-groups.html"><i class="fa fa-bullseye"></i> <span>Input Groups</span></a></li>
                                            <li class=""><a href="form-select2.html"><i class="fa fa-arrows-alt"></i> <span>Select 2</span></a></li>
                                            <li class=""><a href="form-switches.html"><i class="fa fa-check-square-o"></i> <span>Switches</span></a></li>
                                            <li class=""><a href="form-tags.html"><i class="fa fa-history"></i> <span>Tags</span></a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="form-editable.html"><i class="fa fa-pencil"></i> <span>Editable Form</span></a></li>
                                    <li class=""><a href="form-steps.html"><i class="fa fa-server"></i> <span>Steps</span></a></li>
                                    <li class=""><a href="form-dropzone.html"><i class="fa fa-bullseye"></i> <span>Dropzone</span></a></li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-paperclip"></i> <span>Editors</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li class=""><a href="form-editor-ckeditor.html"><i class="fa fa-check"></i> <span>CKEditor</span></a></li>
                                            <li class=""><a href="form-editor-summernote.html"><i class="fa fa-bullhorn"></i> <span>Summernote</span></a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Pages</span>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-lock"></i> <span>Login</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="pages-login.html"><i class="fa fa-lock"></i> <span>Option 1</span></a></li>
                                            <li><a href="pages-login-2.html"><i class="fa fa-sign-in"></i> <span>Option 2</span></a></li>
                                            <li><a href="pages-login-3.html"><i class="fa fa-sign-out"></i> <span>Option 3</span></a></li>
                                            <li><a href="pages-login-4.html"><i class="fa fa-lock"></i> <span>Option 4</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-sign-out"></i> <span>Register</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="pages-register.html"><i class="fa fa-lock"></i> <span>Option 1</span></a></li>
                                            <li><a href="pages-register-2.html"><i class="fa fa-sign-in"></i> <span>Option 2</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-lock"></i> <span>Ecommerce</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="ecommerce-dashboard.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                                            <li><a href="ecommerce-orders.html"><i class="fa fa-shopping-cart"></i> <span>Orders</span></a></li>
                                            <li><a href="ecommerce-order-view.html"><i class="fa fa-sign-out"></i> <span>Order View</span></a></li>
                                            <li><a href="ecommerce-products.html"><i class="fa fa-lock"></i> <span>Products</span></a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="pages-error-404.html"><i class="fa fa-info"></i> <span>Error 404</span></a></li>
                                    <li class=""><a href="pages-error-500.html"><i class="fa fa-info-circle"></i> <span>Error 500</span></a></li>
                                    <li class=""><a href="pages-profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                                    <li class=""><a href="pages-pricing.html"><i class="fa fa-user-secret"></i> <span>Pricing</span></a></li>
                                </ul>
                                <!-- /.side-nav -->
                                <div class="purchase-btn hidden-sm hidden-xs">
                                    <a href="https://themeforest.net/item/options-admin-responsive-web-application-ui-kit/19796742?license=regular&open_purchase_for_item_id=19796742&purchasable=source&ref=salttechno" target="_blank" class="btn btn-success btn-labeled">Purchase Now<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></a>
                                </div>
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Tables - DataTables</h2>
                                    <p class="sub-title">One stop solution for perfect admin dashboard!</p>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 right-side">
                                    <a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
                                </div>
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Tables - DataTables</li>
            						</ul>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 text-right">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="alert alert-info" role="alert">
                                            <strong>Datatables!</strong> This is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. For official documentation, <a href="https://datatables.net/" target="_blank" class=" ml-5"><i class="fa fa-hand-o-right"></i> click here <i class="fa fa-hand-o-left"></i></a>.
                                        </div>
                                        <!-- /.alert alert-info -->
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Zero Configuration</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Tiger Nixon&lt;/td&gt;
            &lt;td&gt;System Architect&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Garrett Winters&lt;/td&gt;
            &lt;td&gt;Accountant&lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
&lt;/table&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        $('#example').DataTable();
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Scroll - Vertical</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <table id="example2" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;table id="example2" class="display table table-striped table-bordered" cellspacing="0" width="100%"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Tiger Nixon&lt;/td&gt;
            &lt;td&gt;System Architect&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Garrett Winters&lt;/td&gt;
            &lt;td&gt;Accountant&lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
&lt;/table&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        $('#example2').DataTable( {
            "scrollY":        "300px",
            "scrollCollapse": true,
            "paging":         false
        } );
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Complex Headers</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <table id="example3" class="display table table-bordered table-striped" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Name</th>
                                                            <th colspan="2">HR Information</th>
                                                            <th colspan="3">Contact</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                            <th>Office</th>
                                                            <th>Extn.</th>
                                                            <th>E-mail</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                            <th>Office</th>
                                                            <th>Extn.</th>
                                                            <th>E-mail</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>$320,800</td>
                                                            <td>Edinburgh</td>
                                                            <td>5421</td>
                                                            <td>t.nixon@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>$170,750</td>
                                                            <td>Tokyo</td>
                                                            <td>8422</td>
                                                            <td>g.winters@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$86,000</td>
                                                            <td>San Francisco</td>
                                                            <td>1562</td>
                                                            <td>a.cox@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$433,060</td>
                                                            <td>Edinburgh</td>
                                                            <td>6224</td>
                                                            <td>c.kelly@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>$162,700</td>
                                                            <td>Tokyo</td>
                                                            <td>5407</td>
                                                            <td>a.satou@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>$372,000</td>
                                                            <td>New York</td>
                                                            <td>4804</td>
                                                            <td>b.williamson@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>$137,500</td>
                                                            <td>San Francisco</td>
                                                            <td>9608</td>
                                                            <td>h.chandler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>$327,900</td>
                                                            <td>Tokyo</td>
                                                            <td>6200</td>
                                                            <td>r.davidson@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>$205,500</td>
                                                            <td>San Francisco</td>
                                                            <td>2360</td>
                                                            <td>c.hurst@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>$103,600</td>
                                                            <td>Edinburgh</td>
                                                            <td>1667</td>
                                                            <td>s.frost@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>$90,560</td>
                                                            <td>London</td>
                                                            <td>3814</td>
                                                            <td>j.gaines@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>$342,000</td>
                                                            <td>Edinburgh</td>
                                                            <td>9497</td>
                                                            <td>q.flynn@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>$470,600</td>
                                                            <td>San Francisco</td>
                                                            <td>6741</td>
                                                            <td>c.marshall@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>$313,500</td>
                                                            <td>London</td>
                                                            <td>3597</td>
                                                            <td>h.kennedy@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>$385,750</td>
                                                            <td>London</td>
                                                            <td>1965</td>
                                                            <td>t.fitzpatrick@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>$198,500</td>
                                                            <td>London</td>
                                                            <td>1581</td>
                                                            <td>m.silva@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>$725,000</td>
                                                            <td>New York</td>
                                                            <td>3059</td>
                                                            <td>p.byrd@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>$237,500</td>
                                                            <td>New York</td>
                                                            <td>1721</td>
                                                            <td>g.little@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>$132,000</td>
                                                            <td>London</td>
                                                            <td>2558</td>
                                                            <td>b.greer@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>$217,500</td>
                                                            <td>Edinburgh</td>
                                                            <td>2290</td>
                                                            <td>d.rios@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>$345,000</td>
                                                            <td>New York</td>
                                                            <td>1937</td>
                                                            <td>j.caldwell@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>$675,000</td>
                                                            <td>New York</td>
                                                            <td>6154</td>
                                                            <td>y.berry@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>$106,450</td>
                                                            <td>New York</td>
                                                            <td>8330</td>
                                                            <td>c.vance@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>$85,600</td>
                                                            <td>Sidney</td>
                                                            <td>3023</td>
                                                            <td>d.wilder@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>$1,200,000</td>
                                                            <td>London</td>
                                                            <td>5797</td>
                                                            <td>a.ramos@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>$92,575</td>
                                                            <td>Edinburgh</td>
                                                            <td>8822</td>
                                                            <td>g.joyce@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>$357,650</td>
                                                            <td>Singapore</td>
                                                            <td>9239</td>
                                                            <td>j.chang@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>$206,850</td>
                                                            <td>San Francisco</td>
                                                            <td>1314</td>
                                                            <td>b.wagner@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>$850,000</td>
                                                            <td>San Francisco</td>
                                                            <td>2947</td>
                                                            <td>f.green@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>$163,000</td>
                                                            <td>Tokyo</td>
                                                            <td>8899</td>
                                                            <td>s.itou@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>$95,400</td>
                                                            <td>Sidney</td>
                                                            <td>2769</td>
                                                            <td>m.house@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>$114,500</td>
                                                            <td>London</td>
                                                            <td>6832</td>
                                                            <td>s.burks@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>$145,000</td>
                                                            <td>London</td>
                                                            <td>3606</td>
                                                            <td>p.bartlett@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>$235,500</td>
                                                            <td>San Francisco</td>
                                                            <td>2860</td>
                                                            <td>g.cortez@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>$324,050</td>
                                                            <td>Edinburgh</td>
                                                            <td>8240</td>
                                                            <td>m.mccray@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>$85,675</td>
                                                            <td>San Francisco</td>
                                                            <td>5384</td>
                                                            <td>u.butler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>$164,500</td>
                                                            <td>San Francisco</td>
                                                            <td>7031</td>
                                                            <td>h.hatfield@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>$109,850</td>
                                                            <td>San Francisco</td>
                                                            <td>6318</td>
                                                            <td>h.fuentes@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>$452,500</td>
                                                            <td>San Francisco</td>
                                                            <td>9422</td>
                                                            <td>v.harrell@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>$136,200</td>
                                                            <td>London</td>
                                                            <td>7580</td>
                                                            <td>t.mooney@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>$645,750</td>
                                                            <td>New York</td>
                                                            <td>1042</td>
                                                            <td>j.bradshaw@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>$234,500</td>
                                                            <td>Singapore</td>
                                                            <td>2120</td>
                                                            <td>o.liang@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>$163,500</td>
                                                            <td>London</td>
                                                            <td>6222</td>
                                                            <td>b.nash@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>$139,575</td>
                                                            <td>Tokyo</td>
                                                            <td>9383</td>
                                                            <td>s.yamamoto@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>$98,540</td>
                                                            <td>New York</td>
                                                            <td>8327</td>
                                                            <td>t.walton@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>$87,500</td>
                                                            <td>San Francisco</td>
                                                            <td>2927</td>
                                                            <td>f.camacho@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>$138,575</td>
                                                            <td>Singapore</td>
                                                            <td>8352</td>
                                                            <td>s.baldwin@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>$125,250</td>
                                                            <td>New York</td>
                                                            <td>7439</td>
                                                            <td>z.frank@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>$115,000</td>
                                                            <td>San Francisco</td>
                                                            <td>4389</td>
                                                            <td>z.serrano@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>$75,650</td>
                                                            <td>Edinburgh</td>
                                                            <td>3431</td>
                                                            <td>j.acosta@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>$145,600</td>
                                                            <td>New York</td>
                                                            <td>3990</td>
                                                            <td>c.stevens@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>$356,250</td>
                                                            <td>London</td>
                                                            <td>1016</td>
                                                            <td>h.butler@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>$103,500</td>
                                                            <td>London</td>
                                                            <td>6733</td>
                                                            <td>l.greer@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>$86,500</td>
                                                            <td>San Francisco</td>
                                                            <td>8196</td>
                                                            <td>j.alexander@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>$183,000</td>
                                                            <td>Edinburgh</td>
                                                            <td>6373</td>
                                                            <td>s.decker@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>$183,000</td>
                                                            <td>Singapore</td>
                                                            <td>5384</td>
                                                            <td>m.bruce@datatables.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>$112,000</td>
                                                            <td>New York</td>
                                                            <td>4226</td>
                                                            <td>d.snider@datatables.net</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;table id="example3" class="display table table-bordered table-striped" cellspacing="0" width="100%"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th rowspan="2"&gt;Name&lt;/th&gt;
            &lt;th colspan="2"&gt;HR Information&lt;/th&gt;
            &lt;th colspan="3"&gt;Contact&lt;/th&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th&gt;Position&lt;/th&gt;
            &lt;th&gt;Salary&lt;/th&gt;
            &lt;th&gt;Office&lt;/th&gt;
            &lt;th&gt;Extn.&lt;/th&gt;
            &lt;th&gt;E-mail&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
            &lt;th&gt;Salary&lt;/th&gt;
            &lt;th&gt;Office&lt;/th&gt;
            &lt;th&gt;Extn.&lt;/th&gt;
            &lt;th&gt;E-mail&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Tiger Nixon&lt;/td&gt;
            &lt;td&gt;System Architect&lt;/td&gt;
            &lt;td&gt;$320,800&lt;/td&gt;
            &lt;td&gt;Edinburgh&lt;/td&gt;
            &lt;td&gt;5421&lt;/td&gt;
            &lt;td&gt;t.nixon@datatables.net&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Garrett Winters&lt;/td&gt;
            &lt;td&gt;Accountant&lt;/td&gt;
            &lt;td&gt;$170,750&lt;/td&gt;
            &lt;td&gt;Tokyo&lt;/td&gt;
            &lt;td&gt;8422&lt;/td&gt;
            &lt;td&gt;g.winters@datatables.net&lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
&lt;/table&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        $('#example3').DataTable();
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    <div class="right-sidebar bg-white fixed-sidebar">
                        <div class="sidebar-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Useful Sidebar <i class="fa fa-times close-icon"></i></h4>
                                        <p>Code for help is added within the main page. Check for code below the example.</p>
                                        <p>You can use this sidebar to help your end-users. You can enter any HTML in this sidebar.</p>
                                        <p>This sidebar can be a 'fixed to top' or you can unpin it to scroll with main page.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <!-- /.col-md-12 -->

                                    <div class="text-center mt-20">
                                        <button type="button" class="btn btn-success btn-labeled">Purchase Now<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                    </div>
                                    <!-- /.text-center -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.right-sidebar -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>


        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>
