<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM mata_kuliah WHERE KodeMK='$id'";
$que = mysqli_query($connect_database,$query);
header('location:index.php');
?>
