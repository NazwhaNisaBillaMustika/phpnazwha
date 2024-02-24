<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Ujikom</title>
</head>
<body>
<center>
    <h2>Data Nilai Ujian Kelas XII RPL</h2>
        <!--  form -->
        <form method= "POST" action="">
            <table>
                <tr>
                    <td>Jumlah Siswa</td>
                    <td>:</td>
                    <td><input type="number" name="js"></td>
                </tr>
                     <tr>
                     <td></td>
                     <td></td>
                     <td><input type="submit" name="simpan" value='PROSES'>
                     </td>
                     </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['simpan'])) {
 $jumlah = $_POST['js'];

 for ($i=1; $i <= $jumlah ; $i++) {
 echo "
    <form>
    <center>
    <table>
    <tr>
    <td></td>
    <td></td>
    <td>Data siswa ke $i</td>
    </tr>
    <tr>
              <td>NIS</td>
              <td>:</td>
              <td><input type=text></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input type=text></td>
            </tr>
            <tr>
              <td>Kelas</td>
              <td>:</td>
              <td><input type=text></td>
            </tr>
            <tr>
              <td>Bahasa Indonesia</td>
              <td>:</td>
              <td><input type=number></td>
            </tr>
            <tr>
              <td>Bahasa Inggris</td>
              <td>:</td>
              <td><input type=number></td>
            </tr>
            <tr>
              <td>Matematika</td>
              <td>:</td>
              <td><input type=text></td>
            </tr>
            <tr>
              <td>Produktif</td>
              <td>:</td>
              <td><input type=text></td>
            </tr>
            </table>
    </form>
        ";
    };
    echo "<table>
    <tr>
              <td></td>
              <td></td>
             <td><input type=submit >
              </td>
      </tr>
      </center>
    </table>";  
};
?>
