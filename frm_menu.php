<?php
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM jenis_menu");
?>

<html>
<head>
<title>Form Menu</title>
</head>
<body>
	<h3>Formulir Menu</h3>
<br>
<form action="simpan_menu.php" method="post">

<table>
<tr>
<td>Jenis Menu</td>
<td>
<select name="id_jenis_menu">
<option selected>Pilih Jenis Menu</option>
<?php
while($row=mysqli_fetch_array($query)) : ?>
<option value="<?=$row['id_jenis_menu']; ?>"><?= $row['jenis_menu']; ?></option>
<?php 
endwhile; ?>
</select>
</td>
</tr>

<tr>
<td>Nama Menu</td>
<td><input type="text" name="nama_menu"></td>
</tr>

<tr>
<td>Stok</td>
<td><input type="ptext" name="stok"></td>
</tr>

<tr>
<td>Harga</td>
<td><input type="text" name="harga"></td>
</tr>

<td colspan="4" style="text-align: center">
<input type="submit" name="simpan" value="simpan">
</td>
</table>

</form>
</body>
</html>