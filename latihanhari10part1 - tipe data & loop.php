<h4>Perbedaan tanda petik 1 '' dan tanda petik 2 "" saat menggunakan echo</h4>

<?php

	$nama = "AA";

	echo 'Nama saya adalah $nama &nbsp; //menggunakan tanda petik 1'; //Nama saya adalah $nama
	echo '<br />';
	echo "nama saya adalah $nama &nbsp; //menggunakan tanda petik 2"; //Nama saya adalah AA

?>

<br /><br />

<h4>Percabangan IF-ELSEIF-ELSE</h4>


<?php

	$hasil = 3+3;
	
	if($hasil == 0){ // bernilai true atau false, == double digunakan untuk perbandingan atau membandingkan nilai
		//
	}
	elseif($hasil == 1) { // elseif ada nilai, tidak ada batasan jumlah elseif
		//	
	}
	elseif($hasil == 6) {

	}
	else { // else tidak ada nilai. tidak harus diakhiri dengan else, cukup dengan elseif tidak apa2
		//
	}

?>

<?php
$nilai = 80;
if (($nilai >=85) && ($nilai <= 100)) {
	$index = "A";
}
elseif ($nilai >= 70) {
	$index = "B";
}
elseif ($nilai >= 50) {
	$index = "C";
}
elseif ($nilai >= 30) {
	$index = "D";
}
else {
	$index = "E";
}
echo $nilai;
echo " dan ";
echo $index;
?>
<br /><br />

<?php
$plat_nomer = "AB";
switch ($plat_nomer) {
	case "AB":
		echo "Yogyakarta";
		break;
	case "AD":
		echo "Surakarta";
		break;
	case "BE":
		echo "Lampung";
		break;
	case "B":
		echo "Jakarta";
		break;
	default:
		echo "Plat kendaraan tidak diketahui.";
		break;
}
?>

<br /><br />

Perulangan

<?php

	//while
	$i = 1;
	while($i<=10) {
		echo "Perulangan ke-".$i."<br />";
		$i++;
	}
	echo "<hr />";

	//do - while
	$i = 1;
	do {
		echo "Perulangan ke-".$i."<br />";
		$i++;
	}
	while($i <= 10 );
?>

<br /><br />

Break (berhenti sampai nilai 2)<br />

<?php for($i=1;$i<=6;$i++) {
	if($i == 3) {
		break;
	}

	echo "Nilai i : ".$i."<br />";
}
?>

<br /><br />

Continue (nilai 3 dilewati)<br />

<?php for($i=1;$i<=6;$i++) {
	if($i == 3) {
		continue;
	}

	echo "Nilai i : ".$i."<br />";
}
?>

<br /><br />

Exit (mengakhiri program)<br />

<?php for($i=1;$i<=6;$i++) {
	if($i == 3) {
		exit();
	}

	echo "Nilai i : ".$i."<br />";
}
//di bawah ini tidak akan dijalankan
echo "Contoh Penggunaan Exit pada Program";
?>

<br /><br />

