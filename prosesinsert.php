<?php
include('koneksi.php');

$KodeMK = $_POST['KodeMK'];
$Nama_MK = $_POST['Nama_MK'];
$Kelas = $_POST['Kelas'];
$Jam = $_POST['Jam'];

$query = "INSERT INTO mata_kuliah VALUES('$KodeMK','$Nama_MK','$Kelas','$Jam')";
$que = mysqli_query($connect_database,$query);
header('location:index.php');
?>
