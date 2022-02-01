<?php

$server = "localhost";
$user = "phpmyadmin";
$password = "P@ssw0rdnyaphp";
$nama_database = "tpsig-pasar";

$db = mysqli_connect($server, $user, $password, $nama_database);

if ( !$db ){
    die("Gagal terhubung dengan database: ". mysqli_connect_error());
}

?>