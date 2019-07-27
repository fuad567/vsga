<head>
	<title>Latihan Menu, Form - Hari ke 4</title>
	<meta name="charset" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>

Array<br />
<?php

	$nama = array(); //array kosong/nggak ada isinya
	$ikan = array("paus","gurame","nila","hiu"); //array dengan isi string. 
	$nomor = array(1,2,3,4); //array dengan nilai number, boleh integer atau float
	$mix = array(1,"dua",3,"empat"); //array dengan mix atau dicampur number dengan string. tdk ada aturan index pertama harus apa, yang penting diisi. minimal 0, maksimal tdk terbatas.
	$hewan = array(
		'unggas' => 'ayam',
		'herbivora' => 'sapi',
		'predator' => 'buaya'
	);

	echo $ikan;
	print_r($ikan);
	echo " ====> index array dimulai dari 0 sampai 3";
	echo "<br /><br />";
	array_push($ikan, "gabus");// untuk menambahkan data ke dalam array
	print_r($ikan); 
	echo ' ====> index array bertambah menjadi 4 karena array_push($ikanikan, "gambus")';
	echo "<br /><br />$ikan[0]"; // untuk menampilkan salah satu variable, index 0 pada array
	echo "<br />$ikan[3]"; // untuk menampilkan salah satu variable
	echo "<br /><br />$hewan[unggas]"; // untuk menampilkan salah satu variable
	echo "<br />$hewan[predator]"; // untuk menampilkan salah satu variable

	echo "<br /><br /><b>Foreach</b><br />";
	foreach ($ikan as $value) {
		echo $value.'<br />';
	}

	echo "<br /><br /><b>Foreach dengan Key atau nomer index</b><br />";
	foreach ($ikan as $key => $value) {
		echo $key.' '.$value.'<br />';
	}
?>
<br /><br />

<div style="padding-left:0px;padding-right: 500px">
	<table class="table">
		<tr>
			<td>Index</td>
			<td>Value</td>
		</tr>
		<?php
		foreach ($ikan as $key => $value) { ?>
		<tr>
			<td><?php echo $key; ?></td>
			<td><?=$value;?></td>
		</tr>
		<?php } ?>
	</table>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>