<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/fonts.css">
    <link rel="stylesheet" href="dist/css/normalize.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
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
                                    <a class="drop-sub active" href=""><i class="fas fa-tachometer-alt text-success"></i> Dashboard</a>
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
                                    <a class="drop-sub" href="">
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
    <section class="edit-wrapper">
        <div class="modal-wrapper light-modal-wrapper">
            <div class="modal fade" id="viewModal" role="dialog"
                 aria-labelledby="viewModal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <style>
                            .action-spin {
                                height: 100px;
                                width: 100px;
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);

                            }

                        </style>
                        <div class="modal-spinner" style="display: none;">
                            <img class="action-spin" src="dist/images/modal-spinner.svg">
                        </div>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                View Product
                            </h5>
                            <button type="button" class="close modal-close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="edit-user-form" autocomplete="off" enctype="multipart/form-data">
                                
                                <input type="hidden" name="user_id">
                                <div class="container-fluid">
                                        <div class="text-right">
                                            <div class="link-btn-wrapper">
                                                <a href="#" class="btn link-btn btn-edit">
                                                    Edit
                                                    <span class="fa fa-pencil-alt edit-bg"></span>
                                                </a>
                                            </div>
                                        </div>
                                    <hr class="mt-1"/>
                                    <div class="row">
                                        <div class="col-lg-6 form-input-area">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">
                                                    Full name <sup class="text-danger">*</sup></label>
                                                <div class="col-sm-8 pl-lg-0">
                                                    <small class="error-message" id="full_name_err"
                                                           style="display: none;"></small>
                                                    <input type="text" class="form-control"
                                                           placeholder="Full name" name="full_name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-input-area">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">
                                                    Email <sup class="text-danger">*</sup></label>
                                                <div class="col-sm-8 pl-lg-0">
                                                    <small class="error-message" id="email_err"
                                                           style="display: none;"></small>
                                                    <input type="text" class="form-control"
                                                           placeholder="Email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-input-area">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">
                                                    Phone <sup class="text-danger">*</sup></label>
                                                <div class="col-sm-8 pl-lg-0">
                                                    <small class="error-message" id="phone_err"
                                                           style="display: none;"></small>
                                                    <input type="text" class="form-control"
                                                           placeholder="Phone" name="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-input-area">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">
                                                    Address</label>
                                                <div class="col-sm-8 pl-lg-0">
                                                    <input type="text" class="form-control"
                                                           placeholder="Address" name="address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-input-area collapse" id="change-pass">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">
                                                    New Password <sup class="text-danger">*</sup></label>
                                                <div class="col-sm-8 pl-lg-0">
                                                    <small class="error-message" id="new_password_err"
                                                           style="display: none;"></small>
                                                    <input type="password" class="form-control"
                                                           placeholder="New Password" name="new_password" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">
                                                    Confirm Password <sup class="text-danger">*</sup></label>
                                                <div class="col-sm-8 pl-lg-0">
                                                    <small class="error-message" id="confirm_password_err"
                                                           style="display: none;"></small>
                                                    <input type="password" class="form-control"
                                                           placeholder="Confirm Password" name="confirm_password" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-input-area">
                                        <div class="form-group row">
                                            <label class="col-sm-8 col-form-label">
                                                Product Image</label>
                                            <div class="col-sm-6 text-center" id="edit-profile-pic">
                                                <div class="img-round">
                                                    <img src="dist/images/user-icon.jpg"
                                                         style="height: 128px;">
                                                </div>
                                                <div class="file-input-wrapper">
                                                    <label for="profile_image1">Change</label>
                                                    <input type="file"
                                                           class="form-control-file file-upload-input-image"
                                                           id="profile_image1" name="profile_image">
                                                </div>
                                                <label for="profile_image1" class="label-btn-upload col-form-label">
                                                    Upload Product Image</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input-area">
                                            <div class="row">
                                                <label class="col-sm-4 col-form-label">
                                                    Status </label>
                                                <div class="col-sm-8 pl-lg-0">
                                                    <label class="switch">
                                                        <input type="checkbox" id="event-fee-switch1" name="active_status"
                                                               value="1">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-0"/>
                                <div class="form-input-area">
                                    <div class="row user-data">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn form-button" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn form-button btn-success update-user">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="add-wrapper">
        <div class="modal-wrapper light-modal-wrapper">
            <div class="modal fade" id="addModal" role="dialog"
                 aria-labelledby="addModal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <style>
                            .action-spin {
                                height: 100px;
                                width: 100px;
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);

                            }

                        </style>
                        <div class="modal-spinner" style="display: none;">
                            <img class="action-spin" src="dist/images/modal-spinner.svg">
                        </div>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Add Product
                            </h5>
                            <button type="button" class="close modal-close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="add-user-form" autocomplete="off" enctype="multipart/form-data">
                            
                            <input id="real-password" type="password" autocomplete="new-password" style="display: none;">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-lg-12 form-input-area">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">
                                                        SKU Code <sup class="text-danger">*</sup></label>

                                                    <div class="col-sm-8 pl-lg-0">
                                                        <small class="error-message" id="sku_code_err"
                                                               style="display: none;"></small>
                                                        <input type="text" class="form-control" name="sku_code" data-size="6"
                                                                   data-character-set="0-9" placeholder="SKU Code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 form-input-area">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">
                                                        Product Name <sup class="text-danger">*</sup></label>

                                                    <div class="col-sm-8 pl-lg-0">
                                                        <small class="error-message" id="product_name_err"
                                                               style="display: none;"></small>
                                                        <input type="text" class="form-control"
                                                               placeholder="Product Name" name="product_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 form-input-area">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">
                                                        Image Alt</label>

                                                    <div class="col-sm-8 pl-lg-0">
                                                        <input type="text" class="form-control"
                                                               placeholder="Alt" name="alt">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 form-input-area">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">
                                                        Category <sup class="text-danger">*</sup></label>

                                                    <div class="col-sm-8 pl-lg-0">
                                                        <small class="error-message" id="category_err"
                                                               style="display: none;"></small>
                                                        <select class="form-control" name="category">
                                                            <option value="">Select Category</option>
                                                            <option value="Modern Trade">Modern Trade</option>
                                                            <option value="Institution">Institution</option>
                                                            <option value="Wholesaler">Wholesaler</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-input-area">
                                        <div class="form-group row">

                                            <div class="col-sm-6 text-center img-wrapper" id="profile-pic">
                                                <div class="img-round">
                                                    <img src="dist/images/product.png"
                                                         style="height: 128px;">
                                                </div>
                                                <div class="file-input-wrapper">
                                                    <label for="product_image">Change</label>
                                                    <input type="file"
                                                           class="form-control-file file-upload-input-image"
                                                           id="product_image" name="profile_picture">
                                                </div>
                                                <label for="product_image" class="label-btn-upload col-form-label">
                                                    Upload Product Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-input-area">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                                Brand <sup class="text-danger">*</sup></label>

                                            <div class="col-sm-8 pl-lg-0">
                                                <small class="error-message" id="brand_err"
                                                       style="display: none;"></small>
                                                <select class="form-control" name="brand">
                                                    <option value="">Select Brand</option>
                                                    <option value="Modern Trade">Modern Trade</option>
                                                    <option value="Institution">Institution</option>
                                                    <option value="Wholesaler">Wholesaler</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-input-area">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                                Quantity <sup class="text-danger">*</sup></label>

                                            <div class="col-sm-8 pl-lg-0">
                                                <small class="error-message" id="quantity_err"
                                                       style="display: none;"></small>
                                                <input type="number" class="form-control"
                                                       placeholder="Quantity" name="quantity">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 form-input-area">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                                Marked Price <sup class="text-danger">*</sup></label>

                                            <div class="col-sm-8 pl-lg-0">
                                                <small class="error-message" id="marked_price_err"
                                                       style="display: none;"></small>
                                                <input type="number" class="form-control"
                                                       placeholder="Marked Price" name="marked_price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 form-input-area">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                                Discount Percent</label>

                                            <div class="col-sm-8 pl-lg-0">
                                                <input type="number" class="form-control"
                                                       placeholder="e.g. 10" name="discount_percent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-input-area">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                                Text Below Price</label>

                                            <div class="col-sm-8 pl-lg-0">
                                                <input type="text" class="form-control"
                                                       placeholder="Inclusive all taxes" name="price_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-input-area">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                                Discount Text</label>

                                            <div class="col-sm-8 pl-lg-0">
                                                <input type="text" class="form-control"
                                                       placeholder="50% OFF" name="discount_text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">
                                                Top Features <sup class="text-danger">*</sup></label>

                                            <div class="col-sm-10 pl-lg-0">
                                                <textarea class="form-control" name="top_features"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">
                                                Description <sup class="text-danger">*</sup></label>

                                            <div class="col-sm-10 pl-lg-0">
                                                <textarea class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input-area">
                                            <div class="row">
                                                <label class="col-sm-4 col-form-label">
                                                    Status </label>
                                                <div class="col-sm-8 pl-lg-0">
                                                    <label class="switch">
                                                        <input type="checkbox" id="event-fee-switch" name="active_status"
                                                               value="1">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn form-button" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn form-button btn-danger reset-product">
                                Reset Form
                            </button>
                            <button type="button" class="btn form-button btn-success add-product">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-box">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <header class="page-header">
                                    <h3>
                                        Product List
                                    </h3>
                                </header>
                            </div>
                            <div class="col-lg-4 text-right">
                                <div class="link-btn-wrapper">
                                    <a href="#" class="btn link-btn" data-toggle="modal"
                                       data-target="#addModal" data-backdrop="static" data-keyboard="false">
                                        Add Products
                                        <span>+</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-data-action mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="data-sort-wrapper">
                                                <label for="inlineFormCustomSelect">Show</label>
                                                <select class="custom-select" id="inlineFormCustomSelect">
                                                    <option selected="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                                <div class="select-caption">
                                                    Entries
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="data-search-wrapper">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="searchForm">Search</label>
                                                        <div class="search-box">
                                                            <input type="text" class="form-control" id="searchForm"
                                                                   aria-describedby="searchForm">
                                                            <button class="search-submit btn">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="data-search-wrapper  text-right">
                                                <div class="advanced-search-btn">
                                                    <a href="">Advanced Search > </a>
                                                </div>
                                                <a href="javascript:void(0);" class="btn form-button btn-success ml-3 export_role"> <i class="fa fa-file-excel text-white mr-1"></i> Export Excel </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <form id="advancedSearchForm">
                                    <div class="row form-input-area table-advanced-search align-items-center">
                                        <div class="col-lg-2 pr-0">
                                            <input type="text" class="form-control"
                                                   placeholder="Product Name" name="product_name">
                                        </div>
                                        <div class="col-lg-2 pr-0">
                                            <input type="text" class="form-control"
                                                   placeholder="Category" name="display_name">
                                        </div>
                                        <div class="col-lg-2 pr-0">
                                            <input type="text" class="form-control"
                                                   placeholder="Brand" name="display_name">
                                        </div>
                                        <div class="col-lg-2 pr-0">
                                            <input type="text" class="form-control"
                                                   placeholder="Created By" name="created_by">
                                        </div>
                                        <div class="col-lg-2 pr-0">
                                            <input type="text" class="form-control created_date"
                                                   placeholder="Created Date" name="created_date">
                                        </div>
                                        <div class="col-lg-2 pr-0">
                                            <select name="active_status" class="form-control">
                                                <option value="">Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 pr-0">
                                            <button type="button" class="btn form-button btn-import search_roles">
                                                <i class="fas fa-search"></i>Search
                                            </button>
                                            <button type="button" class="btn form-button btn-import reset">
                                                <i class="fas fa-sync"></i>Reset
                                            </button>
                                        </div>
                                    </div>
                                <form>
                            </div>
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered tabled-search" id="role-table">
                                        <thead class="thead-sort">
                                        <tr>
                                            <th class="sort-active">S.No</th>
                                            <td>Product Image</td>
                                            <td>SKU Code</td>
                                            <td>Product Name</td>
                                            <td>Category</td>
                                            <td>Brand</td>
                                            <td>Marked Price</td>
                                            <td>Discount Price</td>
                                            <td>Created By</td>
                                            <td>Created Date</td>
                                            <td>Last Modified Date</td>
                                            <td>Last Modified By</td>
                                            <td>Status</td>
                                            <th style="width: 165px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>image</td>
                                                <td>SKU00001</td>
                                                <td>Liveeasy Wellness Multivitamin Multiminiral</td>
                                                <td>Vitamin Supplement</td>
                                                <td>Nature's Way</td>
                                                <td>Rs. 2490</td>
                                                <td>Rs. 1245</td>
                                                <td>Admin</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>Admin</td>
                                                <td>Active</td>
                                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#viewModal" class="btn btn-sm form-button btn-success" data-backdrop="static" data-keyboard="false"><i class="mr-1 fa fa-eye"></i> View</a><a href="javascript:void(0);" class="btn btn-sm form-button btn-danger"><i class="mr-1 fa fa-trash"></i> Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>image</td>
                                                <td>SKU00001</td>
                                                <td>Liveeasy Wellness Multivitamin Multiminiral</td>
                                                <td>Vitamin Supplement</td>
                                                <td>Nature's Way</td>
                                                <td>Rs. 2490</td>
                                                <td>Rs. 1245</td>
                                                <td>Admin</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>Admin</td>
                                                <td>Active</td>
                                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#viewModal" class="btn btn-sm form-button btn-success" data-backdrop="static" data-keyboard="false"><i class="mr-1 fa fa-eye"></i> View</a><a href="javascript:void(0);" class="btn btn-sm form-button btn-danger"><i class="mr-1 fa fa-trash"></i> Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>image</td>
                                                <td>SKU00001</td>
                                                <td>Liveeasy Wellness Multivitamin Multiminiral</td>
                                                <td>Vitamin Supplement</td>
                                                <td>Nature's Way</td>
                                                <td>Rs. 2490</td>
                                                <td>Rs. 1245</td>
                                                <td>Admin</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>Admin</td>
                                                <td>Active</td>
                                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#viewModal" class="btn btn-sm form-button btn-success" data-backdrop="static" data-keyboard="false"><i class="mr-1 fa fa-eye"></i> View</a><a href="javascript:void(0);" class="btn btn-sm form-button btn-danger"><i class="mr-1 fa fa-trash"></i> Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>image</td>
                                                <td>SKU00001</td>
                                                <td>Liveeasy Wellness Multivitamin Multiminiral</td>
                                                <td>Vitamin Supplement</td>
                                                <td>Nature's Way</td>
                                                <td>Rs. 2490</td>
                                                <td>Rs. 1245</td>
                                                <td>Admin</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>Admin</td>
                                                <td>Active</td>
                                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#viewModal" class="btn btn-sm form-button btn-success" data-backdrop="static" data-keyboard="false"><i class="mr-1 fa fa-eye"></i> View</a><a href="javascript:void(0);" class="btn btn-sm form-button btn-danger"><i class="mr-1 fa fa-trash"></i> Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>image</td>
                                                <td>SKU00001</td>
                                                <td>Liveeasy Wellness Multivitamin Multiminiral</td>
                                                <td>Vitamin Supplement</td>
                                                <td>Nature's Way</td>
                                                <td>Rs. 2490</td>
                                                <td>Rs. 1245</td>
                                                <td>Admin</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>Admin</td>
                                                <td>Active</td>
                                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#viewModal" class="btn btn-sm form-button btn-success" data-backdrop="static" data-keyboard="false"><i class="mr-1 fa fa-eye"></i> View</a><a href="javascript:void(0);" class="btn btn-sm form-button btn-danger"><i class="mr-1 fa fa-trash"></i> Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>image</td>
                                                <td>SKU00001</td>
                                                <td>Liveeasy Wellness Multivitamin Multiminiral</td>
                                                <td>Vitamin Supplement</td>
                                                <td>Nature's Way</td>
                                                <td>Rs. 2490</td>
                                                <td>Rs. 1245</td>
                                                <td>Admin</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>2021-01-12 12:12:00</td>
                                                <td>Admin</td>
                                                <td>Active</td>
                                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#viewModal" class="btn btn-sm form-button btn-success" data-backdrop="static" data-keyboard="false"><i class="mr-1 fa fa-eye"></i> View</a><a href="javascript:void(0);" class="btn btn-sm form-button btn-danger"><i class="mr-1 fa fa-trash"></i> Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="dataTables_info" id="product-table_info" role="status" aria-live="polite">Showing 1 to 10 of 66 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="product-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="product-table_previous"><a href="#" aria-controls="product-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="product-table" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="product-table" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="product-table" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="product-table" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="product-table" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="product-table" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button "><a href="#" aria-controls="product-table" data-dt-idx="7" tabindex="0">7</a></li><li class="paginate_button next" id="product-table_next"><a href="#" aria-controls="product-table" data-dt-idx="8" tabindex="0">Next</a></li></ul></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

</body>
</html>