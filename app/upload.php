<?php session_start();
if (!isset($_SESSION['id_users'])) {
    header("location: ../index.php");
} ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CREAVO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" type="assets/img/svg" href="https://i.ibb.co/Dpw76vg/Logo.png">
    <link href="assets/img/logo.PNG" rel="icon">
    <link href="assets/img/logo.PNG" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugin/sweetalert2/sweetalert2.min.css">
    <script src="assets/plugin/sweetalert2/sweetalert2.min.js"></script>


</head><!-- ======= Header ======= -->

<?php
$alert = isset($_GET['alert']);
if ($alert == 2) {
    echo "<script>alert('File anda terlalu besar!')</script>";
} else {
    echo "";
}

?>
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class=" container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="index.html"><img src="assets/img/logo.PNG" alt=""> </a></h1>

        </div>

        <nav id="navbar" class="navbar me-auto">
            <ul>
                <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="#category">Category</a></li>
                <li><a class="nav-link scrollto" href="#aboutus">About Us</a></li>
                <li><a class="nav-link scrollto active" href="#Upload">Upload</a></li>




            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <nav class="navbar nav-right">
            <ul>

                <li class="dropdown"><a href="#"><i class="bi bi-person-circle" style="font-size: 2rem;"></i></a>
                    <ul>
                        <li><a aria-disabled="" style="font-weight: bold; color: #fff;"><?= $_SESSION['username']; ?></a></li>
                        <div class="divider"></div>
                        <li><a href="profil.php">Account</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="logout.php" onclick="return confirm('Yakin ingin keluar?')">Log Out</a></li>

                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</header><!-- End Header -->

<main id="main">
    <!-- ======= Services Section ======= -->
    <!-- ======= Pricing Section ======= -->
    <section id="services" class="services">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body shadow-lg">
                            <div class="mb-5">
                                <form action="crud/upfile.php" method="post" enctype="multipart/form-data">
                                    <label for="Image" class="form-label"></label>
                                    <input class="form-control" type="file" id="formFile" name="file" onchange="preview()">
                                    <p style="font-size: 13; color:darkgray">*Ukuran gambar yang direkomendasikan 16x9</p>
                                    <p style="font-size: 13; color:red">File tidak boleh lebih dari 9 MB!</p>
                                    <p style="font-size: 13; color:red">File yang dapat diupload hanya .jpg/ .png/ .jpeg/ .mp4</p>

                            </div>
                            <img id="frame" src="" class="img-fluid" />


                        </div>
                    </div>

                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="card">
                        <div class="card-body shadow-lg">

                            <input type="text" name="id_users" value="<?= $_SESSION['id_users']; ?>" hidden>

                            <div class="form-group">
                                <label for="" style="font-weight: bold;">Title</label>
                                <input type="text" name="judul" class="form-control" id="name" placeholder="..." required>
                            </div>


                            <div class="form-group">
                                <label for="" style="font-weight: bold;">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="5" placeholder="..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" style="font-weight: bold;">Tags</label>
                              
                              <select class="form-select" aria-label="Default select example" name="tags">
  <option selected>...</option>
  <option>Music</option>
  <option>PBL</option>
  <option>Videography</option>
  <option>Photography</option>
  <option>Arts</option>
</select>
                               
                            </div>

                            <button class="btn btn-primary" type="submit">Upload</button>
                            </form>

                        </div>
                    </div>

                </div>





            </div>

        </div>
    </section><!-- End Pricing Section -->



    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "";
        }
    </script>

</main><!-- End #main -->

<?php include('footer.php'); ?>