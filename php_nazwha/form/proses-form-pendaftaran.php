<?php
if(isset($_POST['simpan'])){
    $a = $_POST['nama'];
    $b = $_POST['email'];
    $c = $_POST['usia'];
    $d = $_POST['tanggal_lahir'];
    $e = $_POST['alamat'];
    $f = $_POST['jenis_kelamin'];
    $g = $_POST['status'];
    $h = $_POST['hobi'];


    echo "Nama = $a<br>";
    echo "Email = $b<br>";
    echo "Usia = $c<br>";
    echo "Tanggal Lahir = $d<br>";
    echo "Alamat = $e<br>";
    echo "Jenis Kelamin = $f<br>";
    echo "Status = $g<br>";
    echo "Hobi = $h<br>";
}
?>
