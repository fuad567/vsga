<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="icon/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="https://digitalent.kominfo.go.id/favicon.ico"/>

    <title>Aplikasi Mahasiswa - Digital Talent</title>
  </head>
  <body style="background-color:#c2c2d6">
    <div class="container-fluid shadowb" style="padding:0px">
      <nav class="navbar navbar-expand-lg navbar-dark" style="background:linear-gradient(to right, #006699 0%, #000066 100%)!important">
        <a class="navbar-brand" href="latihanhari12-tampildata.php"><img src="images/logo2.png" height="35px" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="background-color:#00004d;color:white;padding-top:10px;margin-top:-10px;margin-bottom:-10px;padding-left:10px;padding-right:10px  ">
              <a class="nav-link" href="latihanhari12-tampildata.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" style="padding-left:10px;padding-right:10px">
              <a class="nav-link" href="latihanhari12-tambahdata.php">Tambah Data</a>
            </li>
            
          </ul>
          <form class="form-inline my-0 my-lg-0" action="latihanhari12-tampildata.php" method="get">
            <input class="form-control mr-sm-0" style="border-radius:0rem;background-color:#f0f0f5" name="cari" type="search" placeholder="Cari Mahasiswa" aria-label="Search">
            <button class="btn form-control my-0 my-sm-0" style="border-radius:0rem;background-color:#e0e0eb;" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </nav>
    </div>

    <div class="container" style="padding-bottom: 100px">
      <h2 style="text-align:center;padding-top:20px;padding-bottom: 20px">Data Mahasiswa</h2>

      <table class="table shadowb" style="border-bottom:1px solid #dee2e6;border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;">
        <thead>
          <tr class="text-light" style="text-align:center;background:linear-gradient(to right, #006699 0%, #000066 100%)">
            <th style="border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;">No</th>
            <th style="border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;">NIM</th>
            <th style="border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;">Nama</th>
            <th style="border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;">Jenis Kelamin</th>
            <th style="border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;">Jurusan</th>
            <th style="border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;">Alamat</th>
            <th style="border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'koneksi.php';

            if(!isset($_GET['cari'])) {
              $mahasiswa = mysqli_query($db, "SELECT * FROM mahasiswa");
            }
            else {
              $keyword = $_GET['cari'];
              $mahasiswa = mysqli_query($db, "SELECT * FROM mahasiswa WHERE nim LIKE '%$keyword' OR nama LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR alamat LIKE '%$keyword%'");
            }

            $no = 1;

            foreach ($mahasiswa as $row) {
            $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
            echo "
          <tr>
            <td style='border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;text-align: center;'>".$no."</td>
            <td style='border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;'>".$row['nim']."</td>
            <td style='border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;'>".$row['nama']."</td>
            <td style='border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;'>".$jenis_kelamin."</td>
            <td style='border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;'>".$row['jurusan']."</td>
            <td style='border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;'>".$row['alamat']."</td>
            <td style='border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;text-align: center;'><a href='hapus.php?id=".$row['id_mhs']."'><i class='fa fa-trash' aria-hidden='true'></i></a> &nbsp;
                <a href='edit.php?id=".$row['id_mhs']."'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>
          </tr>";
              $no++;
            }
          ?>

        </tbody>
      </table>

      <?php
        if(mysqli_num_rows($mahasiswa) <= 0) {
          echo '<p style="text-align:center">Data tidak ditemukan</p>';
        }
      ?>

    </div>

    <style>
      #sticky-footer {
        flex-shrink: none;
        position:fixed;
        bottom:0;
        left:0;
        width:100%;
        text-align:center;
    }
    #sticky-footer2 {
        flex-shrink: none;
        position:fixed;
        bottom:0;
        right:0;
        text-align:left;
        margin-right: 20px;
        margin-bottom: 60px;
    }
    td a {
      color:#003979;
    }
    .shadowb {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .circle {
  display: block;
  width: 50px;
  height: 50px;
  margin: 1em auto;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-border-radius: 99em;
  -moz-border-radius: 99em;
  border-radius: 99em;
  border: 0px solid #eee;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

    </style>

    <a href="http://instagram.com/muhammadfuadfachrudin" target="_blank" title="@muhammadfuadfachrudin">
      <img class="circle" src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-instagram-new-circle-512.png" id="sticky-footer2" width="45px">
    </a>
    <!-- Footer -->
    <footer id="sticky-footer" class="py-2 text-white-50" style="background-color: #000033;">
      <div class="container text-center">
        <small>Copyright &copy; Muhammad Fuad Fachrudin - Kelas RPL Pagi</small>
      </div>
    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>