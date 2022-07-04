<?php
require_once "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user ='$id'");
$row = mysqli_fetch_array($query);
?>

<html>
<head>
<title>Form Ubah Registrasi</title>
</head>
<body>
	<h3>Formulir Ubah Registrasi User</h3>
<br>
<form action="simpan_ubah_registrasi.php" method="post">

<table>
<tr>
<td>Nama Lengkap</td>
<td><input type="text" name="nama_lengkap" value="<?= $row['nama_lengkap'];?>"></td>
<input type="hidden" name="id_user" value="<?= $row['id_user'];?>">
</tr>

<tr>
<td>Level</td>
<td><input type="text" name="level" value="<?= $row['level'];?>"></td>
</tr>

<tr>
<td>Username</td>
<td><input type="text" name="username" value="<?= $row['username'];?>"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" value="<?= $row['password'];?>"></td>
</tr>

<td colspan="4" style="text-align: center">
<input type="submit" name="simpan" value="simpan">
</td>
</table>

</form>
</body>
</html>