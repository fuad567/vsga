<html>
<body>

<h4>Masukkan Nama Anda :</h4>

<form>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
			<td><input type="submit" value="Cek"></td>
		</tr>
	</table>
</form>

<i><code>Tanpa form action, maka method otomatis pakai GET dan data yang dikirim dari form akan tampil : http://localhost/vsga/latihanhari6part1-form.php?nama=ssssss</code></i>

<br /><br />
<hr />
<br />

<form action="latihanhari6part1-action.php" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
			<td><input type="submit" value="Cek"></td>
		</tr>
	</table>
</form>

<?php echo @$_GET['nama']; ?>
<i><code>Menggunakan form action + method (POST)</code></i>

<br /><br />
<hr />
<br />

<form>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Isikan nama anda...."></td>
			<td><input type="submit" name="submit" value="Cek"></td>
		</tr>
	</table>
</form>

<?php
	echo 'Nama : '.@$_GET['nama'].'<br />'; //Fungsi simbol @ di depan GET adalah untuk menghilangkan error unidentified index
	echo 'Submit : '.@$_GET['submit'];
?>

<br /><br />
<i><code>Menggunakan form method (ONLY) GET</code></i>

<br /><br />
<hr />
<br />

<form method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Isikan nama anda...."></td>
			<td><input type="submit" name="submit" value="Cek"></td>
		</tr>
	</table>
</form>

<?php
	echo 'Nama : '.@$_POST['nama'].'<br />'; //Fungsi simbol @ di depan GET adalah untuk menghilangkan error unidentified index
	echo 'Submit : '.@$_POST['submit'];
?>

<br /><br />
<i><code>Menggunakan form method (ONLY) POST</code></i>

</body>
</html>