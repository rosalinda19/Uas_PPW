<?php 
session_start();
include 'koneksi.php';
if (isset($_SESSION['username'])) {
	header("Location: dashboard_mahasiswa.php");
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>FORM DATA MAHASISWA</title>
  </head>
<body>
<div style="background-color: darksalmon; height: 100vmax;">
    <form action="login_mahasiswa.php" method="POST" class="p-4">
  <div class="container">
    <div class="text-center mb-3" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ; color:seashell; font-style: italic;">
      <h2>===============================</h2>
      <h2>======== * LOGIN * ========</h2> 
  </div>
    <label for="exampleInputUsername" class="form-label">Username</label>
    <input type="text" name="username" class="form-control">
    <br><br>
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
    <br><br>
  <button type="submit" name="tombol" class="btn btn-primary">Submit</button>
  </div>
</form>
<a class="nav-link active" href="registrasi_mahasiswa.php">daftar akun </a>
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

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$_SESSION['username'] = $username;
		header("Location: dashboard_mahasiswa.php");
	}
	else
	{
		header("Location: login_mahasiswa.php");
	}

}
 ?>