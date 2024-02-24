<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Data Orang Tua</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="form.php">Pendaftaran <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">Data Ortu<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="card bg-info  mt-5 ml-5 mr-5">
<div class="card-header">
     Data Orang Tua
</div>
<div class="card-body">
<form method="post"action="">
<div class="form-group">
<form action="proses-form-pendaftaran.php" method="POST">
    <div>
        <label>Nama Ayah</label> <br>
        <input type="text" name="nama_ayah" class="form-control">
    </div>
    <div>
        <label>Tanggal Lahir (Ayah)</label> <br>
        <input type="date" name="tanggal_lahir_ayah" class="form-control">
    </div>
    <div>
        <label>Nama Ibu</label> <br>
        <input type="text" name="nama_ibu" class="form-control">
    </div>
    <div>
        <label>Tanggal Lahir Ibu</label> <br>
        <input type="date" name="tanggal_lahir_ibu" class="form-control">
    </div>
      <button type="submit" class="btn btn-success" name="daftar">daftar</button>
</form>
</div>
</div>
</body>
</html>
<?php
if (isset($_POST['daftar'])){
    $nama_ayah = $_POST ['nama_ayah'];
    $tanggal_lahir_ayah = $_POST ['tanggal_lahir_ayah'];
    $nama_ibu = $_POST ['nama_ibu'];
    $tanggal_lahir_ibu = $_POST ['tanggal_lahir_ibu'];
    class hasil{
    public function pendaftaran ($nama_ayah2,$tanggal_lahir_ayah2,$nama_ibu2,$tanggal_lahir_ibu2){
        ?>
        <center>
          <div class="card text-white bg-success mb-3" style="max-width: 40rem;">
          <div class="card-header"><h3>Hasil Data Orang Tua</h3></div>
          <div class="card-body text-white">
          <h5 class="card-title">Pendaftaran Sukses</h5>
          <table>
            <tr>
              <td>Nama Depan</td>
              <td>:</td>
              <td><?php echo $nama_ayah2 ?></td>
            </tr>
            <tr>
              <td>Nama Belakang</td>
              <td>:</td>
              <td><?php echo $tanggal_lahir_ayah2 ?></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td><?php echo $nama_ibu2 ?></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>:</td>
              <td><?php echo $tanggal_lahir_ibu2 ?></td>
            </tr>
            </table>
        </div>
      </div>
          </center>
    <?php
    }
}

$cetak = new hasil();
echo $cetak->pendaftaran($nama_ayah,$tanggal_lahir_ayah,$nama_ibu,$tanggal_lahir_ibu);
}
?>