<?php
$konek = mysql_connect('localhost','root','','modul8');
if (! $conn) {
	die("Konek ke database gagal" . mysqli_connect_error());
}
?>