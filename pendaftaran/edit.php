<?php

	include "koneksi.php";

	$id_pendaftar = $_POST['id'];
	$nama = $_POST['nama'];
	$agama = $_POST['agama'];
	$kelamin = $_POST['kelamin'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$alamat = $_POST['alamat'];

	$query = "UPDATE pendaftaran SET nama='$nama', jenis_kelamin='$kelamin', agama='$agama', asal_sekolah='$asal_sekolah', alamat='$alamat' WHERE id_pendaftar='$id_pendaftar'";


	mysqli_query($db, $query);

	header('location:data_pendaftar.php');
	//echo $id_pendaftar;	
?>