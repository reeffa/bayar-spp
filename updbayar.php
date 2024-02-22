<?php
include 'koneksi.php';
if(isset($_POST["submit"])) {
$id_pembayaran = $_POST["id_pembayaran"];
$id_petugas = $_POST["id_petugas"];
$nis = $_POST["nis"];
$tgl_bayar = $_POST["tgl_bayar"];
$jumlah_bayar = $_POST["jumlah_bayar"];
$input = mysqli_query($conn, "UPDATE pembayaran SET id_petugas='$id_petugas', nis='$nis', tgl_bayar='$tgl_bayar', jumlah_bayar='$jumlah_bayar' WHERE id_pembayaran='$id_pembayaran'");
header("location: bayar.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>bayarspp</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
<div class="container">


<a class="navbar-brand" href="index.php">bayar spp</a>
<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>

<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="bayar.php" class="nav-link"><span>data pembayaran</span></a></li>
            <li class="nav-item"><a href="siswa.php" class="nav-link"><span>data siswa</span></a></li>
            <li class="nav-item"><a href="kelas.php" class="nav-link"><span>data kelas</span></a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link"><span>Log Out</span></a></li>
</ul>
</div>
</div>
</nav>

<section class="ftco-section contact-section ftco-no-pb" id="admin-section">

<body>
<header>

<div class="container">

<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate">
<h1 class="big big-2">bayar spp</h1>
            <h2 class="mb-4">update pembayaran</h2>
            <p>update data bayar disini !!</p>
</div>
</div>

<div class="container">
<?php
include 'koneksi.php';
$id_pembayaran = $_GET['id_pembayaran'];
$update = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");

foreach ($update as $row) {

?>
<form method="POST" action="">
<div class="row justify-content-center">
<div class="col-5">

<div class="form-group">
<label>id pembayaran</label>
<input type="number" name="id_pembayaran" class="form-control" value="<?php echo $row['id_pembayaran']; ?>">
</div>

<div class="form-group">
<label>id petugas</label>
<input type="text" name="id_petugas" class="form-control" value="<?php echo $row['id_petugas']; ?>">
</div>

<div class="form-group">
<label>nis</label>
<input type="text" class="form-control" name="nis" value="<?php echo $row['nis']; ?>">
</div>

<div class="form-group">
<label>tgl_bayar</label>
<input type="text" class="form-control" name="tgl_bayar" value="<?php echo $row['tgl_bayar']; ?>">
</div>

<div class="form-group">
<label>jumlah_bayar</label>
<input type="text" class="form-control" name="jumlah_bayar" value="<?php echo $row['jumlah_bayar']; ?>">
</div>

<div class="form-btn">
<input type="submit" name="submit" value="kirim" class="btn btn-primary py-3 px-5">
</div>
</div></div>
</form>
<?php
}
?>
</div>
</seaction>

</header>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>