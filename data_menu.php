<html>
<head>
<title>Data Menu</title>
</head>
<style>
	table,
	th,
	td {
	border: 1px solid;
	}
</style>

<?php
require_once "koneksi.php";
$no = 1;
$query = mysqli_query($conn, "SELECT menu.*, jenis_menu.jenis_menu FROM menu INNER JOIN jenis_menu ON menu.id_jenis_menu=jenis_menu.id_jenis_menu");
?>

<body>
<h4><a href = "frm_menu.php">Form Menu</a></h4> 
<table>
<tr>
	<th>No</th>
	<th>Jenis Menu</th>
	<th>Menu</th>
	<th>Stok</th>
	<th>Harga</th>
	<th>Action</th>
	
</tr>
<?php
//menampilkan data berupa array
while ($row = mysqli_fetch_array($query)) : ?>
<tr>
	<td><?= $no; ?></td>
	<td><?= $row['jenis_menu']; ?></td>
	<td><?= $row['nama_menu']; ?></td>
	<td><?= $row['stok']; ?></td>
	<td><?= $row['harga']; ?></td>
	<td><a href = "frm_ubah_menu.php?id=<?= $row['id_menu']; ?>"> Ubah</a>
	<a href = "hapus_menu.php?id=<?= $row['id_menu']; ?>"> Hapus</a>
	</td>
</tr>
<?php $no++;
endwhile; ?>

</table>
</body>
</html>