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
            <h2 class="mb-4">data bayar</h2>
            <p>data pembayaran spp !!</p>
          </div>
        </div>

        <div class="container">
<div class="row justify-content-center">
<div class="col-18">
<form class="form-inline mt-5 mx-auto justify-content-center" action="bayar.php" method="post">
<label class="my-1 mr-3 ml-4" for="inlineFormCustomSelectPref">cari berdasarkan</label>
<select class="custom-select my-1 mr-sm-3 w-25" id="inlineFormCustomSelectPref" name="pilih">
<option select>pilih..</option>
<option value="id_pembayaran">id pembayaran</option>
<option value="id_petugas">id petugas</option>
<option value="nis">nis</option>
<option value="tgl_bayar">tanggal bayar</option>
<option value="jumlah_bayar">jumlah bayar</option>
</select>
<input type="text" name="textcari" class="form-control mr-3 w-25">

<button type="submit" name="cari" class="btn btn-primary py-3 px-4">cari</button>

<a href="tbbayar.php" button type="submit" class="btn btn-dark py-3 px-4">tambah data</a>
<a href="bayar.php" class="btn btn-link">tampilkan semua</a>

</form>
<table class="table table-bordered bg-light mt-5">
<thead class="thead-dark text-center">
<tr>
<th scope="col">no</th>
<th scope="col">id pembayaran</th>
<th scope="col">id petugas</th>
<th scope="col">nis</th>
<th scope="col">tanggal bayar</th>
<th scope="col">jumlah bayar</th>
<th scope="col">aksi</th>
</tr>
</thead>
<?php
include 'koneksi.php';
$input="";
if (isset($_POST["cari"])){
$opsi=$_POST["pilih"];
$nama=$_POST["textcari"];
$input=mysqli_query($conn, "SELECT * from pembayaran WHERE $opsi like '%$nama%'");
}else{
$input=mysqli_query($conn, "SELECT * from pembayaran");
}

$no = 1;
foreach ($input as $row){
echo "<tr>
<td>$no</td>
<td>" . $row['id_pembayaran'] . "</td>
<td>" . $row['id_petugas'] . "</td>
<td>" . $row['nis'] . "</td>
<td>" . $row['tgl_bayar'] . "</td>
<td>" . $row['jumlah_bayar'] . "</td>

<td>
<a href='updbayar.php?id_pembayaran=$row[id_pembayaran]'>
<input type='button' class='btn btn-secondary py-3 px-4'
value='update'></a>

<a href='hpsbayar.php?id_pembayaran=$row[id_pembayaran]'>
<input type='button' class='btn btn-danger py-3 px-4'
value='delete'></a>
</td></tr>";

$no++;
}
?>
</table>
</tbody>

</div>
</div>
</div>
</seaction>
</div>
</header>

    

          
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