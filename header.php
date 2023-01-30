<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Chasedei kaduri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <!-- my style css -->
    <link href="assets/css/mystyle.css" rel="stylesheet" type="text/css">
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- C3 Chart css -->
    <link href="assets/libs/c3/c3.min.css" rel="stylesheet" type="text/css">
     <!-- date range picker -->
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

     <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
     
    <script src="assets/libs/jquery/jquery.min.js"></script>
</head>
<body data-layout="horizontal">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header mx-auto small">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box d-block d-lg-none">
                        <a href="index.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/CK-Logo.png" alt="" height="22">
                            </span>
                        </a>
                    </div>
                    <button type="button" class="btn btn-sm me-2 font-size-24 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-danger rounded-circle font-size-16">
                                                <i class="mdi mdi-message-text-outline"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">You have 87 unread messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="mdi mdi-message-text-outline"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">You have 87 unread messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 btn-block" href="javascript:void(0)">
                                    View all
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-6.jpg" alt="Header Avatar">
                            <span class="d-none d-md-inline-block ms-1">Donald T. <i class="mdi mdi-chevron-down"></i> </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <!-- <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle me-2 text-muted"></i> Profile</a> -->

                            <a class="dropdown-item lock" href="login.php"><i class="dripicons-lock font-size-16 align-middle me-2 text-muted"></i> Lock Admin</a>
                                <a class="dropdown-item unlock" href="login.php"><i class="dripicons-lock-open font-size-16 align-middle me-2 text-muted"></i> Unlock Admin</a>
                        </div>
                    </div>


                </div>
            </div>

            <div class="topnav">
                <div class="container-fluid">
                    <div class="d-flex align-item-center">
                        <!-- LOGO -->
                        <div class="navbar-brand-box d-none d-lg-block">
                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">

                                    <img src="assets/images/CK-Logo.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">

                                    <img src="assets/images/CK-Logo.png" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <nav class="navbar-light navbar-expand-lg topnav-menu flex-2 text-center">
                          
                         <a href="#" style="color:white">Chasedei Kaduri Jweish Food Bank</a>
                        </nav>
                       <!-- large screen menu -->
                       
                       <div class="navbar-header mx-auto large">
                         <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box d-block d-lg-none">
                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/CK-Logo.png" alt="" height="22">
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm me-2 font-size-24 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="mdi mdi-menu"></i>
                        </button>
                          </div>

                   

                         <div class="d-flex">

                       

                        <div class="dropdown d-inline-block ms-2">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-6.jpg" alt="Header Avatar"> -->
                                <span class="d-none d-md-inline-block ms-1">Donald T. <i class="mdi mdi-chevron-down"></i> </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <!-- <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle me-2 text-muted"></i> Profile</a> -->
                              
                                <!-- <a class="dropdown-item d-block" href="#"><i class="dripicons-gear font-size-16 align-middle me-2 text-muted"></i> Settings</a> -->
                                <a class="dropdown-item lock" href="login.php"><i class="dripicons-lock font-size-16 align-middle me-2 text-muted"></i> Lock Admin</a>
                                <a class="dropdown-item unlock" href="login.php"><i class="dripicons-lock-open font-size-16 align-middle me-2 text-muted"></i> Unlock Admin</a>
                            </div>
                        </div>


                           </div>
                         </div>
                       <!-- end -->
                    </div>
                </div>
            </div>

        </header>
        <div class="main-content">