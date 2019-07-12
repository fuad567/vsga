<html>
<head>
	<title>Contoh Eksekusi File PHP</title>
</head>
<body>
	Selamat belajar PHP. <br />
	<?php
		printf('Tanggal Sekarang : %s', Date("d F Y"));
		// Di printf, %s adalah pengganti untuk data yang akan dimasukkan ke dalam string. Argumen tambahan untuk printf adalah nilai yang akan dimasukkan. Mereka terkait dengan placeholder secara posisi: placeholder pertama mendapatkan nilai pertama, yang kedua nilai kedua, dan sebagainya.
	?>
	<br />
	<?php
		printf('Tanggal Sekarang : %s', Date("D F y"));
		// Di printf, %s adalah pengganti untuk data yang akan dimasukkan ke dalam string. Argumen tambahan untuk printf adalah nilai yang akan dimasukkan. Mereka terkait dengan placeholder secara posisi: placeholder pertama mendapatkan nilai pertama, yang kedua nilai kedua, dan sebagainya.
	?>
	<br /><br />
	<hr />
	
	Selamat belajar php.<BR />
	<?php
		printf('Tanggal Sekarang : %s<br /><br />', Date("D F y"));
		$warna = "merah";
		ecHo "Rumahku warna ".$warna."<br />";
		ECHO "Bajuku warna ".$warna."<br />";
		echo "Hidungku warna ".$warna.'<br />';
	?>
	<br /> ============ <br /> 
	<?php
		printf('Tanggal Sekarang : %s<br /><br />', Date("D F y"));
		$warna = "merah";
		ecHo "Rumahku warna ".$warna."<br />";
		ECHO "Bajuku warna ".$Warna."<br />";
		echo "Hidungku warna ".$wARNa.'<br />';
	?>
	<br /> ============ <br /> 
	<?php
		printf('Tanggal Sekarang : %s<br /><br />', Date("D F y"));
		$warna = "merah";
		$Warna = "kuning";
		$wARNa = "hijau";
		ecHo "Rumahku warna ".$warna."<br />";
		ECHO "Bajuku warna ".$Warna."<br />";
		echo "Hidungku warna ".$wARNa.'<br />';
	?>
	<br /> ============ <br /> 
	Kesimpulannya adalah : Besar kecilnya huruf pada penulisan php tidak berpengaruh. Yang berpengaruh adalah besar kecilnya nama <b>"variable"</b>
	<br /><br />
	<img src="images/variable.jpg" />
	<br /><br />
	Tomorrow I'll learn PHP global variables.<br />
	This is a bad command : del c:\*.*
	<br />
	<br />
	<?php phpinfo(); ?>
</body>
</html>