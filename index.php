<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/fonts.css">
    <link rel="stylesheet" href="dist/css/normalize.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/jquery.transfer.css">
    <link rel="stylesheet" href="dist/js/bootstrap-datetime/bootstrap-datetimepicker.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="dist/css/print-style.css">
    <link rel="stylesheet" href="dist/css/responsive.css">

    <title>Admin Dashboard</title>

</head>
<body>
    <div class="nav-action-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 d-md-none d-lg-none d-block">
                    <div class="menu-respo">
                        <img src="dist/images/menu.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-6 text-right text-md-left">
                    <div class="soft-brand-image">
                        <!-- <img src="dist/images/logo.png" alt=""> -->
                        Chemist Nepal
                    </div>
                </div>
                <div class="col-md-6 col-3 text-md-right">
                    <div class="helper-panel-top">
                        <div class="user-auth-info user-auth-info-ys">
                            <div class="user-auth-info-txt">
                                Welcome To, Admin Dashboard <i class="fas fa-user"></i>
                            </div>

                            <div class="user-auth-info-txt">
                                <a href="">Settings <i class="fas fa-cogs"></i></a>
                            </div>
                            <div class="user-auth-info-txt">
                                <a href="">Logout  <i class="fas fa-sign-out-alt"></i></a>

                            </div>

                        </div>

                        <div class="notification-nav" id="custom-notification" v-cloak>
                            <div class="notification-icon"><i class="fas fa-bell"></i>
                                <span class="notification-count">1</span>
                            </div>
                            <div class="notification-tray">
                                <div class="noti-tray-header clearfix">
                                    <div class="tray-header-left">
                                        Notifications
                                    </div>
                                </div>
                                <div class="notify-list">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">No Notifications</a>
                                        </li>
                                        <li class="unread-notif">
                                            <a href="" class="d-flex ">
                                                <span>
                                                    <img src="" class="user-photo-notification align-self-center">
                                                </span>
                                                <span><strong>Order Placed</strong>New order received</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="" class="d-flex ">
                                                <span>
                                                    <img src="" class="user-photo-notification align-self-center">
                                                </span>
                                                <span><strong>New Registration</strong>New customer registered</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="respo-mnu-tp d-inline-block d-md-none">
                        <span class="d-inline-block d-md-none"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="nav-menu-tab nav-header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-nav-menu">
                        <button class="btn btn-close-nav-phone d-md-none d-lg-none d-block">
                            ×</button>
                        <ul class="nav nav-tabs responsive-tabs" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab"
                                   aria-controls="dashboard" aria-selected="false"><i class="fas fa-home text-success"></i>Dashboard</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="content-tab" data-toggle="tab" href="#content" role="tab"
                                   aria-controls="contact" aria-selected="false"><i class="fas fa-file text-success"></i> Content Management</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                   aria-controls="contact" aria-selected="false"><i class="fas fa-users text-success"></i> User Management</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="master-tab" data-toggle="tab" href="#master" role="tab"
                                   aria-controls="contact" aria-selected="false"><i class="fas fa-bars text-success"></i>Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab"
                                   aria-controls="contact" aria-selected="false"><i class="fas fa-users text-success"></i> Customer Management</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vehicle-tab" data-toggle="tab" href="#vehicle" role="tab"
                                   aria-controls="vehicle" aria-selected="false"><i class="fas fa-clipboard text-success"></i>Orders</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#admin-report" id="admin-report-tab" data-toggle="tab"><i class="fa fa-file text-success"></i> Reports</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#Settings" id="Settings-tab" data-toggle="tab"><i class="fa fa-cogs text-success"></i> Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="nav-tab-cnt">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dropdown">
                                    <a class="drop-sub active" href="index.php"><i class="fas fa-tachometer-alt text-success"></i> Dashboard</a>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="content" role="tabpanel" aria-labelledby="content-tab">
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-cogs text-primary"></i>Site Management
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-file text-primary"></i>Sliders
                                    </a>
                                </div>

                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-file text-primary"></i>Footer Contents
                                    </a>
                                </div>

                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-file text-primary"></i>About Us
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-file text-primary"></i>Contact Us
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-file text-primary"></i>Privacy Policy
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-file text-primary"></i>Terms & Conditions
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="master"
                                 role="tabpanel"
                                 aria-labelledby="master-tab">
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fa fa-inbox text-primary"></i> Categories
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fa fa-inbox text-primary"></i> Brands
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fa fa-inbox text-primary"></i> Discounts
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fa fa-inbox text-primary"></i> Ages
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="drop-sub" href="products.php">
                                        <i class="fa fa-inbox text-primary"></i> Products
                                    </a>
                                </div>
                            </div>    
                            <div class="tab-pane fade" id="vehicle" role="tabpanel" aria-labelledby="vehicle-tab">
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-list-alt  text-primary"></i>View Orders

                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-cogs text-primary"></i>Role Management
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-user-plus text-primary"></i>User Management
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-cogs text-primary"></i>Customer Management
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="admin-report" role="tabpanel" aria-labelledby="admin-report-tab">
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fas fa-shekel-sign" aria-hidden="true" class="text-primary"></i>Sales Reports
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                                <div class="dropdown">
                                    <a class="drop-sub" href="">
                                        <i class="fa fa-cogs text-primary"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <style>

        .app-spin-spinning {
            position: static;
            display: inline-block;
            opacity: 1;
        }

        .app-spin-nested-loading {
            position: relative;
        }

        .app-spin-nested-loading > div > .app-spin {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 4;
            display: block;
            width: 100%;
            height: 100%;
            max-height: 400px;
        }

        .app-spin-nested-loading > div > .app-spin .app-spin-dot {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -10px;
        }

        .app-spin-nested-loading > div > .app-spin .app-spin-text {
            position: absolute;
            top: 50%;
            width: 100%;
            padding-top: 5px;
            text-shadow: 0 1px 2px #fff;
        }

        .app-spin-nested-loading > div > .app-spin.app-spin-show-text .app-spin-dot {
            margin-top: -20px;
        }

        .app-spin-nested-loading > div > .app-spin-sm .app-spin-dot {
            margin: -7px;
        }

        .app-spin-nested-loading > div > .app-spin-sm .app-spin-text {
            padding-top: 2px;
        }

        .app-spin-nested-loading > div > .app-spin-sm.app-spin-show-text .app-spin-dot {
            margin-top: -17px;
        }

        .app-spin-nested-loading > div > .app-spin-lg .app-spin-dot {
            margin: -16px;
        }

        .app-spin-nested-loading > div > .app-spin-lg .app-spin-text {
            padding-top: 11px;
        }

        .app-spin-nested-loading > div > .app-spin-lg.app-spin-show-text .app-spin-dot {
            margin-top: -26px;
        }

        .app-spin-container {
            position: relative;
            -webkit-transition: opacity 0.3s;
            transition: opacity 0.3s;
        }

        .app-spin-container::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10;
            display: none \9;
            width: 100%;
            height: 100%;
            background: #fff;
            opacity: 0;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            content: '';
            pointer-events: none;
        }

        .app-spin-blur {
            clear: both;
            overflow: hidden;
            opacity: 0.5;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            pointer-events: none;
        }

        .app-spin-blur::after {
            opacity: 0.4;
            pointer-events: auto;
        }

        .app-spin-tip {
            color: rgba(0, 0, 0, 0.45);
        }

        .app-spin-dot {
            position: relative;
            display: inline-block;
            font-size: 20px;
            width: 1em;
            height: 1em;
        }

        .app-spin-dot-item {
            position: absolute;
            display: block;
            width: 9px;
            height: 9px;
            background-color: #1890ff;
            border-radius: 100%;
            -webkit-transform: scale(0.75);
            transform: scale(0.75);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            opacity: 0.3;
            -webkit-animation: appSpinMove 1s infinite linear alternate;
            animation: appSpinMove 1s infinite linear alternate;
        }

        .app-spin-dot-item:nth-child(1) {
            top: 0;
            left: 0;
        }

        .app-spin-dot-item:nth-child(2) {
            top: 0;
            right: 0;
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .app-spin-dot-item:nth-child(3) {
            right: 0;
            bottom: 0;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        .app-spin-dot-item:nth-child(4) {
            bottom: 0;
            left: 0;
            -webkit-animation-delay: 1.2s;
            animation-delay: 1.2s;
        }

        .app-spin-dot-spin {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: appRotate 1.2s infinite linear;
            animation: appRotate 1.2s infinite linear;
        }

        .app-spin-rtl .app-spin-dot-spin {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation-name: appRotateRtl;
            animation-name: appRotateRtl;
        }

        .app-spin-sm .app-spin-dot {
            font-size: 14px;
        }

        .app-spin-sm .app-spin-dot i {
            width: 6px;
            height: 6px;
        }

        .app-spin-lg .app-spin-dot {
            font-size: 32px;
        }

        .app-spin-lg .app-spin-dot i {
            width: 14px;
            height: 14px;
        }

        .app-spin.app-spin-show-text .app-spin-text {
            display: block;
        }

        .app-spin-blur {
            background: #fff;
            opacity: 0.5;
        }

        @-webkit-keyframes appSpinMove {
            to {
                opacity: 1;
            }
        }

        @keyframes appSpinMove {
            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes appRotate {
            to {
                -webkit-transform: rotate(405deg);
                transform: rotate(405deg);
            }
        }

        @keyframes appRotate {
            to {
                -webkit-transform: rotate(405deg);
                transform: rotate(405deg);
            }
        }

        @-webkit-keyframes appRotateRtl {
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        @keyframes appRotateRtl {
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }
    </style>
    <div class="loader-container" style="display: none;">
        <div class="loader-content">

            <div class="app-spin app-spin-spinning app-spin-show-text"><span class="app-spin-dot app-spin-dot-spin"><i
                        class="app-spin-dot-item"></i><i class="app-spin-dot-item"></i><i class="app-spin-dot-item"></i><i
                        class="app-spin-dot-item"></i></span>
                <div class="app-spin-text">Loading...</div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-3">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="" class="anc-overlay">
                                <div class="stat-box-square">
                                    <div class="stats-header-label clearfix">
                                        <div class="stats-header-icon">
                                            <i class="fas fa-tag"></i>
                                        </div>
                                        <div class="stat-box-header">
                                            <div class="stats-header-text">
                                                <h5>Total Customers</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stat-data">
                                        <h4>2,000</h4>
                                    </div>
                                    <div class="stats-footer">
                                        <div class="stats-calc stats-calc-inc"><i class="fas fa-external-link-alt"></i></div>
                                        <div class="stats-calc-helper">View all customers</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="" class="anc-overlay">
                                <div class="stat-box-square">
                                    <div class="stats-header-label clearfix">
                                        <div class="stats-header-icon">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                        <div class="stat-box-header">
                                            <div class="stats-header-text">
                                                <h5>Total Orders</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stat-data">
                                        <h4>200</h4>
                                    </div>
                                    <div class="stats-footer">
                                        <div class="stats-calc"><i class="fas fa-external-link-alt"></i></div>
                                        <div class="stats-calc-helper">View all records</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="" class="anc-overlay">
                                <div class="stat-box-square">
                                    <div class="stats-header-label clearfix">
                                        <div class="stats-header-icon">
                                            <i class="fas fa-tag"></i>
                                        </div>
                                        <div class="stat-box-header">
                                            <div class="stats-header-text">
                                                <h5>New Registrations</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stat-data">
                                        <h4>100</h4>
                                    </div>
                                    <div class="stats-footer">
                                        <div class="stats-calc stats-calc-inc"><i class="fas fa-external-link-alt"></i>
                                        </div>
                                        <div class="stats-calc-helper">View all records</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="{{route('admin.rob-users')}}" class="anc-overlay">
                                <div class="stat-box-square">
                                    <div class="stats-header-label clearfix">
                                        <div class="stats-header-icon">
                                            <i class="fas fa-tag"></i>
                                        </div>
                                        <div class="stat-box-header">
                                            <div class="stats-header-text">
                                                <h5>Total Active</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stat-data">
                                        <h4>1500</h4>
                                    </div>
                                    <div class="stats-footer">
                                        <div class="stats-calc stats-calc-inc"><i class="fas fa-external-link-alt"></i>
                                        </div>
                                        <div class="stats-calc-helper">View all records</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="chart-item-wrapper">
                                <div id="target-chart" height="130" class="bar-to-print"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="chart-item-wrapper">
                                <canvas id="order-chart" height="130px" class="bar-to-print">
                                </canvas>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="index-filter stat-box-square track-map">
                                    <h6 class="mb-3"> Select to view on map </h6>
                                    <a class="active add-to-map" href="javascript:void(0);" data-map="">Frenchies (5) <i class="fa fa-map-marker-alt text-pink"></i></a>
                                    <a class="active add-to-map" href="javascript:void(0);" data-map="">customers<i class="fa fa-map-marker-alt text-info"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="chart-item-wrapper">
                                    <div id="map" style="height: 500px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="stat-box-square">
                                    <div class="header-ssm">
                                        <h4>
                                            User Activity
                                        </h4>
                                    </div>
                                    <div class="stat-table">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="sort-active" scope="col">Sr.No</th>
                                                <th scope="col">Action</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">User</th>
                                                <th scope="col">Log Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <span class="badge badge-success">Created</span>
                                                    </td>
                                                    <td>Users</td>
                                                    <td>Admin</td>
                                                    <td>2020-01-12 1:22:00</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <span class="badge badge-warning">Updated</span>
                                                    </td>
                                                    <td>Users</td>
                                                    <td>Admin</td>
                                                    <td>2020-01-12 1:22:00</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <span class="badge badge-primary">Exported</span>
                                                    </td>
                                                    <td>Users</td>
                                                    <td>Admin</td>
                                                    <td>2020-01-12 1:22:00</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><span class="badge badge-danger">Deleted</span>
                                                    </td>
                                                    <td>Users</td>
                                                    <td>Admin</td>
                                                    <td>2021-01-12 1:22:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stat-box-square">
                                    <div class="header-ssm">
                                        <h4>
                                            Latest Order Lists
                                        </h4>
                                    </div>
                                    <div class="stat-table">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="sort-active" scope="col">Sr.No</th>
                                                <th scope="col">Order Number</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Expected Delivery Date</th>
                                                <th scope="col">Frenchies Name</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>122242</td>
                                                        <td>2021-01-12</td>
                                                        <td>2021-01-12</td>
                                                        <td>E-signature</td>
                                                        <td><span class="badge badge-warning">Paid</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>122242</td>
                                                        <td>2021-01-12</td>
                                                        <td>2021-01-12</td>
                                                        <td>E-signature</td>
                                                        <td><span class="badge badge-warning">Paid</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>122242</td>
                                                        <td>2021-01-12</td>
                                                        <td>2021-01-12</td>
                                                        <td>E-signature</td>
                                                        <td><span class="badge badge-warning">Paid</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>122242</td>
                                                        <td>2021-01-12</td>
                                                        <td>2021-01-12</td>
                                                        <td>E-signature</td>
                                                        <td><span class="badge badge-warning">Paid</span></td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0">
                   <div class="footer-content">
                        <div class="breadcrumb-wrapper">
                            <ul>
                                <li>
                                    <a href="">Dashboard</a>
                                </li>
                                <li>
                                    <a class="active">User</a>
                                </li>
                                <li>
                                    <a href="">User Management</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <ul class="footer-list">
                        <li>
                            Admin Dashboard
                        </li>
                        <li>
                            Release V.1.0.0
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="footer-list">
                        <li>
                            Tuesday, Jan 12, 2021
                        </li>
                        <li>
                            11:05 AM
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="dist/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="dist/js/popper.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/chart.js"></script>
    <script src="dist/js/jquery.PrintArea.js"></script>
    <script src="plugin/transfer/js/jquery.transfer.js"></script>
    <script src="dist/js/bootstrap-datetime/moment.min.js"></script>
    <script src="dist/js/bootstrap-datetime/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="dist/js/custom.js"></script>
    <script>
    //    Bank Category Select
    $('.bank-list').on('change', function () {
        var data = $(".bank-list option:selected").text();
        console.log(data);
        if (data == "Bank") {
            $(".cat-list").prop('disabled', false);
        }
        else {
            $(".cat-list").prop('disabled', true);
        }
    });
    $('.bank-list-edit').on('change', function () {
        var data = $(".bank-list-edit option:selected").text();
        console.log(data);
        if (data == "Bank") {
            $(".cat-list-edit").prop('disabled', false);
        }
        else {
            $(".cat-list-edit").prop('disabled', true);
        }
    });

    //     File Name
    $('body').delegate('.file-upload-input', 'change', function (e) {
        var fileName = e.target.files[0].name;
        $(this).parents('.upload-box').find(".upload-label").text(fileName);
    });
    // Sweet Alert
    $(".preview").click(function () {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    });
   
</script>
<script>
    $('.filter-content .dropdown-menu').on('click', function (event) {
        $(this).addClass("show");
    });
    $('body').on('click', function (e) {
        if (!$('.filter-content .dropdown-menu').is(e.target)
            && $('.filter-content .dropdown-menu').has(e.target).length === 0
            && $('.show').has(e.target).length === 0
        ) {
            $('.filter-content .dropdown-menu').removeClass('show');
        }
    });
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEbaHkaTDwZUvguVV7XUotLNl0au91YtI&callback"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <script src="plugin/chart/utils.js"></script>
    <script type="text/javascript">
        

        function createConfig(position) {
            return {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'My First dataset',
                        borderColor: window.chartColors.red,
                        backgroundColor: window.chartColors.red,
                        data: [10, 30, 46, 2, 8, 50, 0],
                        fill: false,
                    }, {
                        label: 'My Second dataset',
                        borderColor: window.chartColors.blue,
                        backgroundColor: window.chartColors.blue,
                        data: [7, 49, 46, 13, 25, 30, 22],
                        fill: false,
                    }]
                },
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Tooltip Position: ' + position
                    },
                    tooltips: {
                        position: position,
                        mode: 'index',
                        intersect: false,
                    },
                }
            };
        }
        $(function(){
            var container = document.querySelector('#target-chart');

            ['Order & Sales'].forEach(function(position) {
                var div = document.createElement('div');
                div.classList.add('chart-container');

                var canvas = document.createElement('canvas');
                div.appendChild(canvas);
                container.appendChild(div);

                var ctx1 = canvas.getContext('2d');
                var config = createConfig(position);
                new Chart(ctx1, config);
            });



            var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            var color = Chart.helpers.color;
            var horizontalBarChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 1',
                    backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                    borderColor: window.chartColors.red,
                    borderWidth: 1,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }]

            };
            var ctx2 = document.getElementById('order-chart').getContext('2d');
            window.myHorizontalBar = new Chart(ctx2, {
                type: 'horizontalBar',
                data: horizontalBarChartData,
                options: {
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                        }
                    },
                    responsive: true,
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Orders'
                    }
                }
            });          
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 7.5,
                center: new google.maps.LatLng('28.233615', '83.978810'),
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID,
                    google.maps.MapTypeId.SATELLITE]
            });
            var infowindow = new google.maps.InfoWindow();
        });
    </script>

</body>
</html>