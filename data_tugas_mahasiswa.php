<?php 
include 'koneksi.php';

$sql = "SELECT * FROM upload";
$result = $conn->query($sql);

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
            <a class="navbarbrand ">SELAMAT DATANG DI <b>HALAMAN ADMIN</b></a>
            <a href="logout_uas.php"><button class="btn btn-dark" type="button"><b>LOGOUT</b></button></a>
        </div>
    </nav>

	<div class="row no-gutters mt-5">
		<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
			<ul class="nav flex-column ml-7 mb-5">
				<li class="nav-item">
					<a class="nav-link active text-white" href="dashboard_mahasiswa.php">Dashboard</a><hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link active text-white" href="upload_tugas_mahasiswa.php">Tugas</a><hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link active text-white" href="jadwal.php">jadwal</a><hr class="bg-secondary">
				</li>
			</ul>
		</div>
		<div class="col-md-10 p-5 pt-2">
			<h3>DATA TUGAS</h3>
            <h3>Aksi</h3>
            <table class="table table-dark table-striped">

                <?php 
                
                /*while($row = $result->fetch_array()):
                    echo "<a href="gambar/<? $row['nama'] ?>" download> <?= $row['nama'] ?> </a>";
                    <br>
                     echo"<a href='hapus.php?id=$row[id]'>Hapus</a>";
                 endwhile; */

                 include 'koneksi.php';
                    $query = "SELECT id, nama, pathTugas, typeTugas FROM upload";
                    $result = mysqli_query($conn, $query) or die('Error, query failed');
                    if (mysqli_num_rows($result) == 0) {
                        echo "Database is empty <br>";
                    } else {
                        $row = $result->fetch_array();
                        while (list($id, $name, $path, $type) = mysqli_fetch_array($result)) {
                            echo "<a href='$path'>$name</a>";
                            echo "<a href='hapus.php?id=$row[id]'>Hapus</a><br>";
            }
         }
                
                ?>
                
            </table>

		</div>
	</div>
</div>
</body>
</html>