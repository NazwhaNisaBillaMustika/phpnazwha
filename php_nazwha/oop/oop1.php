<?php
class Manusia{

    public $nama = "Farel";
    public $nama2 = "Billa";

    public function makan(){
        echo" $this->nama Suka Makan Sempol Ayam";
    }
    public function minum(){
        echo" $this->nama2 Suka Minum Jus";
    }
}

$cetak = new Manusia();

echo $cetak->makan();
echo"<br>";
echo $cetak->minum();



?>