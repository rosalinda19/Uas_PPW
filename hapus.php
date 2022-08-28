<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM upload WHERE id=" .$id;
mysqli_query($conn, $sql);
mysqli_close($conn);

header("location: upload_tugas_mahasiswa.php");
?>