
<h4>Mengakses File dengan PHP - fopen(); untuk membuka, fgets(); untuk membaca isi & fclose(); untuk menutup file</h4>
<?php
	// membuka file
	$file = fopen("welcome.txt", "r");
	echo $file;
	// membaca file
	echo '<br />'.fgets($file);
	// tutup file
	fclose($file);
?>

<br /><br />------------------------------------------------------------------------

<h4>Menampilkan Data dari File dengan PHP - file_get_contents();</h4>
<?php
	$content = file_get_contents('welcome.txt');
	echo $content;
?>

<br /><br />------------------------------------------------------------------------

<h4>Membaca File Tingkat Lanjut - IF & While.</h4>
<?php
	$data = "welcome.txt";
	$bukafile = fopen($data, "r");
	if (!$bukafile) {
		echo "File $data gagal dibuka !";
		exit();
	}
	while (!feof($bukafile)) {
		$data = fgets($bukafile, 10);
		print ("$data <br />");
		fclose($bukafile);
	}
?>