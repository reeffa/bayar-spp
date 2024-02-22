<?php
include 'koneksi.php';
$nis = $_GET['nis'];
$query = "delete from siswa where nis='$nis'";
mysqli_query($conn, $query);
header("location:siswa.php");
?>