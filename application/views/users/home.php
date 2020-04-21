<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
  </head>
  <style>
      .navbar{
        width: 100%;
      }
      .jumbotron{
        position: relative;
        width: 1280px;
        height: 620px;
        background: #FFC8CB;
      }
      .welcome{
        position: absolute;
        width: 520px;
        height: 216px;
        left: 57px;
        top: 180px;
        font-family: Play;
        font-style: normal;
        font-weight: normal;
        font-size: 90px;
        line-height: 108px;
        color: black;
      }
      .welcome2{
        position: absolute;
        width: 441px;
        height: 113px;
        left: 100px;
        top: 280px;
      }
      .welcome3{
        position: absolute;
        width: 310px;
        height: 56px;
        left: 263px;
        top: 420px;
        font-family: Play;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 28px;
        text-align: right;
        color: #000000;
      }
      .img2{
        position: absolute;
        width: 529px;
        height: 430px;
        left: 618px;
        top: 100px;

      }
      .rectangle2{
        position: absolute;
        width: 528px;
        height: 430px;
        left: 656px;
        top: 75px;
        background: #B49E9E;
      }
      .rectangle1{
        position: absolute;
        width: 528px;
        height: 430px;
        left: 702px;
        top: 44px;
        background: #CCB1B1;
      }
      .jumbotron-dua{
        width: 640px;
      height: 673px;
      background-color:#BA7777;
      }
      .btn-secondary{
        background: #BA7777;
        width: 95px;
        height: 40px;
        font-size: 13px;
      }
      .imgfooter{
        position: absolute;
        width: 300px;
        height: 90px;
        left: 490px;
      }
      
  </style>
<body>
  <center>
    <div class="jumbotron">
        <h1 class="display-4 welcome">Welcome To</h1>
        <img class="welcome2" src="<?php echo $this->config->item('base_url'); ?>assets/logotubes.png" alt="">
        <p class="welcome3">Tenang, sekarang Kamu bisa Terhindar dari Kanker</p>
        <div class="rectangle1"></div>
        <div class="rectangle2"></div>
        <img class="img2" src="<?php echo $this->config->item('base_url'); ?>assets/img2.jpg" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h3>Anda Merasa sakit?</h3><hr>
        </div>
      </div><br><br>
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4 text-center">
          <img style="height: 110px; width: 110px; left: 100px; " src="<?php echo $this->config->item('base_url'); ?>assets/question.png" alt="">
          <h4>Tanya Si Tangker</h4>
          <p style="text-align: center;">Bertanya sama si Tangker tentang kanker <br> kapan saja dan dimana saja</p>
          <button type="button" class="btn btn-secondary">Learn more</button>
        </div>
        <div class="col mb-4 text-center">
          <img style="height: 110px; width: 110px; " src="<?php echo $this->config->item('base_url'); ?>assets/hospital.png" alt="">
          <h4>Rumah Sakit</h4>
          <p style="text-align: center;">Daftar rumah sakit yang menangani pasien kanker</p>
          <button type="button" class="btn btn-secondary">Learn more</button>
        </div>
        <div class="col mb-4 text-center">
          <img style="height: 110px; width: 110px; " src="<?php echo $this->config->item('base_url'); ?>assets/lamp.png" alt="">
          <h4>Tips</h4>
          <p style="text-align: center;">Tips terkait pencegahan dan pengobatan penyakit kanker</p>
          <button type="button" class="btn btn-secondary">Learn more</button>
        </div>
      </div>
    </div><br><br>
  </center>
      <!-- <div class="row">
        <div class="col text-center" style="background-color: #e7e0e8;">
          <div style="margin-top: 170px;">
              <h1 >Apakah Kamu Tau?</h1>
              <p class="lead">Hari Kanker Sedunia dirayakan 
                setiap 4 Februari untuk meningkatkan 
                kesadaran terhadap kanker dan mendorong 
                pencegahan, deteksi, dan pengobatan kanker. </p>
              <a class="btn" style="background-color: gray;" href="#" role="button">Learn more</a>
            </div>
        </div>
        <div class="col" style="padding-left: 0px;">
          <img src="kanker.jpg" style="width: 106%;" alt="">
        </div>
      </div>
      
      <br><hr>
        <div class="lastimg">
          <img class="imgfooter" src="logotubes.png" alt="">
        </div>
        <br><br><br><br> -->
              <footer style="background-color: rgb(173, 110, 110); color: white;" class="main-footer text-center">
        <strong> &copy Tangker, 2020</strong>
      </footer>
        



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>