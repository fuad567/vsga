<?php

	include "koneksi.php";

	$id = $_GET['id'];

	$query = "DELETE FROM pendaftaran WHERE id_pendaftar='$id'";

	mysqli_query($db, $query);

	header('location:data_pendaftar.php');

?>