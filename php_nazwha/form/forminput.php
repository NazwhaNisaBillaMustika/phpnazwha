<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Diri</title>
</head>
<body>
    <center>
    <h2>Form Biodata Diri</h2>
    <!-- form -->
      <form method = "POST" action= "">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
            </tr>
            <tr>
                <td>Tanggal_lahir</td>
                <td>:</td>
                <td><input type='date' name='tanggal_lahir'></td>
            </tr>
            <tr>
                <td>Jenis_Kelamin</td>
                <td>:</td>
                <td><input type='radio' name='Jenis_kelamin' value ="Perempuan">Perempuan
                    <input type='radio' name='Jenis_kelamin' value ="Laki-Laki">Laki-laki
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agm">
                    <option value="">Pilih</option>
                    <option value="islam">islam</option>
                    <option value="katolik">katolik</option>
                    <option value="budha">budha</option>
                    <option value="kristen">kristen</option>
                 </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan_terakhir</td>
                <td>:</td>
                <td><select name="pt">
                    <option value="">Pilih</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="Kuliah">Kuliah</option>
                 </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type='text' name='status'></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type='text' name='hobi'></td>
            </tr>
            <tr>
                <td>Cita_cita</td>
                <td>:</td>
                <td><input type='text' name='cita_cita'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value='KIRIM'></td>
            </tr>
        </table>
    </Form>
    </center>
</body>
</html>
<?php

if (isset($_POST['simpan'])){
    $a = $_POST['nama'];
    $b = $_POST['tanggal_lahir'];
    $c = $_POST['Jenis_kelamin'];
    $d = $_POST['alamat'];
    $e = $_POST['agm'];
    $f = $_POST['pt'];
    $g = $_POST['status'];
    $h = $_POST['hobi'];
    $i = $_POST['cita_cita'];


          echo "========= Biodata Diri =========<br>";
          echo "================================<br>";
          echo "Nama = $a <br>";
          echo "Tanggal_Lahir = $b <br>";
          echo "Jenis_kelamin = $c <br>";
          echo "Alamat = $d <br>";
          echo "Agama = $e <br>";
          echo "Pendidikan_terakhir = $f <br>";
          echo "Status= $g <br>";
          echo "Hobi = $h <br>";
         echo "Cita_cita = $i <br>";


}
?>
