<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "cobar_cafe";

$conn = mysqli_connect ($host, $username, $password, $database);

if(!$conn){
	echo "Koneksi Gagal : " . mysqli_connect_error();
}