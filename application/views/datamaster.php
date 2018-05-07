<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Master</title>
	<link type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css')?>">
	<link type="text/css" href="<?php echo base_url('images/icons/css/font-awesome.css')?>" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        </a><a href="/" class="navbar-brand brand" style=""><img src="asset/img/logo.png" alt="" class="logo">UPT Sarpras Olahraga Kabupaten Bogor</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <ul class="nav pull-right">
    
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="asset/img/avatar.png" class="nav-avatar" />
                                <b class="caret b-w"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="utama.html">Logout</a></li>
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


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Data Sarana Prasarana Olahraga</h3>
							</div>
							<div class="module-body">
                               <div class=" clearfix">
                                   <div class="pull-left">
								    <form class="form-horizontal row-fluid input-append" action="#">
                                        <div class="control-group">
                                        <label class="control-label" for="basicinput">Nama Sarana Olahraga</label>
                                            <div class="controls">
						              <input type="text" class="span10">
						                  <button class="btn" type="button">
							                 <i class="icon-search"></i>
						                  </button>
                                            </div>
                                            </div>
					                </form>
                                   </div>
                                   <div class="pull-right">
                                        <a href="#" class="btn btn-success"><i class="icon-plus">&nbsp Tambah </i></a>
                                    </div>
                                </div>
                                <hr>
								<table class="table table-striped table-bordered table-condensed">
								  <thead>
									<tr>
									  <th>No</th>
									  <th>Nama Sarana</th>
									  <th>Jenis Olahraga</th>
									  <th>Lokasi</th>
									  <th>Foto</th>
									  <th class="span2 align-center">Aksi</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
									<tr>
									  <td>1</td>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									  <td>@mdo</td>
									  <td class="align-center">
                                        <button class="btn btn-mini btn-warning"><i class="icon-edit"></i></button> | 
                                        <button class="btn btn-mini btn-danger"><i class="icon-trash"></i></button>
                                      </td>
									</tr>
								  </tbody>
								</table>

								<br/>
								
								<br>
							</div>
						</div>

						<div class="module">
							<div class="module-head">
								<h3>Forms</h3>
							</div>
							<div class="module-body">

									
									<br />

									<form class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Sarana</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Masukan nama sarana" class="span8">
												<span class="help-inline"></span>
											</div>
										</div>

										

										<div class="control-group">
											<label class="control-label">Jenis Olahraga</label>
											<div class="controls">

												
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Sepak Bola
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Voli
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Futsal
												</label>
											</div>
											<div class="controls">
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Renang
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Bulutangkis
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Sepeda
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Lokasi</label>
											<div class="controls">
												<textarea class="span8" rows="5"></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Foto</label>
											<div class="controls">
												<input name="FOTO" class="form-control" type="file" >
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-success">Submit Form</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer myfooter">
    <div class="container">
       

    </div>
  </div>

	<script src="<?php echo base_url('asset/scripts/jquery-1.9.1.min.js')?>" type="text/javascript"></script>
        <script src="<?php echo base_url('asset/scripts/jquery-ui-1.10.1.custom.min.js')?>" type="text/javascript"></script>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
</body>