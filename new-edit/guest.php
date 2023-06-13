<?php
include('header.php');
include('../config.php');


?>



<?php include('navbar.php');

?>

<?php

$query = mysqli_query($koneksi, "SELECT * FROM posts INNER JOIN users ON posts.id_user = users.id_users");


?>

<main id="main">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container mt-3">

      <div class="section-title" data-aos="fade-up">

      </div>

      <div class="row">
        <!-- Perulangan dari Postingan Gambar -->
        <!-- <?php


              // $filename = $query['file'];
              // $ext = pathinfo($filename, PATHINFO_EXTENSION);

              // echo $ext;
              // if (in_array($ext, $ekstensi)) {
              //   header("location: ../index.php?alertgagal_ekstensi");
              // }
              ?> -->











        <!-- Perulangan dari Postingan Video -->
        <?php foreach ($query as $q) : ?>
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-3 justify-content">
            <div class="icon-box-2">
              <div class="row">
                <div class="col-md-2"><img src="assets/img/users/<?= $q['foto']; ?>" class="rounded-circle shadow-lg" width="50px" alt=""> </i>
                  &nbsp;&nbsp;&nbsp;</div>
                <div class="col-md-8"><span style="font-weight: bold;"><?= $q['nama_lengkap']; ?>
                  </span>
                  <?php if ($q['updated_at'] == true) { ?>
                    <p style="font-size:small">Update at <?= $q['updated_at']; ?></p>
                  <?php } else { ?>
                    <p style="font-size:small">Publish at <?= $q['created_at']; ?></p>
                  <?php } ?>

                </div>
                <div class="col-md-2 d-flex ">
                  <span style="position: relative; font-size: smaller; color: gray; margin-left: -40px;"><?= $q['tag'] ?></span>
                </div>

              </div>

              <?php
              // DISINI UNTUK MENGATUR FILE APA SAJA YANG BOLEH TAMPIL
              $ext = pathinfo($q['file'], PATHINFO_EXTENSION);
              $jpg = "jpg";
              $png = "png";
              $jpeg = "jpeg";
              $mp4 = "mp4";
              $jfif = "jfif";

              if ($ext == $jpg) {
              ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="200" style="background-size: cover;">
              <?php
              } else if ($ext == $png) {
              ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="200">
              <?php
              } else if ($ext == $jpeg) {
              ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="200">
              <?php
              } else if ($ext == $jfif) {
              ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="200">
              <?php
              } else { ?>
                <video width="100%" height="200" controls>
                  <source src="assets/img/uploads/<?= $q['file'] ?>" type="video/mp4">

                  Your browser does not support the video tag.
                </video>
              <?php }
              ?>




              <!-- <img src="assets/img/images/<?= $q['file']; ?>" alt=""> -->


              <div class="row">
                <div class="col-md-12 d-flex align-items-stretch " style="font-weight: bold; margin: 5px;">
                  <?= $q['judul']; ?>
                </div>
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Comment" style="border-radius: 35px; margin:5px;">
                </div>
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $q['id_post'] ?>" style="position:absolute; bottom: 0; font-size:small; text-align:center;">load more</a>


              </div>
            </div>

          </div>

          <div class="modal fade" id="exampleModal<?= $q['id_post'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content rounded-5">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-body-2">

                        <?php
                        // DISINI UNTUK MENGATUR FILE APA SAJA YANG BOLEH TAMPIL
                        $ext = pathinfo($q['file'], PATHINFO_EXTENSION);
                        $jpg = "jpg";
                        $png = "png";
                        $jpeg = "jpeg";
                        $mp4 = "mp4";
                        $jfif = "jfif";

                        if ($ext == $jpg) {
                        ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="400" style="background-size: cover;">
                        <?php
                        } else if ($ext == $png) {
                        ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="400">
                        <?php
                        } else if ($ext == $jpeg) {
                        ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="400">
                        <?php
                        } else if ($ext == $jfif) {
                        ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="400">
                        <?php
                        } else { ?>
                          <video width="100%" height="400" controls>
                            <source src="assets/img/uploads/<?= $q['file'] ?>" type="video/mp4">

                            Your browser does not support the video tag.
                          </video>
                        <?php }
                        ?>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-2"><img src="assets/img/users/<?= $q['foto']; ?>" class="rounded-circle shadow-lg" style="center: 0;" width="50px" alt=""> </i>
                          &nbsp;&nbsp;&nbsp;</div>
                        <div class="col-md-8"><span style="font-weight: bold;  font-size:2rem;"><?= $q['nama_lengkap']; ?></span><br>
                          <span><?= $q['tag']; ?></span>
                        </div>
                        <hr />
                        <div class="col-md-12 d-flex align-items-stretch " style="font-weight: bold; font-size:2rem; margin: 5px;">
                          <?= $q['judul']; ?>
                        </div>
                        <div class="col-md-12 d-flex align-items-stretch " style="font-size: medium; font-weight:lighter; margin: 5px;">
                          <?= $q['deskripsi']; ?>
                        </div>
                        <div class="col-md-12 d-flex align-items-stretch " style="font-size: medium; font-weight:lighter; margin: 5px;">
                          <i class="bi bi-hand-thumbs-up"></i>&nbsp;&nbsp;<i class="bi bi-chat-dots-fill"></i>&nbsp;&nbsp;<i class="bi bi-send"></i>&nbsp;&nbsp;
                        </div>
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Comment" style="border-radius: 35px; margin:5px;">
                        </div>


                      </div>




                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>


      </div>

      <!-- Button trigger modal -->


    </div>


    <!-- Modal -->



  </section><!-- End Services Section -->




