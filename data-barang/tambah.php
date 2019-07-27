<!DOCTYPE html>
<html>
<head>
<title>Data Barang</title>
</head>

<body>
	<h4>Tambah Data Barang</h4>
	<form action="action.php" method="post">
		<table>
			<!--<tr>
				<td>No </td>
				<td><input type="text" name="no"></td>
			</tr>-->
			<tr>
				<td>Nama Merek </td>
				<td><input type="text" name="merek" size="39"></td>
			</tr>
			<tr>
				<td>Warna </td>
				<td><input type="text" name="warna" size="60"></td>
			</tr>
			<tr>
				<td>Jumlah </td>
				<td><input type="text" name="jumlah" size="15"></td>
			</tr>
		</table>
		<br />
		<input type="submit" value="Simpan"> &nbsp; <input type="reset" value="Ulangi"> &nbsp; <input type="button" value="Kembali">
	</form>
</body>
</html>