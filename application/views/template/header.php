<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UPT Sarpras Bogor</title>
	<link type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css')?>">
	<link type="text/css" href="<?php echo base_url('asset/img/icons/css/font-awesome.css')?>" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        </a><a href="/" class="navbar-brand brand" style=""><img src="<?= base_url('asset/img/logo.png') ?>" alt="" class="logo">UPT Sarpras Olahraga Kabupaten Bogor</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <ul class="nav pull-right">
    
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('asset/img/avatar.png') ?>" class="nav-avatar" />
                                <b class="caret b-w"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url('authentication/auth/logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Home
                                </a></li>
                                <li><a href="datamaster"><i class="menu-icon icon-bullhorn"></i>Data Master </a>
                                </li>
                                <li><a href="penjadwalan"><i class="menu-icon icon-inbox"></i>Penjadwalan</a></li>
                                <li><a href="reservasi"><i class="menu-icon icon-tasks"></i>Reservasi</a></li>
                                <li><a href="akunupt"><i class="menu-icon icon-inbox"></i>Buat Akun UPT</a></li>
                                <li><a href="laporan"><i class="menu-icon icon-tasks"></i>Laporan</a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                     
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
						

					
					</div><!--/.sidebar-->
				</div><!--/.span3-->
