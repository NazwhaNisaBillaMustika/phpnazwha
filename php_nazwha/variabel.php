<?php
//1.Membuat Variabel di PHP
$nama_barang = "Kopi C ++";
$harga = 4000;
$stok = 40;
?>

<?php
//2.Mengambil Nilai dari Variabel 
$nama_barang = "Minyak Goreng";
$harga = 15000;

echo "Ibu Membeli $nama_barang seharga Rp $harga<br>";
?>

<?php
//3.Mengenal Tipe Data di  PHP 

// tipe data char (karakter)
$jenis_kelamin = 'L';

//tipe data string (teks)
$nama_lengkap = "Petani Kode";

//tipe data integer
$umur = 20;

//tipe data float
$berat = 48.3;

//tipe data boolean
$menikah = false;

echo "Nama : $nama_lengkap<br>";
echo "Jenis Kelamin : $jenis_kelamin<br>";
echo "Umur : $umur<br>";
echo "Berat : $berat<br>";
echo "Menikah : $menikah<br>";
?>

<?php
//4.Konversi Tipe Data
$foo = "1" //mula-mula $foo dalam bentuk string (ASCII 49)
$foo = 2; //$foo sekarang adalah integer (2) 
$foo = $foo *1.3 //$foo sekarang adalah float (2.6)
$foo = 5* "10 Little Piggies"; //$foo sekarang adalah integer (50)
$foo = 5* "10 Small Pigs"; //$foo sekarang adalah integer (50)
?>

<?php
//5. Menghapus Variabel dari Memori

// membuat variabel $tmp
$tmp = 2901;

//menghapus variabel $tmp
unset($tmp);

//mencoba mengakses variabel $tmp
echo $tmp
?>