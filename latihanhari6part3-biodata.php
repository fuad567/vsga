<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<h4 style="text-align:center;padding-top:20px;padding-bottom: 20px">Membuat Biodata Online</h4>
  			
  			<form class="form-group" method="post">
  			<div class="row">
	  			<div class="col-md-6">
	  				<label style="padding-top: 5px;">Nama : </label> <input type="text" class="form-control" name="nama">
	  				<label style="padding-top: 5px;">Alamat : </label> <input type="text" class="form-control" name="alamat">
	  				<label style="padding-top: 5px;">Tempat, Tanggal Lahir : </label> <input type="text" class="form-control" name="ttl">
	  			</div>
	  			<div class="col-md-6">
	  				<label style="padding-top: 5px;">Jenis Kelamin : </label> <select class="form-control" name="kelamin">
	  					<option value="Laki - laki">Laki - laki</option>
	  					<option value="Perempuan">Perempuan</option>
	  				</select>
	  				<label style="padding-top: 5px;">Usia : </label> <input type="text" class="form-control" name="usia">
	  				
	  				<button style="margin-top:37px" type="reset" class="btn btn-default">Reset Data</button> &nbsp;
	  				<button style="margin-top:37px" type="submit" class="btn btn-success">Input Data</button></span>
	  			</div>
  			</div>
  			</form>

  		</div>
  	</div>
  </div>

  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<h4 style="text-align:center;padding-top:20px;padding-bottom: 20px">Hasil Biodata</h4>
  			<table class="table">
  				<tr>
  					<td rowspan="5" width="300px"><img class="img-fluid" src="images/user.png" width="200px"/></td>
  					<td width="230px">Nama</td>
  					<td><?php echo @$_POST['nama']; ?></td>
  				</tr>
  				<tr>
  					<td>Alamat</td>
  					<td><?php echo @$_POST['alamat']; ?></td>
  				</tr>
  				<tr>
  					<td>Tempat, Tgl Lahir</td>
  					<td><?php echo @$_POST['ttl']; ?></td>
  				</tr>
  				<tr>
  					<td>Jenis Kelamin</td>
  					<td><?php echo @$_POST['kelamin']; ?></td>
  				</tr>
  				<tr>
  					<td>Usia</td>
  					<td><?php echo @$_POST['usia']; ?></td>
  				</tr>
  				<tr><td></td></tr>
  			</table>
  		</div>
  	</div>
  </div>

  	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
 </html>