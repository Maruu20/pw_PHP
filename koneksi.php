<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = mysqli_connect($server, $username, $password, $database);

if(mysqli_connect_error()){
    echo "Koneksi Gagal";
} else { 
    echo  "Koneksi Berhasil";
}
 
?>