<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="#"><img style="width: 140px;" src="<?php echo $this->config->item('base_url'); ?>assets/logotubes.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse w-100 order-4 dual-collapse2" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url();?>index.php/welcome/index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tanya Si Tangker</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kanker
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">kanker Serviks</a>
                <a class="dropdown-item" href="#">Kanker Hati</a>
                <a class="dropdown-item" href="#">Kanker Payudara</a>
                <a class="dropdown-item" href="#">Kanker Paru-paru</a>
                <a class="dropdown-item" href="#">Kanker Lambung</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rumah Sakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" id="btnlogin" href="#"  data-toggle="modal" data-target="#Loginform" >Account <img style="width: 27px;" src="<?php echo $this->config->item('base_url'); ?>assets/person.png" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </nav>

<!-- ini form login modal-->
<div class="modal fade" id="Loginform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #FFC8CB;">
      <div class="modal-body">
        <center><img src="<?php echo $this->config->item('base_url'); ?>assets/logotubes.png" style="width: 300px;" alt="">
        <p style="color: white;">Silahkan login terlebih dahulu</p></center>
        <form action="<?= base_url();?>index.php/welcome/login/" method="post">
          <div class="form-group mb-2 ">
            <label style="color: white;" for="email">Your email</label>
            <input type="email" name="email" id="Form-email" placeholder="Enter Email" class="form-control validate" required="required">
          </div>
          <div class="form-group mb-4">
            <label style="color: white;" for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password"  id="Form-password" class="form-control validate" required="required">
          </div>
          <div class="text-center mb-3">
          <button style="color: white;" type="submit" class="btn btn-secondary">Sign in</button>
        </div>
        </form>
        <center>
          <p>Anda belum punya akun? <a style="color: white;" href="#" data-toggle="modal" data-target="#Registerform" data-dismiss="modal">Buat akun!</a></p>
        </center>
      </div>
    </div>
  </div>
</div>
<!-- -_- -->


<!-- ini form Register modal -->
<div class="modal fade" id="Registerform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #FFC8CB;">
      <div class="modal-body">
        <center><img src="<?php echo $this->config->item('base_url'); ?>assets/logotubes.png" style="width: 300px;" alt="">
        <p style="color: white;">Silahkan Buat akun terlebih dahulu</p></center>
        <form action="<?= base_url();?>index.php/welcome/register/" method="post">
          <div class="row">
            <div class="col">
              <label style="color: white;" for="first-name">First name</label>
              <input type="text" name="firstname" id="Form-firstname" class="form-control validate">
            </div>
            <div class="col">
              <label style="color: white;" for="last-name">Last name</label>
              <input type="text" name="lastname" id="Form-lastname" class="form-control validate">
            </div>
          </div>
          <div class="form-group mb-2 ">
            <label style="color: white;" for="email">Your email</label>
            <input type="email" id="regist-email" class="form-control validate">
          </div>
          <div class="form-group mb-2">
            <label style="color: white;" for="password">Password</label>
            <input type="password" name="regist-password" id="Form-password" class="form-control validate">
          </div>
          <div class="form-group mb-4">
            <label style="color: white;" for="password">Confirm Password</label>
            <input type="password" name="con-password" id="Form-con-password" class="form-control validate">
          </div>
          <div class="text-center mb-3">
          <button style="color: white;" type="submit" class="btn btn-secondary">Sign in</button>
          </div>
        </form>
        <center>
          <p>Anda sudah punya akun? <a style="color: white;" href="#" data-toggle="modal" data-target="#Loginform" data-dismiss="modal" >Login!</a></p>
        </center>
      </div>
    </div>
  </div>
</div>
</body>
</html>