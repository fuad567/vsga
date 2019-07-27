<?php

	include "koneksi.php";

	$id = $_POST['id'];
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kelamin = $_POST['kelamin'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];

	$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$kelamin', jurusan='$jurusan', alamat='$alamat' WHERE id_mhs='$id'";

	mysqli_query($db, $query);

	header('location:latihanhari12-tampildata.php');

?>