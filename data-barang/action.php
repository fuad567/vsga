<?php

	include_once('koneksi.php');

	$no = @$_POST['no'];
	$merek = @$_POST['merek'];
	$warna = @$_POST['warna'];
	$jumlah = @$_POST['jumlah'];

	//$conn = new mysqli($server, $user, $password, $nama_database);	// alternatif sql connect selain dari koneksi.php

	// Check connection
	//if ($conn->connect_error) {
	//    die("Connection failed: " . $conn->connect_error);
	//}

	// Query Insert Data ke Database
	$sql = "INSERT INTO produk (id, nama_merek, warna, jumlah) VALUES ('', '$merek', '$warna', '$jumlah')";

	//$db->query($sql);								// bisa pakai ini untuk menjalankan sql query

	if ($db->query($sql) === TRUE) { 				// bisa pakai ini
	//if ($conn->query($sql) === TRUE) {			// bisa juga pakai ini
	    echo "Data Berhasil Disimpan";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$db->close();

	//header("Location: index.php"); 

?>

	<script>
		alert('Data Berhasil ditambahkan');
		window.location.href = 'index.php';
	</script>