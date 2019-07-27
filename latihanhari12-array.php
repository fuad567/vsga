<?php

	// membuat array
	$hobi = array(
		"Membaca",
		"Memasak",
		"Ngeblog"
	);

	// menambahkan isi pada indeks ke-3
	$hobi[3] = "Coding";

	// menambahkan isi pada indeks terakhir
	$hobi[] = "Olahraga";

	// $hobi[1] = "Santai" => ini untuk mereplace index ke 1

	// cetak array dengan perulangan
	foreach ($hobi as $hobiku) {
		echo $hobiku.'<br />';
	}

?>

<br /><br />
<h4>Membuat array multi dimensi</h4>

<?php
	
	// membuat array 2 dimensi yang berisi array asosiatif
	$artikel = [
		[
			"judul" => "Belajar PHP & MySQL untuk pemula",
			"penulis" => "Digital Talent"
		], 
		[
			"judul" => "Tutorial PHP dari Nol hingga Mahir",
			"penulis" => "Digital Talent"
		],
		[
			"judul" => "Membuat Aplikasi Web dengan PHP",
			"penulis" => "Digital Talent"
		]
	];

	// menampilkan array

	foreach ($artikel as $post) {
		echo "<h2>".$post["judul"]."</h2>";
		echo "<p>".$post["penulis"]."</p>";
		echo "<hr />";
	}

	echo "<h4>Menampilkan Judul Array Tertentu</h4>";

	echo $artikel[1]["judul"].'<b>Menamilkan array $artikel pada index ke 1 dan index judul</b><br />';
	echo $artikel[2]["judul"].'<b>Menamilkan array $artikel pada index ke 2 dan index judul</b><br />';
	echo $artikel[2]["penulis"].'<b>Menamilkan array $artikel pada index ke 2 dan index penulis</b><br />';

?>
