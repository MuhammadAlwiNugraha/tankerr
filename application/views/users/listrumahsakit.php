<!doctype html>
<html lang="en">
  <head>
    <title>Rumah Sakit</title>
  </head>
  <style>
       body{
          background-color: #FFC8CB;
      }
      .awalan{   
        margin-top: 30px;
        color: rgb(255, 255, 255);
      }
     .main-card{
        width: 1213px;
        height: auto;
        background: #FEFEFE;
        box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 30px;
     }
     #sambutan-awal{
        position: absolute;
        width: 604px;
        height: 124px;
        left: 33px;
        top: 202px;
        font-family: PT Sans Caption;
        font-style: normal;
        font-weight: normal;
        font-size: 48px;
        line-height: 62px;
        color: #CA3131;
     }
     .card-isi{
        width: 1034px;
        height: 153px;
        left:65px;
        background: #CFC9C9;
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.6);
     }
  </style>
  <body>
      <div class="container">
        <div class="awalan">
          <h2>Rumah Sakit</h2>
          <p>Daftar rumah sakit yang menangani pasien kanker terpercaya yang ada di Indonesia.</p>
        </div>
      </div><br><hr color="white">

  <center>
      <div class="card main-card text-center">
        <div class="card-body">
            <h3 class="card-title text-left">Rekomendasi untuk anda</h3><br><br>
            <?php foreach($result as $row) {?>
            <div class="row">
                <div class="col">
                    <div class="card card-isi bg-light mb-3">
                            <div class="card-body text-center">
                              <h4 class="card-title"><?php echo $row->nama; ?></h4><hr>
                              <p class="card-text"><?php echo $row->nohp; ?></p>
                              <p><?php echo $row->alamat; ?></p>
                            </div>
                    </div>
                </div>
            </div>
            <?php } ?> 
        </div>
      </div>
  <!-- end main-card -->  
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