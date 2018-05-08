<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Akun UPT</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
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
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Tambah Akun UPT</h3>
							</div>
							<div class="module-body">
									
									<div class="alert alert-error hidden"><!--unhide pada saat ada data yang belum diisi/tidak sesuai-->
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Whats wrong with you? 
									</div>
									<div class="alert alert-success hidden"><!--unhide pada saat ada data prosses berhasil-->
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong> Now you are listening me :) 
									</div>

									<br />

									<form class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">No</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="id petugas" class="span2">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Nama Petugas</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Nama" class="span4">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Sarana</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span5">
													<option value="">Pilih Sarana</option>
													<option value="Category 1">First Row</option>
													<option value="Category 2">Second Row</option>
													<option value="Category 3">Third Row</option>
													<option value="Category 4">Fourth Row</option>
												</select>
                                                <input type="text" id="id" placeholder="Id Sarana" class="span2" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Isi Username" class="span4">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="password" id="basicinput" placeholder="Isi Password" class="span4">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label">Level</label>
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="admin" checked="">
													admin
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="upt">
													upt
												</label> 
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Submit Form</button>
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
	<script src="<?php echo base_url('asset/scripts/datatables/jquery.dataTables.js')?>"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>