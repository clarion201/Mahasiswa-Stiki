<?php
include('koneksi.php');

$KodeMK = $_POST['KodeMK'];
$Nama_MK = $_POST['Nama_MK'];
$Kelas = $_POST['Kelas'];
$Jam = $_POST['Jam'];

$query = "UPDATE mata_kuliah SET Nama_MK='$Nama_MK', Kelas='$Kelas', Jam='$Jam' WHERE KodeMK='$KodeMK'";
$que = mysqli_query($connect_database,$query);
header('location:index.php');
?>
