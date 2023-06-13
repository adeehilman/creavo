<!doctype html>
<html lang="en">

<?php include('app/header.php'); ?>

<?php
$pesan = isset($_GET['error']);
if ($pesan == 1) {
  echo "<script>alert('Username Password Salah')</script>";
} else {
  echo "";
}
  
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CREAVO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="assets/img/svg" href="https://i.ibb.co/Dpw76vg/Logo.png">
  <link href="app/assets/img/logo.PNG" rel="icon">
  <link href="app/assets/img/logo.PNG" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="app/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="app/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="app/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="app/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="app/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="app/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="app/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="app/assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/plugin/sweetalert2/sweetalert2.min.css">
  <script src="app/assets/plugin/sweetalert2/sweetalert2.min.js"></script>


</head><!-- ======= Header ======= -->
<div class="login">
  <div class="container box-sizing" style="width: 100%; height: 100vh;">
    <div class="row justify-content-center" style="width: 100%; height: 100vh;">
      <!-- Carousel -->
      <div class="col-lg-6 md-6" style="padding: 20px;">
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval=" 10000">
              <img src="app/assets/img/poster.png" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
              <img src="app/assets/img/poster-1.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <!-- caption -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="app/assets/img/poster-2.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <!-- caption -->
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" ">
            <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
            <span class=" visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="color: #003762;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
      <!-- CREAVO DAN LOGIN -->
      <div class="col-lg-6 md-6" style="padding: 10px;">
        <div class="col-12 ">
          <div class="head">
            <img src="app/assets/img/logo.PNG" alt="" width="310" class="mx-auto d-block" style="padding-top: 40px;">
            <p style="color: #fff; text-align: center; font-size: 2rem; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Creativitas Vokasi</p>
          </div>
          <form action="conf/autentikasi.php" method="post" class="d-flex align-items-center flex-column" style="padding-top: 50px;">
            <div class="form-group mb-3" style="width: 400px;">
              <input type="text" class="form-control" placeholder="Masukkan id learning anda" name="id" style="height: 8vh; border-radius: 35px;">

            </div>
            <div class="form-group mb-3" style="width: 400px;">
              <input type="password" class="form-control" placeholder="Masukkan Password learning anda" name="pwd" style="height: 8vh; border-radius: 35px;">

            </div>
            <div class="row">
              <div class="col-12">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <span style="padding: 10px; color:#fff; font-size: 1rem;">Remember Me</span>
                  <br>
                  <span style="padding: 10px; color:#fff; font-size: 15px;">*Login menggunakan E-learning Politeknik Negeri Batam</span>

                </div>
              </div>


            </div>

            <div class="col-12">
              <a href="app/guest.php" class="btn btn-primary" style="margin-top: 50px; margin-left: 50px; width: 150px; height:50px; box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.25); font-size:large; text-align: center;">GUEST</a>
              <button type=" submit" class="btn btn-primary" style="float: right; margin: 50px; width: 200px; height: 50px; font-size:large; box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.25);">LOGIN</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

</div>










<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
</body>

</html>