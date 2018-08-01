<?php
/**
 * Created by PhpStorm.
 * User: Yumna Salimrahmat
 * Date: 7/30/2018
 * Time: 8:44 PM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/select2.css" />
    <!-- text fonts -->
    <link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="./css/ace.min.css" />
    <link rel="stylesheet" href="./css/ace-rtl.min.css" />
</head>
    <body class="login-layout blur-login">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-eye green"></i>
                                    <span class="white">Login</span><span class="red"> App Accounting</span>
                                </h1>
                            </div>
                            <div class="space-6"></div>
                            <div id="loading" style="text-align: center"></div>
                            <div class="position-relative">
                                <div class="widget-body">
                                    <div class="widget-main">
<!--                                        <h5 class="header blue lighter bigger">-->
<!--                                            <i class="ace-icon fa fa-coffee green"></i>-->
<!--                                            Masukkan Akun Anda-->
<!--                                        </h5>-->
                                        <div class="space-6"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-contentainer -->
    </body>
</html>
