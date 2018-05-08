<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
  <title>UPT Sarpras Bogor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/carousel.css"> 
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="asset/css/style.css">
  <link rel="stylesheet" type="text/css" href="asset/css/modal.css">
  <style>
  .carousel-inner img {
      width: 100%;
  }
  body{
    overflow: hidden;
  }
  .modal{
    overflow: scroll;
  }
  </style>
</head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #006064;height:60px !important">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <a href="/" class="navbar-brand brand" style=""><img src="<?php echo base_url('asset/img/logo.png')?>" alt="" class="logo">UPT Sarpras Olahraga Kabupaten Bogor</a>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
          
          <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="esport.php">Jadwal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Reservation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link modalbtn" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
            </li>
          </ul>
        </div>
        
      </nav>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('asset/img/sc1.jpg')?>" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption pen">
              <h3>Los Angeles</h3>
              <p class="text-center"><a class="btn btn-lg btn-primary" href="#" role="button">Lihat Jadwal</a>&nbsp; <a class="btn btn-lg btn-primary" href="#" role="button">Reservasi</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('asset/img/cs2.jpg')?>" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption pen">
              <h3>Chicago</h3>
              <p class="text-center"><a class="btn btn-lg btn-primary" href="#" role="button">Lihat Jadwal</a>&nbsp; <a class="btn btn-lg btn-primary" href="#" role="button">Reservasi</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('asset/img/photo4.jpg')?>" alt="New York" width="1100" height="500">
            <div class="carousel-caption pen">
              <h3>New York</h3>
              <p class="text-center"><a class="btn btn-lg btn-primary" href="#" role="button">Lihat Jadwal</a>&nbsp; <a class="btn btn-lg btn-primary" href="#" role="button">Reservasi</a></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <div class="footer myfooter">
        <div class="container">
          
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modalLogin">
        <div class="modal-dialog">
          
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:6px 50px;">
              <a  class="close fa fa-close" data-dismiss="modal"></a>
              <h4><span class="glyphicon glyphicon-lock"></span > Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form" action="index">
                <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                  <input type="text" class="form-control" id="psw" placeholder="Masukan Password">
                </div>
                
                <button href="index.htm" type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                <button type="submit" class="btn btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              </form>
            </div>
            
            <div class="modal-footer">
              
              <p>Not a member? <a href="#" class="modalbtn" data-dismiss="modal" data-toggle="modal" data-target="#modalSignUp" >Sign Up</a></p>
              <p>Forgot <a href="#">Password?</a></p>
            </div>
          </div>
          
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modalSignUp">
        <div class="modal-dialog">
          
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:6px 50px;">
              <a  class="close fa fa-close" data-dismiss="modal"></a>
              <h4><span class="glyphicon glyphicon-lock"></span > SignUp</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form" method="post" action="<?php echo base_url()."index.php/helloworld/insert"; ?>">
                <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-user"></span> No. KTP</label>
                  <input type="text" class="form-control" id="usrname" placeholder="16 digit nomor KTP">
                </div>
                <div class="form-group">
                  <label for="nama"><span class="glyphicon glyphicon-eye-open"></span> Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukan nama lengkap anda">
                </div>
                <div class="form-group">
                  <label for="email"><span class="glyphicon glyphicon-eye-open"></span> Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukan Email anda">
                </div>
                <div class="form-group">
                  <label for="noKontak"><span class="glyphicon glyphicon-user"></span> No Kontak</label>
                  <input type="text" class="form-control" id="noKontak" placeholder="16 digit nomor KTP">
                </div>
                <div class="form-group">
                  <label for="nama"><span class="glyphicon glyphicon-eye-open"></span> Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Masukan Alamat lengkap anda"></textarea>
                </div>
                <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                  <input type="text" class="form-control" id="psw" placeholder="Masukan Password">
                </div>
                
                <button href="index.htm" type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button>
                <button type="submit" class="btn btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              </form>
            </div>
            
            <div class="modal-footer">
              
              <p>Already have an account? <a href="#" class="modalbtn" data-toggle="modal" data-target="#modalLogin" data-dismiss="modal">Login</a></p>
              <p>Forgot <a href="#">Password?</a></p>
            </div>
          </div>
          
        </div>
      </div>
      <script src="<?php echo base_url('asset/js/jquery-3.2.1.min.js')?>"></script>
      <script src="<?php echo base_url('asset/js/popper.min.js')?>"></script>
      <script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
      <script src="<?php echo base_url('asset/js/script.js')?>"></script>
    </body>
  </html>