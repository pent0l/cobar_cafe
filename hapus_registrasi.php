<?php
include_once "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM user WHERE id_user='$id'");

if ($query){
	echo "<script> alert ('Data Berhasil Di Hapus');
	window.location.href='data_registrasi.php'</script>";
} else {
	echo "<script> alert('Data Gagal Di Hapus');
	window.location.href='data_registrasi.php'</script>";
}