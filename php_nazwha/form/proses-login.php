<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'nazwhanisabilla@gmail') {
  die("Email tidak terdaftar!");
}

if ($password !== 'nazzwhansa') {
  die("Password salah!");
}

echo "Selamat {$email}, anda berhasil login! :)";