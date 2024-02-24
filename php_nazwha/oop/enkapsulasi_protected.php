<?php

class manusia{


    public $nama = "Farel Alfio";
    protected function tampilkan_nama(){
        echo "Nama saya Nazwha Nisa Billa Mustika <br>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }
}

$cetak = new manusia();
//manggil method
echo $cetak->keluarkan();
//manggil property
echo $cetak->nama;
