<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CopierChoice|Admin</title>
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
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/jquery-ui-1.10.4.custom.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/animate.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/all.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/main.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/style-responsive.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/zabuto_calendar.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/pace.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/jquery.news-ticker.css">
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
                            <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>

                            </li>
                            <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>

                            </li>
                            <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>

                            </li>
                            <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="<?php echo assets_url();  ?>images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Robert John</span>&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-user pull-right">
                                    <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                                    <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>
                                    <li><a href="<?php echo admin_url(); ?>logout"><i class="fa fa-key"></i>Log Out</a></li>
                                </ul>
                            </li>
                            <li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
                        </ul>
                    </div>
                </nav>

            </div>
            <!--END TOPBAR-->
            <div id="wrapper">
                <!--BEGIN SIDEBAR MENU-->
                <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                     data-position="right" class="navbar-default navbar-static-side">
                    <div class="sidebar-collapse menu-scroll">
                        <ul id="side-menu" class="nav">

                            <div class="clearfix"></div>
                            <li class="active"><a href="dashboard.html"><i class="fa fa-tachometer fa-fw">
                                        <div class="icon-bg bg-orange"></div>
                                    </i><span class="menu-title">Dashboard</span></a></li>
                            <li><a href="Layout.html"><i class="fa fa-desktop fa-fw">
                                        <div class="icon-bg bg-pink"></div>
                                    </i><span class="menu-title">Menu 1</span></a>

                            </li>
                            <li><a href="UIElements.html"><i class="fa fa-send-o fa-fw">
                                        <div class="icon-bg bg-green"></div>
                                    </i><span class="menu-title">Menu 2</span></a>

                            </li>
                            <li><a href="Forms.html"><i class="fa fa-edit fa-fw">
                                        <div class="icon-bg bg-violet"></div>
                                    </i><span class="menu-title">Menu 3</span></a>

                            </li>
                            <li><a href="Tables.html"><i class="fa fa-th-list fa-fw">
                                        <div class="icon-bg bg-blue"></div>
                                    </i><span class="menu-title">Menu 4</span></a>

                            </li>
                            <li><a href="DataGrid.html"><i class="fa fa-database fa-fw">
                                        <div class="icon-bg bg-red"></div>
                                    </i><span class="menu-title">Menu 5</span></a>

                            </li>
                            <li><a href="Pages.html"><i class="fa fa-file-o fa-fw">
                                        <div class="icon-bg bg-yellow"></div>
                                    </i><span class="menu-title">Menu 6</span></a>

                            </li>
                            <li><a href="Extras.html"><i class="fa fa-gift fa-fw">
                                        <div class="icon-bg bg-grey"></div>
                                    </i><span class="menu-title">Menu 7</span></a>

                            </li>
                            <li><a href="Dropdown.html"><i class="fa fa-sitemap fa-fw">
                                        <div class="icon-bg bg-dark"></div>
                                    </i><span class="menu-title">Menu 8</span></a>

                            </li>
                            <li><a href="Email.html"><i class="fa fa-envelope-o">
                                        <div class="icon-bg bg-primary"></div>
                                    </i><span class="menu-title">Menu 9</span></a>

                            </li>
                            <li><a href="Charts.html"><i class="fa fa-bar-chart-o fa-fw">
                                        <div class="icon-bg bg-orange"></div>
                                    </i><span class="menu-title">Menu 10</span></a>

                            </li>
                            <li><a href="Animation.html"><i class="fa fa-slack fa-fw">
                                        <div class="icon-bg bg-green"></div>
                                    </i><span class="menu-title">Menu 11</span></a></li>
                        </ul>
                    </div>
                </nav>
                <!--END SIDEBAR MENU-->
                <!--BEGIN CHAT FORM-->
                <div id="chat-form" class="fixed">
                    <div class="chat-inner">
                        <h2 class="chat-header">
                            <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                                </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>
                        <div id="group-1" class="chat-group">
                            <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                                    Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                                    class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                                <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                                <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                                href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                                <span class="badge badge-info is-hidden">0</span></a></div>
                        <div id="group-2" class="chat-group">
                            <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                                    Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                                    class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                                    Pierce</small> <span class="badge badge-info">1</span></a></div>
                        <div id="group-3" class="chat-group">
                            <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                                    Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                                href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                                <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                                <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                                href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                                <span class="badge badge-info is-hidden">0</span></a></div>
                    </div>
                    <div id="chat-box" style="top: 400px">
                        <div class="chat-box-header">
                            <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                                </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                                Mckenzie</span> <small>Online</small>
                        </div>
                        <div class="chat-content">
                            <ul class="chat-box-body">
                                <li>
                                    <p>
                                        <img src="<?php echo assets_url();  ?>images/avatar/128.jpg" class="avt" /><span class="user">John Doe</span><span
                                            class="time">09:33</span></p>
                                    <p>
                                        Hi Swlabs, we have some comments for you.</p>
                                </li>
                                <li class="odd">
                                    <p>
                                        <img src="<?php echo assets_url();  ?>images/avatar/48.jpg" class="avt" /><span class="user">Swlabs</span><span
                                            class="time">09:33</span></p>
                                    <p>
                                        Hi, we're listening you...</p>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-textarea">
                            <input placeholder="Type your message" class="form-control" /></div>
                    </div>
                </div>
                <!--END CHAT FORM-->
                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                        <div class="page-header pull-left">
                            <div class="page-title"><?php echo $page_heading; ?></div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li class="active">Dashboard</li>
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

        <script src="<?php echo base_url(); ?>assets/script/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/bootstrap-hover-dropdown.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/respond.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.cookie.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/icheck.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/custom.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.news-ticker.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.menu.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/pace.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/holder.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/responsive-tabs.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.flot.categories.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.flot.tooltip.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.flot.fillbetween.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/jquery.flot.spline.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/zabuto_calendar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/index.js"></script>
        <!--LOADING SCRIPTS FOR CHARTS-->
        <script src="<?php echo base_url(); ?>assets/script/highcharts.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/data.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/drilldown.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/exporting.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/highcharts-more.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/charts-highchart-pie.js"></script>
        <script src="<?php echo base_url(); ?>assets/script/charts-highchart-more.js"></script>
        <!--CORE JAVASCRIPT-->
        <script src="<?php echo base_url(); ?>assets/script/main.js"></script>

    </body>
</html>