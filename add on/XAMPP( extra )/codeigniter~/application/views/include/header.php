<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url(); ?>assets/images/favicon.png">
    <title>Admin Panel</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/libs/froala-editor/summernote.min.css">
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>dist/css/style.min.css">
</head>

<body style="background: #e9ecef;">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5" style="position: fixed; top: 0;width: 100%;">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="slideshow-list.php">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10" style="font-size: 25px;">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            Admin Panel

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <!-- <span class="logo-text">
                             Maintaince

                        </span> -->
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../<?= site_url(); ?>assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <a href="<?php echo site_url() ?>login/logout" class="topbartoggler d-block d-md-none waves-effect waves-light"><i class="fa fa-power-off" aria-hidden="true"></i></a>
                </div>
                <div class="navbar-collapse collapse">
                    <a href="<?php echo site_url() ?>login/logout" style="margin-left: 92%;color: white;cursor: pointer;text-decoration: none;font-size: 20px;">Logout</a>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin5" style="position: fixed;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-0">
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url() ?>Main" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">List</span></a></li> -->
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">学生 </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo site_url() ?>student" class="sidebar-link"><i class="mdi mdi-arrow-right"></i><span class="hide-menu"> 学生列表 </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-arrow-right"></i><span class="hide-menu"> 学生申请 </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">管理员 </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo site_url() ?>admin" class="sidebar-link"><i class="mdi mdi-arrow-right"></i><span class="hide-menu"> 管理员列表 </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">设置 </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo site_url() ?>programme" class="sidebar-link"><i class="mdi mdi-arrow-right"></i><span class="hide-menu"> 课程列表 </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo site_url() ?>notice" class="sidebar-link"><i class="mdi mdi-arrow-right"></i><span class="hide-menu"> 公告列表 </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper" style="margin-top: 60px;">