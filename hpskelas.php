<?php
include 'koneksi.php';
$id_kelas = $_GET['id_kelas'];
$query = "delete from kelas where id_kelas='$id_kelas'";
mysqli_query($conn, $query);
header("location:kelas.php");
?>