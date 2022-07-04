<?php
include_once "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM menu WHERE id_menu='$id'");

if ($query){
	echo "<script> alert ('Data Berhasil Di Hapus');
	window.location.href='data_menu.php'</script>";
} else {
	echo "<script> alert('Data Gagal Di Hapus');
	window.location.href='data_menu.php'</script>";
}