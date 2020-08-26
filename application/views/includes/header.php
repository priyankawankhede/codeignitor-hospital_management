<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Hospital</title>
<link rel="icon" href="<?php echo base_url().'assets/images/favicon.ico'; ?>" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bootstrap/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css'; ?>"/>
<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/charts-c3/plugin.css'; ?>"/>
<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/morrisjs/morris.min.css'; ?>" />
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo  base_url().'assets/plugins/select2/select2.css'; ?>" />
<!-- Bootstrap Select Css -->
<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bootstrap-select/css/bootstrap-select.css'; ?>" />
<!-- Light Gallery Plugin Css -->
<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/light-gallery/css/lightgallery.css'; ?>">
<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.min.css'; ?>">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<!-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="<?php echo base_url().'assets/images/loader.svg'; ?>" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div> -->


<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">        
        <li><a href="<?php echo base_url().'logout'; ?>" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="#"><img src="<?php echo base_url().'assets/images/logo.jpg'; ?>" alt="Aero"></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image"><img src="<?Php echo base_url().'assets/images/avatar.png'; ?>" alt="User"></a>
                    <div class="detail">
                        <h4>Admin</h4>                                        
                    </div>
                </div>
            </li>
            <li class="active open"><a href="<?php echo base_url().'dashboard'; ?>"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class=""><a href="<?php echo base_url().'patients/view'; ?>"><i class="zmdi zmdi-male-female"></i><span>Patients</span></a></li>
            <!-- <li class=""><a href="<?php echo base_url().'products/view'; ?>"><i class="zmdi zmdi-gamepad"></i><span>Products</span></a></li> -->
            <li class=""><a href="<?php echo base_url().'reports/view'; ?>"><i class="zmdi zmdi-ungroup"></i><span>Reports</span></a></li>            
        </ul>
    </div>
</aside>



