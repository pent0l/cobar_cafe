<?php
require_once "koneksi.php";
$namaLengkap = $_POST['nama_lengkap'];
$level = $_POST['level'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "INSERT INTO user (id_user, nama_lengkap, level, username, password)
	values(NULL,'$namaLengkap', '$level', '$username', '$password')";
$sql = mysqli_query($conn, $query);


if ($sql) {
	echo "<script> alert('Data Berhasil Disimpan');
	window.location.href='frm_registrasi.php'</script>";

} else {
	echo "<script> alert('Data Gagal Disimpan');
	window.location.href='frm_registrasi.php'</script>";

}

?>
