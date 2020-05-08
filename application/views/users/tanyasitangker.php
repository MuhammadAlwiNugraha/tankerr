<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tangker</title>
  </head>
  <style>
      body{
          background-color: #E7A3A3;
      }
      .awalan{   
        margin-top: 30px;
        color: rgb(255, 255, 255);
      }

      .card{
        width: 893px;
        height: 800px;
        box-shadow: 5px 4px 5px #565252;
      }
      .card-title{
        font-size: 50px;
      }
      .imgcard{
        position: absolute;
        width: 172px;
        height: 166px;
        top: 25px;
        right: 100px;
      }
      .img-hiasan{
        position: absolute;
        width: 200px;
        height: 538px;
        left: 100px;
        top: 230px;
      }
      #label1{
        position: absolute;
        width: 191px;
        height: 36px;
        left: 350px;
        top: 270px;
      }
      #inputnama{
        position: absolute;
        width: 409px;
        height: 33px;
        left: 400px;
        top: 295px;
        border-color: black;
      }
      #label2{
        position: absolute;
        width: 191px;
        height: 36px;
        left: 350px;
        top: 350px;
      }
      #inputemail{
        position: absolute;
        width: 409px;
        height: 33px;
        left: 400px;
        top: 375px;
        border-color: black;
      }
      #label3{
        position: absolute;
        width: 191px;
        height: 36px;
        left: 395px;
        top: 430px;
      }
      #input-tanya{
        position: absolute;
        width: 409px;
        height: 230px;
        left: 400px;
        top: 455px;
        border-color: black;
      }
      #btntanya{
        margin-top: 520px;
        margin-left: 650px;
      }
      #imgakhir{
        width: 421px;
        height: 113px;
        margin-left: 445px;
        
      }
  </style>
  <body>
      <div class="container">
          <div class="awalan">
              <h2>Tanya seputar kanker hanya di Tangker</h2>
              <p>Kini kamu bisa tanya tanya seputar kanker hanya di Tangker. Layanan kesehatan online terpercaya
                di Indonesia ini memiliki daftar dokter pilihan terbaik di bidangnya masing-masing. Mulai dari dokter umum 
                yang bisa membantu menjawab keluhan tentang kanker, hingga dokter spesialis kanker berpengalaman dan terpercaya yang Terdiri 
                dari banyak jenis dokter spesialis kanker. Mulai dari dokter kanker kulit, kanker payudara, spesialis kanker hati, dll. Semua informasi
                dari kami akan memberikan yang kamu butuhkan. untuk memberi jalan keluar atas masalah kesehatan yang lebih berat. 
                Jangan tunggu hingga parah, langsung konsultasikan kondisi kesehatan kamu agar bisa segera ditangani oleh yang 
                berpengalaman hanya di TANGKER!</p>
          </div>
      </div>
      <br><hr color="white">

      <center>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title text-left ">Si Tangker Butuh <br> Pertanyaan dari kamu</h5>
              <p class="card-text text-left">*Silahkan isi form dibawah ini</p>
              <img class="imgcard" src="<?php echo $this->config->item('base_url'); ?>assets/form.png" alt="">
              <img class="img-hiasan" src="<?php echo $this->config->item('base_url'); ?>assets/orang.png" alt="">
              <form method="post" action="<?= base_url();?>index.php/C_tanyatangker/create">
                  <div class="form-group">
                    <label id="label1" for="">Nama kamu</label>
                    <input type="text" id="inputnama" name="nama" class="form-control validate">
                  </div>
                  <div class="form-group">
                    <label id="label2" for="email">Email kamu</label>
                    <input type="email" id="inputemail" name="email" class="form-control validate">
                  </div>
                  <div class="form-group">
                    <label id="label3" for="">Apa Pertanyaan Kamu?</label>
                    <textarea class="form-control" id="input-tanya" name="pertanyaan" ></textarea>
                  </div>
                  <button type="submit" id="btntanya" class="btn btn-secondary">Tanyakan</button>
              </form>
            </div>
          </div>
      </center>
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
