<?php
require 'koneksi.php';
if (!empty($_SESSION["id"])) {
header("Location: index.php");
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


<a class="navbar-brand" href="index.html">bayar spp</a>
<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>

<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav nav ml-auto">
<li class="nav-item"><a href="index.html" class="nav-link"><span>Home</span></a></li>
</ul>
</div>
</div>
</nav>

<section class="ftco-section contact-section ftco-no-pb" id="admin-section">

<body>
<header>

<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-4 heading-section text-center ftco-animate">
<h2 class="mb-1">login admin</h2>
</div></div>

<?php
if (isset($_POST["submit"])) {
$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM login WHERE username ='$username'");
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0){
if($password == $row["password"]){
$_SESSION["login"] = true;
$_SESSION["id"] = $row["id"];
header("Location: index.php");
}
else{
echo "<div class='alert alert-danger'>Password Kamu Salah :(</div>";
}
}
else{
echo "<div class='alert alert-danger'>User Belum Daftar :(</div>";
}
}
?>
<div class="row no-gutters block-9 justify-content-center">
<div class="col-md-6 order-md-last d-flex">

<form action="login.php" method="post" form class="bg-light p-4 p-md-5 contact-form">

<div class="form-group">
<input type="text" placeholder="Username:" name="username" class="form-control" id="username" required value="">
</div>
<div class="form-group">
<input type="password" placeholder="Password:" name="password" class="form-control" id="password" required value="">
</div>
<div class="form-btn ">
<input type="submit" value="Login" name="submit" class="btn btn-primary py-3 px-5">
</div>

</form>
</div></div>
</seaction>
</div>
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