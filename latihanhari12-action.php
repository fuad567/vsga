<?php

	include "koneksi.php";

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kelamin = $_POST['kelamin'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];

	$query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$kelamin', jurusan='$jurusan', alamat='$alamat'";

	mysqli_query($db, $query);

	header('location:latihanhari12-tampildata.php');

?>