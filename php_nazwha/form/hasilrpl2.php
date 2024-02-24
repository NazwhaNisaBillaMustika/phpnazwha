<?php
$a = $_POST['nama'];
$b = $_POST['tahunlahir'];

if ($b >= 1944 && $b <= 1964){
    $generasi = "Baby boomer";
}elseif($b >= 1965 && $b <= 1979){
    $generasi = "Generasi X";
} elseif($b >= 1980 && $b <= 1994){
    $generasi = "Generasi Y (Mellenials)";
}elseif($b >= 1995 && $b <= 2015) {
    $generasi = "Generasi Z";
}else {
    $generasi = "Generasi tidak terdefinisi";
}
echo "Nama : $a <br>";
echo "Tahun : $b <br>";
echo "berdasarkan tahun lahir anda tergolong $generasi<br>"
?>