<?php
$host="localhost";
$user="root";
$password="";
$database="olshop";

$connect = mysqli_connect($host, $user, $password, $database);
if(!$connect){
    echo "Koneksi Gagal: ".mysqli_connect_error();
}
?>