<?php

$host_name = 'localhost';
$user_name = 'root';
$password = '';
$database = 'new_mahasiswa';


$connect_database = mysqli_connect($host_name,$user_name,$password);

if(!$connect_database) {
	die('connection failed '. mysqli_connect_error());
	
}
mysqli_select_db($connect_database,$database);

?>
