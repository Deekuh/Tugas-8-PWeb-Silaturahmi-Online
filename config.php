<?php

$server = "localhost";
$user = "root";
$password = "qwe123";
$nama_database = "silaturahmi";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>