</main><!-- End #main -->
<script>
  include('footer.php');

  var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), options)
</script>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>






<?php

$query = mysqli_query($koneksi, "SELECT * FROM posts INNER JOIN users ON posts.id_user = users.id_users");


?>

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
                <li><a class="nav-link scrollto " href="../index.php" onclick="return confirm('Anda Harus login! Apakah anda ingin melakukan login?')">Upload</a></li>




            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <nav class="navbar nav-right">
            <ul>

                <li class="dropdown"><a href="#"><i class="bi bi-person-circle" style="font-size: 2rem;"></i></a>
                    <ul>
                        <li><a aria-disabled="" style="font-weight: bold; color: #fff;">Guest</a></li>
                        <div class="divider"></div>
                        <li><a href="../index.php">Login</a></li>


                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</header><!-- End Header -->
<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container mt-5">

            <div class="section-title" data-aos="fade-up">

            </div>

            <div class="row">
                <?php foreach ($query as $q) : ?>
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-3 justify-content">
                        <div class="icon-box-2">
                            <div class="row">
                                <div class="col-md-2"><img src="assets/img/users/<?= $q['foto']; ?>" class="rounded-circle shadow-lg" width="50px" alt=""> </i>
                                    &nbsp;&nbsp;&nbsp;</div>
                                <div class="col-md-8"><span style="font-weight: bold;"><?= $q['nama_lengkap']; ?>
                                    </span>
                                    <?php if ($q['updated_at'] == true) { ?>
                                        <p style="font-size:small">Update at <?= $q['updated_at']; ?></p>
                                    <?php } else { ?>
                                        <p style="font-size:small">Publish at <?= $q['created_at']; ?></p>
                                    <?php } ?>

                                </div>
                                <div class="col-md-2 d-flex ">
                                    <span style="position: relative; font-size: smaller; color: gray; margin-left: -40px;"><?= $q['tag'] ?></span>
                                </div>

                            </div>

                            <?php
                            // DISINI UNTUK MENGATUR FILE APA SAJA YANG BOLEH TAMPIL
                            $ext = pathinfo($q['file'], PATHINFO_EXTENSION);
                            $jpg = "jpg";
                            $png = "png";
                            $jpeg = "jpeg";
                            $mp4 = "mp4";
                            $jfif = "jfif";

                            if ($ext == $jpg) {
                            ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="200" style="background-size: cover;">
                            <?php
                            } else if ($ext == $png) {
                            ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="200">
                            <?php
                            } else if ($ext == $jpeg) {
                            ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="200">
                            <?php
                            } else if ($ext == $jfif) {
                            ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="200">
                            <?php
                            } else { ?>
                                <video width="100%" height="200" controls>
                                    <source src="assets/img/uploads/<?= $q['file'] ?>" type="video/mp4">

                                    Your browser does not support the video tag.
                                </video>
                            <?php }
                            ?>




                            <!-- <img src="assets/img/images/<?= $q['file']; ?>" alt=""> -->


                            <div class="row">
                                <div class="col-md-12 d-flex align-items-stretch " style="font-weight: bold; margin: 5px;">
                                    <?= $q['judul']; ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Comment" style="border-radius: 35px; margin:5px;">
                                </div>
                                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $q['id_post'] ?>" style="position:absolute; bottom: 0; font-size:small; text-align:center;">load more</a>


                            </div>
                        </div>

                    </div>

                    <div class="modal fade" id="exampleModal<?= $q['id_post'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content rounded-5">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-body-2">

                                                <?php
                                                // DISINI UNTUK MENGATUR FILE APA SAJA YANG BOLEH TAMPIL
                                                $ext = pathinfo($q['file'], PATHINFO_EXTENSION);
                                                $jpg = "jpg";
                                                $png = "png";
                                                $jpeg = "jpeg";
                                                $mp4 = "mp4";
                                                $jfif = "jfif";

                                                if ($ext == $jpg) {
                                                ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="400" style="background-size: cover;">
                                                <?php
                                                } else if ($ext == $png) {
                                                ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="400">
                                                <?php
                                                } else if ($ext == $jpeg) {
                                                ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="400">
                                                <?php
                                                } else if ($ext == $jfif) {
                                                ?><img src="assets/img/uploads/<?= $q['file']; ?>" alt="" width="100%" height="400">
                                                <?php
                                                } else { ?>
                                                    <video width="100%" height="400" controls>
                                                        <source src="assets/img/uploads/<?= $q['file'] ?>" type="video/mp4">

                                                        Your browser does not support the video tag.
                                                    </video>
                                                <?php }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-2"><img src="assets/img/users/<?= $q['foto']; ?>" class="rounded-circle shadow-lg" style="center: 0;" width="50px" alt=""> </i>
                                                    &nbsp;&nbsp;&nbsp;</div>
                                                <div class="col-md-8"><span style="font-weight: bold;  font-size:2rem;"><?= $q['nama_lengkap']; ?></span><br>
                                                    <span><?= $q['tag']; ?></span>
                                                </div>
                                                <hr />
                                                <div class="col-md-12 d-flex align-items-stretch " style="font-weight: bold; font-size:2rem; margin: 5px;">
                                                    <?= $q['judul']; ?>
                                                </div>
                                                <div class="col-md-12 d-flex align-items-stretch " style="font-size: medium; font-weight:lighter; margin: 5px;">
                                                    <?= $q['deskripsi']; ?>
                                                </div>
                                                <div class="col-md-12 d-flex align-items-stretch " style="font-size: medium; font-weight:lighter; margin: 5px;">
                                                    <i class="bi bi-hand-thumbs-up"></i>&nbsp;&nbsp;<i class="bi bi-chat-dots-fill"></i>&nbsp;&nbsp;<i class="bi bi-send"></i>&nbsp;&nbsp;
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Comment" style="border-radius: 35px; margin:5px;">
                                                </div>


                                            </div>




                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>

        </div>
    </section><!-- End Services Section -->

    <script>
        function wajib() {
            alert("Anda harus login!")
        }
    </script>



</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>