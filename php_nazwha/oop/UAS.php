<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>uas</title>
  </head>
  <body>
  <center>
  <img src="yayasan2.jpg.png"  alt="..." width="300">
  <h3>PENGGAJIHAN</h3>
  <h3> GURU/KARYAWAN YAYASAN ASSALAAM</h3>
</center>

<div class="card mt-5 ml-5 mr-5  bg-light text-dark">
<div class="card-header">
     Pendaftaran
</div>
<div class="card-body">
<form method="post"action="">
<div class="form-group">
<form action="proses-form-pendaftaran.php" method="POST">
    <div>
        <label>No</label> <br>
        <input type="text" name="no" class="form-control" placeholder="no">
    </div>
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama" class="form-control" placeholder="nama">
    </div>
    <div class = "form-group">
        <label>Unit Pendidikan</label> <br>
        <select name="unit" class="form-control">
            <option value="tk">TK</option>
            <option value="sd">SD</option>
            <option value="smp">SMPO</option>
            <option value="sma">SMA</option>
            <option value="smk">SMK</option>
        </select>
    </div>
    <div>
        <label>Tanggal Gaji</label> <br>
        <input type="date" name="tanggal" class="form-control mt-3 mb-3" >
    </div>
    
    <div class="form-group">
    <h2>Gaji</h2>
    </div>
    <form>
    <div class = "form-row">
  <div class="col-md-6 mb-3">
        <label>Jabatan</label> <br>
        <select name="jabatan" class="form-control mt- mb-3">
            <option>Kepala Sekolah</option>
            <option>Wakasek</option>
            <option>Guru</option>
            <option>Karyawan</option>
        </select>
    </div>
    <div class="col-md-6">
      <h2>Potongan</h2>
      <label for="validationDefault02">BPJS</label>
      <input type="text" class="form-control" name="bpjs" id="validationDefault02" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Lama Kerja</label>
      <input type="text" class="form-control" name="lama" id="validationDefault02" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Pinjaman</label>
      <input type="text" class="form-control" name="pinjaman" id="validationDefault02" required>
    </div>
    <div class="col-md-6 mb-3">
        <label>Status Kerja</label> <br>
        <select name="status" class="form-control mt- mb-3" value="pilih status kerja">
            <option>tetap</option>
            <option>kontrak</option>
        </select>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Tabungan</label>
      <input type="text" class="form-control" name="tabungan" id="validationDefault02" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Lainnya</label>
      <input type="text" class="form-control" name="lainnya" id="validationDefault02" required>
    </div>
  </div>

  
  
    
<div><center>
  <button type="submit" class="btn btn-primary mt-3" name="daftar">proses</button></center>
</form>
</div>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
-->
  </body>
</html>


<?php
if (isset($_POST['daftar'])){
    
    $no = $_POST ['no'];
    $nama = $_POST ['nama'];
    $unit = $_POST ['unit'];
    $tanggal = $_POST ['tanggal'];
    $jabatan = $_POST ['jabatan'];
    $bpjs = $_POST ['bpjs'];
    $lama = $_POST ['lama'];
    $pinjaman = $_POST ['pinjaman'];
    $status = $_POST ['status'];
    $tabungan = $_POST ['tabungan'];
    $lainnya = $_POST ['lainnya'];
    $gaji_bersih;

    if($jabatan == "Kepala Sekolah"){
        $gaji = 5000000;
    } elseif ($jabatan== "Wakasek"){
        $gaji = 4000000;
    } elseif ($jabatan== "Guru"){
        $gaji = 3000000;
    } elseif ($jabatan== "Karyawan"){
        $gaji = 2000000;
    } else {
        echo "Pilihan Jabatan Anda";
    
    } if($status=== "tetap"){
        $bonus = 100000;
    } elseif ($status== "kontrak"){
        $bonus = 0;        
    } else {
        echo "Pilih status Kerja Anda";
    }

    $gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;

    class hasil{

        public function pendaftaran ($no2,$nama2,$unit2,$tanggal2,$jabatan2,$bpjs2,$lama2,$pinjaman2,$status2,$tabungan2,$lainnya2,$gaji2,$bonus2,$gaji_bersih2){
  ?>

          <center>
          <div class="card text-white bg-info mb-3" style="max-width: 40rem;">
        <div class="card-header"><h3>Hasil Pendaftaran</h3></div>
        <div class="card-body text-white">
          <h5 class="card-title">Pendaftaran Sukses</h5>
          <table>
            <tr>
              <td>No</td>
              <td>:</td>
              <td><?php echo $no2 ?></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><?php echo $nama2 ?></td>
            </tr>
            <tr>
              <td>Unit pendidikan</td>
              <td>:</td>
              <td><?php echo $unit2 ?></td>
            </tr>
            <tr>
              <td>Tanggal Gaji</td>
              <td>:</td>
              <td><?php echo $tanggal2 ?></td>
            </tr>
            <tr>
              <td>Jabatan</td>
              <td>:</td>
              <td><?php echo $jabatan2 ?></td>
            </tr>
            <tr>
              <td>Gaji</td>
              <td>:</td>
              <td><?php echo $gaji2 ?></td>
            </tr>
            <tr>
              <td>Bpjs</td>
              <td>:</td>
              <td><?php echo $bpjs2 ?></td>
            </tr>
            <tr>
              <td>Lama kerja</td>
              <td>:</td>
              <td><?php echo $lama2 ?></td>
            </tr>
            <tr>
              <td>Pinjaman</td>
              <td>:</td>
              <td><?php echo $pinjaman2 ?></td>
            </tr>
            <tr>
              <td>Status kerja</td>
              <td>:</td>
              <td><?php echo $status2 ?></td>
            </tr>
            <tr>
              <td>Bonus</td>
              <td>:</td>
              <td><?php echo $bonus2 ?></td>
            </tr>
            <tr>
              <td>Tabungan</td>
              <td>:</td>
              <td><?php echo $tabungan2 ?></td>
            </tr>
            <tr>
              <td>Lainnya</td>
              <td>:</td>
              <td><?php echo $lainnya2 ?></td>
            </tr>
            <tr>
              <td>Gaji Bersih</td>
              <td>:</td>
              <td><?php echo $gaji_bersih2 ?></td>
            </tr>
          </table>
        </div>
      </div>
          </center>
    <?php
    }
}

$p = new hasil();

echo $p->pendaftaran($no,$nama,$unit,$tanggal,$jabatan,$bpjs,$lama,$pinjaman,$status,$tabungan,$lainnya,$gaji,$bonus,$gaji_bersih);
}
?>