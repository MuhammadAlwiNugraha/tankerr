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
        width: 826px;
        height: 505px;
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
        left: 10px;
        top: 150px;
      }
      #inputnama{
        position: absolute;
        width: 350px;
        height: 33px;
        left: 60px;
        top: 180px;
        border-color: black;
      }
      #label2{
        position: absolute;
        width: 191px;
        height: 36px;
        left: 10px;
        top: 225px;
      }
      #inputemail{
        position: absolute;
        width: 350px;
        height: 33px;
        left: 60px;
        top: 255px;
        border-color: black;
      }
      #label3{
        position: absolute;
        width: 191px;
        height: 36px;
        left: 7px;
        top: 300px;
      }
      #inputpassword{
        position: absolute;
        width: 350px;
        height: 33px;
        left: 60px;
        top: 330px;
        border-color: black;
      }
      #btnubah{
        margin-top: 250px;
        margin-right: 635px;
      }
      .img-hiasan{
        width: 431px;
        height: 386px;
        top: 120px;
        margin-left: 280px;
        
      }
  </style>
<body>
<div class="container">
          <div class="awalan">
              <h2>Data Akun</h2>
          </div>
      </div>
      <hr color="white">

      <center>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title text-left ">Ini data akun kamu!</h5>
              <p class="card-text text-left">*Silahkan ubah data kamu jika perlu</p>
              <img class="img-hiasan" src="Imghome/orang2.png" alt="">
              <form action="">
                  <div class="form-group">
                    <label id="label2" for="email">Email kamu</label>
                    <input type="email" id="inputemail" value="<?php echo $this->session->userdata("email"); ?>" name="email" class="form-control validate" disabled>
                  </div>
                  <div class="form-group">
                    <label id="label1" for="">Nama kamu</label>
                    <input type="text" id="inputnama" name="nama" class="form-control validate">
                  </div>
                  <div class="form-group">
                    <label id="label3" for="">Password</label>
                    <input type="password" id="inputpassword" name="password"class="form-control validate">
                  </div>
                  <button type="submit" id="btnubah" class="btn btn-secondary">ubah</button>
              </form>
            </div>
          </div>s
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