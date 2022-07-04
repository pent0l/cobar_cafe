<?php
require_once "koneksi.php";
$namaLengkap = $_POST['nama_lengkap'];
$level = $_POST['level'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$idUser = $_POST['id_user'];

$query = mysqli_query($conn, "Update user set nama_lengkap='$namaLengkap', level='$level', username='$username', password='$password' where id_user='$idUser'");


if ($query) {
	echo "<script> alert('Data Berhasil Di Ubah');
	window.location.href='data_registrasi.php'</script>";

} else {
	echo "<script> alert('Data Gagal Di Ubah');
	window.location.href='frm_ubah_registrasi.php?id=$idUser'</script>";

}

?>
