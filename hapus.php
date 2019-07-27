<?php

	include "koneksi.php";

	$id = $_GET['id'];

	$query = "DELETE FROM mahasiswa WHERE id_mhs='$id'";

	mysqli_query($db, $query);

	header('location:latihanhari12-tampildata.php');

?>