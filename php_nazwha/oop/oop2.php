<?php
class Manusia{

    public $nama;
    public $jenis_kelamin;


    public function makan(){
        echo"Nazwha Suka Makan Sempol Ayam";
    }
    public function minum(){
        echo "Nazwha Suka Minum Jus";
    }
}

$cetak = new Manusia();

echo $cetak->makan();
echo"<br>";
echo $cetak->minum();



?>