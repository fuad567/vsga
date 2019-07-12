<html>
<body>

<?php
	$nama = $_POST['nama']; 
	// Mengambil inputan nama menggunakan method POS dan disimpan ke dalam sebuah variable bernama 'nama'. Aturan membuat nama variable : nama dimulai dari huruf bebas, asalkan tidak dimulai dengan angka dulu.
	//Membuat variable karena akan dipanggil 2 kali atau lebih, jadi harus disimpan.

	//echo $nama;

	#ALTERNATIF PILIHAN UNTU VALIDASI FORM
	// if(isset($_GET['nama'])) {
	// if(isset(!$_GET['nama'])) {
	// if(empty($_GET['nama'])) {
	// if(isset($_POST['nama'])) {
	// if(isset(!$_POST['nama'])) {
	// if(empty($_POST['nama'])) {


	if($nama == "") { // atau bisa menggunakan 
		header("Location:latihanhari6part1-form.php?nama=kosong");
	}
	}
	else {
		echo "Nama anda adalah <b>".$nama.'</b>;
	}
?>

</body>
</html>