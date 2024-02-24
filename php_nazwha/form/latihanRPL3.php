<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar SMK</title>
</head>
<body>
    <center>
    <h2>Daftar SMK</h2>
        <!--  form -->
        <form method= "POST" action="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="masukan nama"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggallahir" placeholder="tanggal lahir anda"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type='radio' name='jk' value ="Laki-Laki">Laki-Laki
                        <input type='radio' name='jk' value ="Perempuan">Perempuan
                    </td>
                <tr>
                    <td>Biaya Registrasi</td>
                    <td>:</td>
                    <td><input type="number" name="br" ></td>
                </tr>
                <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan">
                    <option value="">.....</option>
                    <option value="rpl">RPL</option>
                    <option value="tkro">TKRO</option>
                    <option value="tbsm">TBSM</option>
                   </select>
            </tr>
                <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value='KIRIM'></td>
            </tr>
            </table>
        </form>
    </center>
</body>
</html>
<?php

if (isset($_POST['simpan'])){
    $a = $_POST['nama'];
    $b = $_POST['tanggallahir'];
    $c = $_POST['jk'];
    $d = $_POST['br'];
    $e = $_POST['jurusan'];
    $bj = 0;


        if ($e = "RPL") {
            $bj += 2500000;
        } elseif ($e = "TKRO") {
            $bj += 3000000;
        } elseif ($e = "TBSM"){
            $bj += 3500000;
        } else {
            echo "Pilih Jurusan Terlebih Dahulu";
        }
        
        $total = $bj + $d;

          echo "========= Struk Register =========<br>";
          echo "================================<br>";
          echo "Nama = $a <br>";
          echo "Tanggal Lahir = $b <br>";
          echo "Jenis Kelamin = $c <br>";
          echo "Biaya Register = $d <br>";
          echo "Jurusan = $e <br>";
          echo "Biaya Jurusan :Rp. $bj <br>";
          echo "Total Pembelian :Rp. $total <br>";
          

}
?>


