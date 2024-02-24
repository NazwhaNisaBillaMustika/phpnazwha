
<?php
if(isset($_POST['simpan'])){
    $a = $_POST['nama_lengkap'];
    $b = $_POST['jk'];
    $c = $_POST['tanggal_lahir'];
    $d = $_POST['kategori_olahraga'];
    $e = $_POST['pk'];
    $f = $_POST['kf'];
    $g = $_POST['pembayaran'];
    $diskon = 0;


    if($d == "sepak bola"){
        $harga = 0;
        if ($e == "Pemula") {
            $harga += 200000;
        }elseif ($e == "Menengah"){
            $harga += 250000;
        }elseif ($e == "Lanjutan"){
            $harga += 300000;
        }
    } else if ($d == "bulu tangkis"){
        $harga = 0;
        if ($e == "Pemula"){
            $hrga += 150000;
        }elseif ($e == "Perempuan")
            $diskon += $harga * 0.1;
    } elseif ($e == "Menengah"){
        $harga += 200000;
        if ($b == "Perempuan"){
            $diskon += $harga * 0.1;
        }
    } elseif ($e == "Lanjutan"){
        $harga += 250000;
        if ($b == "Perempuan"){
            $diskon += $harga * 0.1;
        }
    } elseif($d == "renang"){
        $harga = 0;
        if ($e == "Pemula") {
            $harga += 180000;
        }elseif ($e == "Menengah"){
            $harga += 220000;
        }elseif ($e == "Lanjutan"){
            $harga += 270000;
        }
    }
    $total = $harga - $diskon;

        if ($total > 500000){
            $keputusan = "Selamat Anda Mendapat Hadiah";
        }else {
            $keputusan = "Sangat disayangkan total harga";
        }


          echo "=========Formulir Pendaftaran============ <br>";
          echo "========================================= <br>";



     echo "Nama Lengkap = $a <br>";
     echo "Jenis Kelamin = $b <br>";
     echo "Tanggal Lahir = $c <br>";
     echo "Kategori Olahraga = $d <br>";
     echo "Pilihan Kelas = $e <br>";
     echo "Kemampuan Fisik = $f <br>";
     echo "Pembayaran = $g <br>";
     echo "Harga  = Rp. $harga <br>";
     echo "Diskon = Rp. $diskon <br>";
     echo "Total = Rp. $total <br>";
     echo "<br>";
     echo $keputusan;
    }
?>