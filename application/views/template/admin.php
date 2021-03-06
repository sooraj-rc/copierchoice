<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CopierChoice|Admin-Panel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/icons/favicon.ico">
        <link rel="apple-touch-icon" href="images/icons/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
        <!--Loading bootstrap css-->
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/jquery-ui-1.10.4.custom.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/animate.css">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/all.css">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/main.css">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/style-responsive.css">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/zabuto_calendar.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/pace.css">
        <link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>styles/jquery.news-ticker.css">
        <script type="text/javascript">
            var base_url    = "<?php echo base_url(); ?>";
            var admin_url   = "<?php echo admin_url(); ?>";
            var assets_url  = "<?php echo assets_url(); ?>";
        </script>
    </head>
    <body>

        <div>
            <!--END THEME SETTING-->
            <!--BEGIN BACK TO TOP-->
            <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
            <!--END BACK TO TOP-->
            <!--BEGIN TOPBAR-->
            <div id="header-topbar-option-demo" class="page-header-topbar">
                <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a id="logo" href="/admin" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Copier Choice</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
                    <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>

                        <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                            <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                        </form>

                        <ul class="nav navbar navbar-top-links navbar-right mbn">
                            <li class="dropdown topbar-user">
                                <a data-hover="dropdown" href="#" class="dropdown-toggle">
                                    <img src="<?php echo assets_url(); ?>images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;
                                    <span class="hidden-xs"><?php echo s('ADMIN_NAME') ?></span>&nbsp;<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-user pull-right">
                                    <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo admin_url(); ?>logout"><i class="fa fa-key"></i>Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <!--END TOPBAR-->
            <div id="wrapper">
                <!--BEGIN SIDEBAR MENU-->
                <nav id="sidebar" role="navigation" data-step="2" data-intro=""
                     data-position="right" class="navbar-default navbar-static-side">
                    <div class="sidebar-collapse menu-scroll">
                        <ul id="side-menu" class="nav">
                            <div class="clearfix"></div>
                            <li class="active">
                                <a href="<?php echo admin_url(); ?>dashboard">
                                    <i class="fa fa-tachometer fa-fw"><div class="icon-bg bg-orange"></div></i>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>                                                       
                            <li>
                                <a href="#">
                                    <i class="fa fa-desktop fa-fw"><div class="icon-bg bg-pink"></div></i>
                                    <span class="menu-title">Manage Contents</span><span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li><a href="merchant_list.php">About Us</a></li>
	                            <li><a href="merchant_approve.php">Contact Us</a></li>
                                </ul> 
                            </li>
                            <li>
                                <a href="<?php echo admin_url(); ?>categories">
                                    <i class="fa fa-sitemap fa-fw"><div class="icon-bg bg-dark"></div></i>
                                    <span class="menu-title">Manage categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo admin_url(); ?>makers">
                                    <i class="fa fa-slack fa-fw"><div class="icon-bg bg-green"></div></i>
                                    <span class="menu-title">Manage Makers/Brands</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo admin_url(); ?>packages">
                                    <i class="fa fa-gift fa-fw"><div class="icon-bg bg-violet"></div></i>
                                    <span class="menu-title">Manage Packages</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo admin_url(); ?>leads">
                                    <i class="fa fa-th-list fa-fw"><div class="icon-bg bg-blue"></div></i>
                                    <span class="menu-title">Manage Leads</span>
                                </a>

                            </li>
                            <li>
                                <a href="<?php echo admin_url(); ?>users">
                                    <i class="fa fa-users fa-fw"><div class="icon-bg bg-red"></div></i>
                                    <span class="menu-title">Manage Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-bar-chart-o fa-fw"><div class="icon-bg bg-yellow"></div></i>
                                    <span class="menu-title">Reports</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-database fa-fw"><div class="icon-bg bg-yellow"></div></i>
                                    <span class="menu-title">Transactions</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cogs fa-fw"><div class="icon-bg bg-green"></div></i>
                                    <span class="menu-title">Admin Settings</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--END SIDEBAR MENU-->

                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">

                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                        <div class="page-header pull-left">
                            <div class="page-title"><?php echo $page_heading; ?></div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li class="hidden"><a href="#"><?php echo $page_heading; ?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li class="active"><?php echo $page_heading; ?></li>
                        </ol>
                        <div class="clearfix">
                        </div>
                    </div>
                    <!--END TITLE & BREADCRUMB PAGE-->

                    <!--BEGIN CONTENT-->
                    <div class="page-content">
                        <?php echo $content; ?>
                    </div>
                    <!--END CONTENT-->

                    <!--BEGIN FOOTER-->
                    <div id="footer">
                        <div class="copyright">
                            <a href="#"><?php echo date("Y"); ?> © CopierChoice</a></div>
                    </div>
                    <!--END FOOTER-->
                </div>
                <!--END PAGE WRAPPER-->
            </div>

        </div>

        <script src="<?php echo assets_url(); ?>script/jquery-1.10.2.min.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery-ui.js"></script>
        <script src="<?php echo assets_url(); ?>script/bootstrap.min.js"></script>
        <script src="<?php echo assets_url(); ?>script/bootstrap-hover-dropdown.js"></script>
        <script src="<?php echo assets_url(); ?>script/html5shiv.js"></script>
        <script src="<?php echo assets_url(); ?>script/respond.min.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.metisMenu.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.slimscroll.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.cookie.js"></script>
        <script src="<?php echo assets_url(); ?>script/icheck.min.js"></script>
        <script src="<?php echo assets_url(); ?>script/custom.min.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.news-ticker.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.menu.js"></script>
        <script src="<?php echo assets_url(); ?>script/pace.min.js"></script>
        <script src="<?php echo assets_url(); ?>script/holder.js"></script>
        <script src="<?php echo assets_url(); ?>script/responsive-tabs.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.flot.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.flot.categories.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.flot.pie.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.flot.tooltip.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.flot.resize.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.flot.fillbetween.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.flot.stack.js"></script>
        <script src="<?php echo assets_url(); ?>script/jquery.flot.spline.js"></script>
        <script src="<?php echo assets_url(); ?>script/zabuto_calendar.min.js"></script>
        <script src="<?php echo assets_url(); ?>script/index.js"></script>
        <!--LOADING SCRIPTS FOR CHARTS-->
        <script src="<?php echo assets_url(); ?>script/highcharts.js"></script>
        <script src="<?php echo assets_url(); ?>script/data.js"></script>
        <script src="<?php echo assets_url(); ?>script/drilldown.js"></script>
        <script src="<?php echo assets_url(); ?>script/exporting.js"></script>
        <script src="<?php echo assets_url(); ?>script/highcharts-more.js"></script>
        <script src="<?php echo assets_url(); ?>script/charts-highchart-pie.js"></script>
        <script src="<?php echo assets_url(); ?>script/charts-highchart-more.js"></script>
        <!--CORE JAVASCRIPT-->
        <script src="<?php echo assets_url(); ?>script/main.js"></script>
        
        
    </body>
</html>

<!-- View more common model -->
<div id="moreDetails" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                    &times;</button>
                <h4 class="modal-title" id="data-title"> </h4>
            </div>
            <div class="modal-body" id="data-output">
                
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- View more common model -->
<!--ADMIN JAVASCRIPT-->
<script src="<?php echo assets_url(); ?>script/admin.js"></script>