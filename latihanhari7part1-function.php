<?php

echo 'Berikut menampilkan function matematika pada PHP :<br /><br />';

function matematika() {
	$x = '5';
	$y = '7';
	$z = '2';

	$perhitungan = $x*$y/$z;

	echo 'Hasil dari '.$x.' * '.$y.' / '.$z.' adalah = '.$perhitungan;
}

matematika();

echo '<br /></br />//////////////////////////////////////////////////<br /></br />';

function perkenalan($nama, $alamat, $pekerjaan) {
	echo '<span style="font-size:18px;">Selamat datang di program function php</span>';
	echo '<br /></br />';
	echo 'Perkenalkan, nama saya <b>'.$nama.'</b><br />';
	echo 'Saya tinggal di daerah <b>'.$alamat.'</b><br />';
	echo 'Pekerjaan saya saat ini adalah sebagai <b>'.$pekerjaan;
	echo '</b><br /></br />';
	echo 'Salam kenal yaa :-)';
}

echo 'Berikut menampilkan function perkenalan pada PHP :<br /><br />';

perkenalan("Muhammad Fuad Fachrudin", "Ngukiran, Jomboran, Klaten Tengah, Klaten", "Staff IT Support");

echo '<br /></br />//////////////////////////////////////////////////<br /></br />';

perkenalan("Muhamad Wahyu Hidayat", "Ngukiran, Jomboran, Klaten Tengah, Klaten", "Mahasiswa Politeknik Jember");

echo '<br /></br />//////////////////////////////////////////////////<br /></br />';

?>

<b>Referensi :</b><br />
	<ul>
		<li><a href="https://www.petanikode.com/php-prosedur-fungsi/">https://www.petanikode.com/php-prosedur-fungsi/</a></li>
		<li><a href="https://www.malasngoding.com/belajar-php-mengenal-function-pada-php/">https://www.malasngoding.com/belajar-php-mengenal-function-pada-php/</a></li>
	</ul>

<br />//////////////////////////////////////////////////<br /></br />

<?php

// membuat fungsi
function kenalan($nama, $salam="Selamat Datang") {
	echo $salam.', ';
	echo "Perkenalkan, nama saya ".$nama."<br />";
	echo "Senang berkenalan dengan anda<br />";
}

// memanggil fungsi
kenalan("Fuad", "Hii");

echo "<hr />";

$saya = "Alvian";
$ucapanSalam = "Selamat pagi";

kenalan($saya, $ucapanSalam);

echo "<hr />";

kenalan($saya); // parameter ke dua atau parameter salam menggunakan nilai dari parameter default, yaitu "selamat datang", jadi tidak disebutkan.

echo "<br />//////////////////////////////////////////////////<br /></br />";

// Membuat fungsi mengembalikan nilai
function hitungUmur($thn_lahir, $thn_sekarang){
	$umur = $thn_sekarang - $thn_lahir;
	return $umur; // harus dikasih return untuk agar outputnya dapat diproses lagi di pemrosesan berikutnya. WAJIB.
}

// Fungsi yang dipanggil dalam fungsi yang lain
function kenalan2($nama, $salam="Welcome bro!<br />") {
	echo $salam.'<br />';
	echo "Perkenalkan, nama saya ".$nama.'<br />';
	// Memanggil fungsi lain
	echo "Saya berusia ". hitungUmur(1996, 2019).' tahun<br />'; // memanggil fungsi tdk boleh pakai variable, langsung aja
	echo "<br />Senang berkenalan dengan anda :-)<br />";
}

//memanggil fungsi kenal
kenalan2("Fuad");

?>

<br />//////////////////////////////////////////////////<br /></br />
Membuat fungsi rekursif<br /></br />

<?php

function faktorial($angka) {
	if ($angka < 2) {
		return 1;
	}
	else {
		//memanggil dirinya sendiri
		return ($angka * faktorial($angka-1));
	}
}

//memanggil 1
echo "Faktorial 5 adalah " . faktorial(5).' //';
echo "<i>Prosesnya adalah 5 * 4 * 3 * 2</i>";

?>

<br /><br />//////////////////////////////////////////////////<br /></br />

<b>Tugas :</b> Menghitung luas persegi panjang 10cm x 6.5 cm.<br /><br />

<?php
	function luasPersegiPanjang($panjang, $lebar) {
		$hasil = $panjang * $lebar;
		return $hasil;
	}

	echo "Luas persegi panjang dengan panjang 10 dan lebar 6.5 adalah ". luasPersegiPanjang(10,6.5);

?>

<br /><br />//////////////////////////////////////////////////<br /></br />

<b>Tugas :</b> Menghitung luas setengah lingkaran<br /><br />

<?php

function luasSetengahLingkaran($phi, $diameter) {
	$r_jari2 = $diameter / 2;
	//$p = 3.14;
	$rumus = ($r_jari2 * $r_jari2 * $phi) / 2;

	return $rumus;
}

echo "Luas setengah lingkaran yang berdiameter 10 cm adalah ". luasSetengahLingkaran(3.14, 10);
?>
<br /><br />//////////////////////////////////////////////////<br /></br />

<b>Contoh prosedur dalam PHP<br /><br />

<?php
	//contoh prosedur
	function do_print() {
		//mencetak informasi timestamp
		echo time();
	}

	//memanggil prosedur
	do_print();
	echo '<br />';

	//Contoh fungsi penjumlahan
	function jumlah($a, $b) {
		return ($a + $b);
	}

	echo jumlah(2, 3); //memanggil function pakai echo

?>