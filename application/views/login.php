<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Hospital</title>
<!-- Favicon-->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bootstrap/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.min.css'; ?>">    
</head>

<body class="theme-blush">

<style>
    .patel{
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 2px 1px #C0C0C0;
        size: 6px;
    }
</style>

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h3 class="text-center text-primary patel"><b>Dr. PATEL'S SUPER MULTISPECIALITY HOSPITAL</b></h3>
            </div>
        </div>
        <div class="row">
                                <?php if($this->session->flashdata('errors'))
                                    {
                                ?>
                                        
                                    <div class="col-lg-12">
                                        <div class="login-details text-center mb-25">
                                            <div class='alert alert-danger'>
                                                <?php echo $this->session->flashdata('errors');  ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                <?php } ?>
            
            <div class="col-lg-4 col-sm-12">
                <form class="card auth_form" method="POST" action="<?php echo base_url('login/user_login'); ?>">
                    <div class="header">
                        <img class="logo" src="<?php echo base_url().'assets/images/logo.svg'; ?>" alt="">
                        <h5>Admin Log in</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" name="username" required class="form-control" placeholder="Username">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" required class="form-control" placeholder="Password">
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></a></span>
                            </div>                            
                        </div>
                        
                        <button class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>                        
                        
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>Designed by<font color="blue"> Priyanka K. Wankhede </font></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="<?php echo base_url().'assets/images/image.jpg' ?>" alt="Sign In"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="<?php echo base_url().'assets/bundles/libscripts.bundle.js' ?>"></script>
<script src="<?php echo base_url().'assets/bundles/vendorscripts.bundle.js'; ?>"></script> <!-- Lib Scripts Plugin Js -->

                                    
</body>
</html>

