<?php
session_start();
include("prosesregistrasi.php");
if (!isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

if (isset($_POST["submit"])) {
  tambah($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Akta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/stylesheet.css" />
</head>

<body>
  <?php include("nav.php") ?>
  <img class="background" src="img/bg2.jpg" alt="background" width="1550px" height="1024px" />
  <!-- clientform -->
  <div class="container">
    <div class="row justify-content-around" style="padding-top: 4rem;">
      <div class="col-md-8 mb-3">
        <div class="card">
          <h5 class="card-title text-bg-primary">Silahkan Upload masing-masing data yang diminta dengan benar</h5>
          <form action="" method="post" enctype="multipart/form-data">
            Masukan nama anda
            <input type="text" name="nama"> <br>
            <input type="file" name="kelahiran" />
            Upload Surat Keterangan Kelahiran dari Dokter/Bidan
            <input type="file" name="suratnikah" />
            Upload Surat Nikah atau Akta Perkawinan OrangTua <br>
            <input type="file" name="kk" />
            Upload Kartu Keluarga<br>
            <input type="file" name="ktp" />
            Upload KTP <br>

            <br />
            <input type="submit" class="btn btn-primary btn-block" name="submit" />
          </form>
        </div>
      </div>
      <div class="col-md-2 " style="padding-top: 10rem;">
        <div class="card">
          <label for="AKKDesa" style="padding-top: 1rem; text-align: center;">FOTO</label>
          <input id="akkd" type="file" class="form-control" name="akkd" required autofocus>
        </div>
      </div>
    </div>
  </div>


  <!-- akhir client form -->

</body>

</html>