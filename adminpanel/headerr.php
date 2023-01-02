<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="AgroCoop">
    <meta name="keywords" content="Dashboard">
    <meta name="author" content="Anikesh Sharma">
    <title>Dashboard -Agroadmin</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <!------- mew additional css----------->
                                                      <!-- BEGIN: Vendor CSS-->
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/vendors/css/vendors.min.css">
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/vendors/css/forms/toggle/switchery.min.css">
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/css/plugins/forms/switch.min.css">
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/css/core/colors/palette-switch.min.css">
                                <!-- END: Vendor CSS-->

                                <!-- BEGIN: Theme CSS-->
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/css/bootstrap.min.css">
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/css/bootstrap-extended.min.css">
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/css/colors.min.css">
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/css/components.min.css">
                                <!-- END: Theme CSS-->

                                <!-- BEGIN: Page CSS-->
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
                                <link rel="stylesheet" type="text/css" href="additional_css/app-assets/css/core/colors/palette-gradient.min.css">
                                <!-- END: Page CSS-->

                                <!-- BEGIN: Custom CSS-->
                                <link rel="stylesheet" type="text/css" href="additional_css/assets/css/style.css">
                                <!-- END: Custom CSS-->

    <!--------- new additional css ------------>
          <style>
                .btn:hover{color:white}
          </style>
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

                    <!----  additional js -------->

                                                <script src="additional_css/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
                                                <script src="additional_css/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
                                                <script src="additional_css/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
                                                <!-- BEGIN Vendor JS-->

                                                <!-- BEGIN: Page Vendor JS-->
                                                <!-- END: Page Vendor JS-->

                                                <!-- BEGIN: Theme JS-->
                                                <script src="additional_css/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
                                                <script src="../../../app-assets/js/core/app.min.js" type="text/javascript"></script>
                                                <script src="additional_css/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
                                                <script src="additional_css/app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
                    <!----  additional js -------->

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">Admin</span></span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="ft-check-square"></i>Market watch</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i>Order Book</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    