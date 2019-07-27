<!DOCTYPE html>
<html>
<head>
<title>Data Barang</title>
</head>

<body>
<?php
	include_once('koneksi.php');

	$sql = "SELECT * FROM produk";
	$data = $db->query($sql);

?>

	<h4>Data Barang Printer</h4>
	<table border='1'>
		<thead>
		<tr style="font-weight:600">
			<td style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px">No</td>
			<td style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px">Nama Merek</td>
			<td style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px">Warna</td>
			<td style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px">Jumlah</td>

		</tr>
		</thead>

		<tbody>
		<?php while ($hasil = $data->fetch_assoc()) { ?>
		<tr>
			<td style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px"><?php echo $hasil['id']; ?></td>
			<td style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px"><?php echo $hasil['nama_merek']; ?></td>
			<td style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px"><?php echo $hasil['warna']; ?></td>
			<td style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px"><?php echo $hasil['jumlah']; ?></td>
		</tr>
	<?php } ?>
		</tbody>
	</table>

	<p><a href="tambah.php">Tambah Data</a></p>
</body>
</html>