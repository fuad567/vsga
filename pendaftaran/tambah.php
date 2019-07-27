<?php

	include "koneksi.php";

	//$x = $_POST['id_pendaftar'];
	$generate = mysqli_query($db, "SELECT id_pendaftar FROM pendaftaran ORDER BY id_pendaftar DESC");
	$generate2 = mysqli_fetch_array($generate);
	
	$x = $generate2['id_pendaftar'].+1;

	$no_pendaftaran = 'MUGM00'.$x;
	$nama = $_POST['nama'];
	$agama = $_POST['agama'];
	$kelamin = $_POST['kelamin'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$alamat = $_POST['alamat'];

	$query = "INSERT INTO pendaftaran SET no_pendaftaran='$no_pendaftaran', nama='$nama', jenis_kelamin='$kelamin', agama='$agama', asal_sekolah='$asal_sekolah', alamat='$alamat'";

	mysqli_query($db, $query);
	
	header('location:data_pendaftar.php');

?>