<?php
class bangundatar{

    public $count = "Menghitung Luas";

    public function persegi(){
            $sisi = 5;
            $luas = $sisi * $sisi ;
            echo "<h3>$this->count Persegi</h3>";
            echo "Rumus : sisi x sisi <br>";
            echo "Sisi : $sisi <br>";
            echo "Luasnya : $luas <br>";
    }
    public function persegiPanjang(){
        $panjang = 5;
        $lebar = 4;
        $luas = $panjang * $lebar ;
        echo "<h3>$this->count Persegi Panjang</h3>";
        echo "Rumus : panjang x lebar <br>";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Luasnya : $luas <br>";
    }
    public function segitiga(){
        $luassegitiga = 0.5;
        $alas = 7;
        $tinggi = 8;
        $luas = $luassegitiga * $alas * $tinggi;
        echo "<h3>$this->count Segitiga</h3>";
        echo "Rumus : 1/2 x alas x tinggi <br>";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Luasnya : $luas <br>";
    }
    public function lingkaran(){
        $phi = 3.14;
        $jari = 6;
        $luas = $phi * $jari * $jari;
        echo "<h3>$this->count Lingkaran</h3>";
        echo "Rumus : phi x jari x jari <br>";
        echo "PHI : $phi <br>";
        echo "Jari-Jari : $jari <br>";
        echo "Luasnya : $luas <br>";
    }    
}

$cetak = new bangundatar();

echo $cetak->persegi();
echo"<br>";
echo $cetak->persegiPanjang();
echo"<br>";
echo $cetak->segitiga();
echo"<br>";
echo $cetak->lingkaran();

?>