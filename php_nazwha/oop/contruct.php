<?php

class contoh{

    public function __construct(){
        echo "Assalammualaikum <br>";
    }

    public function perkenalan(){
        echo "Nama saya Nazwha <br>";
    }

    public function __destruct(){
        echo "Hallo";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
?>