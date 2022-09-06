<?php
    $tanggal = date('Y-m-d');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url();?>assets/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url();?>assets/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url();?>assets/login/css/style.css">

    <title><?= $title;?></title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url();?>assets/login/images/header.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10">
            <div class="form-block">
              <div class="text-center mb-5">
              <h2>Buku Tamu</h2>
              <h4><strong>DISKOMINFO KOTA SEMARANG</strong></h4>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="<?= base_url('welcome/simpan');?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Handphone</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp" required> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" value="<?= $tanggal;?>" id="tanggal" name="tanggal" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <textarea class="form-control" id="keperluan" name="keperluan" required></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    

    <script src="<?= base_url();?>assets/login/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url();?>assets/login/js/popper.min.js"></script>
    <script src="<?= base_url();?>assets/login/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>assets/login/js/main.js"></script>
  </body>
</html>