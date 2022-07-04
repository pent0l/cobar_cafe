<?php
require_once "koneksi.php";
$jenisMenu= $_POST['id_jenis_menu'];
$namaMenu = $_POST['nama_menu'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$idMenu = $_POST['id_menu'];

$query = mysqli_query($conn, "Update menu set id_jenis_menu='$jenisMenu', nama_menu='$namaMenu', stok='$stok', harga='$harga' where id_menu='$idMenu'");


if ($query) {
	echo "<script> alert('Data Berhasil Di Ubah');
	window.location.href='data_menu.php'</script>";

} else {
	echo "<script> alert('Data Gagal Di Ubah');
	window.location.href='data_menu.php'</script>";


}

?>
