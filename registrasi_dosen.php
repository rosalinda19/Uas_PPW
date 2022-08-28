<?php 
include 'koneksi.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>FORM DATA MAHASISWA</title>
  </head>
  <body>
    <div style="background-color: darksalmon; height: 100vmax;">
    <form action="registrasi_dosen.php" method="POST">
  <div class="container">
    <div class="text-center mb-3" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ; color:seashell; font-style: italic;">
      <h2>===============================</h2>
      <h2>=== * DAFTAR AKUN * ===</h2> 
  </div>
  <div class="form-floating mb-3">
    <input type="text" name="nama"class="form-control" id="floatingInput">
    <label for="floatingInput">Nama Lengkap</label>
 </div>
  <div class="form-floating mb-2">
    <div class="row">
      <div class="col">
        <label for="validationCustomUsername" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggalLahir" class="form-control">
      </div>
      <div class="col">
          <label for="floatingInput">Email address</label>
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        </div>
    </div>
  </div>
  <div class="form-floating mb-3">
    <input type="text" name="username" class="form-control">
    <label for="floatingInput">Username</label>
 </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
  </div>

  <button type="submit" name="tombol"class="btn btn-primary">Submit</button>
</form>
<a class="nav-link active" href="login_dosen.php">Login</a>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php 
	if (isset($_POST['tombol'])) {

		$nama = $_POST['nama'];
		$tanggalLahir = $_POST['tanggalLahir'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];


		$sql = "INSERT INTO user2 (nama, tanggalLahir, email, username, password) VALUES ('".$nama."'
		, '".$tanggalLahir."', '".$email."', '".$username."', '".$password."')";

		if ($conn->query($sql) === TRUE) {
		  echo "Registrasi Berhasil";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
 ?>