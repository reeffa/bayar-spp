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
	 

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">bayar spp</h1>
            <h2 class="mb-4">tambah kelas</h2>
            <p>tambah data kelas disini !!</p>
          </div>
        
       
        </div>

        <?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
$id_kelas= $_POST['id_kelas'];
$nama_kelas= $_POST['nama_kelas'];
$kompetensi_keahlian= $_POST['kompetensi_keahlian'];

$input = mysqli_query($conn, "INSERT INTO kelas (id_kelas,nama_kelas,kompetensi_keahlian) VALUES('$id_kelas','$nama_kelas','$kompetensi_keahlian')");

'header("location: tbkelas.php")';
}


?>
        
          <form method="POST" action="">
<div class="row justify-content-center">
<div class="col-5">

<div class="form-group">
<label>id kelas</label>
<input type="text" name="id_kelas" class="form-control">
</div>

<div class="form-group">
<label>nama kelas</label>
<input type="text" name="nama_kelas" class="form-control">
</div>

<div class="form-group">
<label>kompetensi keahlian</label>
<input type="text" name="kompetensi_keahlian" class="form-control">
</div>

<div class="form-btn">
<input type="submit" name="submit" value="kirim" class="btn btn-primary py-3 px-5">
</div><a href="kelas.php" class="btn btn-link mb-1">Lihat data kelas lainnya</a>
</div></div>

</form>
          
          </div>

          
        </div>
      </div>
    </section>

  
		

    
    
  

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