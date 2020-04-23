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
      <a class="navbar-brand" href="<?= base_url();?>index.php/welcome/index"><img style="width: 140px;" src="<?php echo $this->config->item('base_url'); ?>assets/logotubes.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse w-100 order-4 dual-collapse2" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url();?>index.php/welcome/tanyatangker">Tanya Si Tangker</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kanker
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/serviks">kanker Serviks</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/hati">Kanker Hati</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/payudara">Kanker Payudara</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/paru">Kanker Paru-paru</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/lambung">Kanker Lambung</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url();?>index.php/welcome/tips">Tips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url();?>index.php/welcome/rumahsakit">Rumah Sakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" id="btnlogin" href="#"  data-toggle="modal" data-target="#Loginform" ><img style="width: 27px;" src="<?php echo $this->config->item('base_url'); ?>assets/person.png" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url();?>index.php/welcome/index"><?php echo $this->session->userdata("email"); ?></a>
            </li>
            <?php if($this->session->userdata('status') == "user"): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('login/logout'); ?>">Logout</a>
            </li>
            <?php endif ?>
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
          <?php if ($this->session->flashdata('success')) : ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <?php elseif($this->session->flashdata('error')) : ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('error') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <?php endif ?>
        <p style="color: white;">Silahkan login terlebih dahulu</p></center>

        <form class="user" method="POST" action="<?= base_url('login/n_login') ?>"> <!-- baru bisa login user -->
                    <div class="form-group">
                      <input type="text" class="form-control" id="email" placeholder="Masukkan email" autocomplete="off" required name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Masukkan Password" required name="password">
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="text-center mb-3">
                    <button type="submit" class="btn btn-secondary" name="login" value="user">Login</button>
                  </div>
        </form>
        <center>
          <p>Anda belum punya akun? <a style="color: white;" href="#" data-toggle="modal" data-target="#Registerform" data-dismiss="modal">Buat akun!</a></p>
          <a style="color: white;" href="#" data-toggle="modal" data-target="#LoginformAdmin" data-dismiss="modal">Admin Login</a>
        </center>
      </div>
    </div>
  </div>
</div>
<!-- -_- -->


<!-- ini form login admin -->
<div class="modal fade" id="LoginformAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #FFC8CB;">
      <div class="modal-body">
        <center><img src="<?php echo $this->config->item('base_url'); ?>assets/logotubes.png" style="width: 300px;" alt="">
          <?php if ($this->session->flashdata('success')) : ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <?php elseif($this->session->flashdata('error')) : ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('error') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <?php endif ?>
        <p style="color: white;">Silahkan login terlebih dahulu</p></center>

        <form class="user" method="POST" action="<?= base_url('login/do_login') ?>"> <!-- baru bisa login admin -->
                    <div class="form-group">
                      <input type="text" class="form-control" id="email" placeholder="Masukkan email" autocomplete="off" required name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Masukkan Password" required name="password">
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="text-center mb-3">
                    <button type="submit" class="btn btn-secondary" name="login" value="admin">Login</button>
                  </div>
        </form>
        <center>
          <p>Anda belum punya akun? <a style="color: white;" href="#" data-toggle="modal" data-target="#Registerform" data-dismiss="modal">Buat akun!</a></p>
        </center>
      </div>
    </div>
  </div>
</div>



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
              <input type="text" name="firstName" id="firstName" required value="<?php echo set_value('firstName'); ?>" class="form-control validate">
            </div>
            <div class="col">
              <label style="color: white;" for="last-name">Last name</label>
              <input type="text" name="lastName" id="lastName" value="<?php echo set_value('lastName'); ?>" required class="form-control validate">
            </div>
          </div>
          <div class="form-group mb-2 ">
            <label style="color: white;" for="email">Your email</label>
            <input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>" required class="form-control validate">
          </div>
          <div class="form-group mb-2">
            <label style="color: white;" for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control validate">
          </div>
          <div class="form-group mb-4">
            <label style="color: white;" for="password">Confirm Password</label>
            <input type="password" name="passconf" id="passconf" class="form-control validate">
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