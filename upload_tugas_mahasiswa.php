
<?php 

include 'koneksi.php';
session_start();
if (!isset($_SESSION['username'])){
    header("Location: dashboard_mahasiswa.php");
}
/*
include 'koneksi.php';
if (isset($_POST['tombol'])) {
    extract($_POST);
    $uploadDir = 'gambar/';
	$nrp = $_POST['nrp'];
    $file = $_FILES['gambar'];
    $fileName = $file['name'];
    $tmpName = $file['tmp_name'];
    $fileType = $file['type'];
    $filePath = $uploadDir . $fileName;
    $result = move_uploaded_file($tmpName, $filePath);
    if (!$result) {
        echo "<script>
				alert('Gagal mengupload file');
				window.location.href = 'beri_tugas.php';
			</script>";
    }
    $query = "INSERT INTO upload (nrp, nama, typeTugas, pathTugas) VALUES ('$nrp', '$fileName', '$fileType', '$filePath')";
	//$sql = "INSERT INTO upload (nrp, nama, typeTugas, size, pathTugas) VALUES ('".$nrp."', '".$namaFile."', '".$typeFile."', '".$sizeFile."', '". $pathdb ."')";
    $query = mysqli_query($conn, $query);
    if ($query) {
        echo "<script>
				alert('Berhasil mengupload file');
				window.location.href = 'beri_tugas.php';
			</script>";
    } else {
        echo "<script>
				alert('Kesalahan dalam server');
				window.location.href = 'beri_tugas.php';
			</script>";
    }
}*/

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devicrr-width, initial-scale=1.0">
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
            <a class="navbarbrand ">SELAMAT DATANG DI <b>HALAMAN E - LEARNING</b></a>
            <a href="logout_uas.php"><button class="btn btn-dark" type="button"><b>LOGOUT</b></button></a>
        </div>
    </nav>

	<div class="row no-gutters mt-5">
		<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
			<ul class="nav flex-column ml-7 mb-5">
				<li class="nav-item">
					<a class="nav-link active text-white" href="dashboard_mahasiswa.php">BERANDAN</a><hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link active text-white" href="uploaad_tugas_mahasiswa.php">Tugas</a><hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link active text-white" href="jadwal.php">jadwal</a><hr class="bg-secondary">
				</li>
			</ul>
		</div>
		<div class="col-md-10 p-5 pt-2">
			<h2>Form upload</h2>
			<form action="upload_tugas_mahasiswa.php" method="POST" enctype="multipart/form-data">
				<div class="mb-3">
					<label for="exampleInputnrp" class="form-label">NRP</label>
					<input type="text" name="nrp" class="form-control"placeholder="312xxxxxxxx">
				</div>
				<div class="mb-3">
				<label for="exampleInputnrp" class="form-label">Input File</label>
					<input type="file" name="gambar" class="form-control" aria-label="file example" required>
					<br><br>
				</div>
				<button type="submit" name="tombol">Upload</button>
				<a href="data_tugas_mahasiswa.php" class="btn btn-primary"> Daftar Submit </a>
			</form>

		</div>
	</div>
</div>



<?php 


if (isset($_POST['tombol'])) {
	$path = "gambar/";
	$nrp = $_POST['nrp'];
	// ambil data file	
	$namaFile = $_FILES['gambar']['name'];
	$namaSementara = $_FILES['gambar']['tmp_name'];
	$typeFile = $_FILES['gambar']['type'];
	$sizeFile = $_FILES['gambar']['size'];
	$pathdb =  $path .  $namaFile;

	// tentukan lokasi file akan dipindahkan
	

	// pindahkan file
	$terupload = move_uploaded_file($namaSementara, $path.$namaFile);

	if ($terupload) {
		$sql = "INSERT INTO upload (nrp, nama, typeTugas, size, pathTugas) VALUES ('".$nrp."', '".$namaFile."', '".$typeFile."', '".$sizeFile."', '". $pathdb ."')";

		if ($conn->query($sql) === TRUE) {
		  echo "Berhasil di simpan";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}
}

//require_once "config.php";

//include 'closedb.php';
 ?>

</body>
</html>