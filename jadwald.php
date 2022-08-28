<?php 

include 'koneksi.php';
session_start();
if (!isset($_SESSION['username'])){
    header("Location: login_dosen.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devicrr-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div style="background-color: darksalmon; height: 100vmax;">
	<nav class="navbar navbar-light bg-dark">
        <div class="container-fluid" style="color:darksalmon">
            <a class="navbarbrand ">SELAMAT DATANG DI <b>E-LEARNING</b></a>
            <a href="logout_uas.php"><button class="btn btn-dark" type="button"><b>LOGOUT</b></button></a>
        </div>
    </nav>

	<div class="row no-gutters mt-5">
		<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
			<ul class="nav flex-column ml-7 mb-5">
				<li class="nav-item">
					<a class="nav-link active text-white" href="dashboard_dosen.php">Dashboard</a><hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link active text-white" href="data_tugas_dosen.php">nilai</a><hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link active text-white" href="jadwal.php">jadwal</a><hr class="bg-secondary">
				</li>
			</ul>
		</div>
		<div class="col-md-10 p-5 pt-2">
			<h3>DASHBOARD</h3><hr>
			<div class="row">
				<div class="col-sm-5">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title"> SENIN </h4><hr>
							<h6>PEMROGRAMAN WEB</h6>
							<p class="card-text"> Mu'arifin </p>
							<h6>PRAKTIKUM PEMROGRAMAN WEB</h6>
							<p class="card-text"> Mu'arifin </p>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="card">
						<div class="card-body">
						<h4 class="card-title"> SELASA </h4><hr>
							<h6>FISIKA MURNI</h6>
							<p class="card-text"> Sulianto </p>
							<h6>MATEMATIKA MURNI</h6>
							<p class="card-text"> Seger </p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
</body>
</html>