<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>Login</title>
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
    <link href="assets/css/mystyle.css"  rel="stylesheet" type="text/css">  
    </head>

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="d-flex p-3">
                                    <div>
                                        <a href="" class="">
                                            <img src="assets/images/CK-Logo.png" alt="" height="50" class="auth-logo logo-dark">
                                            <img src="assets/images/CK-Logo.png" alt="" height="22" class="auth-logo logo-light">
                                        </a>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <h4 class="font-size-18">Welcome Back !</h4>
                                        <p class="text-muted mb-0">Sign in to continue to Chasedei kaduri.</p>
                                    </div>
                                </div>
                                <div class="p-3">
    
                                    <form class="form-horizontal" action="index.html">
    
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="text" class="form-control"  >
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" >
                                        </div>
    
                                        <div class="row mt-4">
                                            <div class="col-sm-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="customControlInline">
                                                    <label class="form-check-label" for="customControlInline">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-end">
                                                <a href="admin_dashboard.php" class="btn btn-primary w-100 waves-effect waves-light mt-4" type="submit">Log In</a>
                                                <a href="index.php" class="btn btn-warning w-100 waves-effect waves-light mt-4" style="color:white">Back to scanning</a>
                                            </div>
                                        </div>
         
                                       
                                    </form>
    
                                </div>
    
                            </div>
                        </div>
                        <div class="mt-5 text-center position-relative">
                            <!-- <p class="text-white-50">Don't have an account ? <a href="#" class="fw-bold text-white"> Signup Now </a> </p> -->
                            <p class="text-white"> © <script>document.write(new Date().getFullYear())</script>  Chasedei kaduri. Crafted with <i class="mdi mdi-heart text-danger"></i> by Jetnetix</p>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

                             
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
