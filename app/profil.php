<?php session_start();

session_reset();

if (!isset($_SESSION['id_users'])) {
    header("location: ../index.php");
}
include('../conf/config.php');
$id = $_SESSION['id_users'];
$nim = $_SESSION['nim'];
$kueri = mysqli_query($koneksi, "SELECT * FROM users WHERE nim = '$nim'");
$query = mysqli_query($koneksi, "SELECT * FROM posts INNER JOIN users ON posts.id_user = users.id_users WHERE id_users = '$id'");



// $view = mysqli_query($koneksi, "SELECT * FROM posts WHERE id='$id'");
// $kueri = mysqli_fetch_array($query);
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
                <li><a class="nav-link scrollto " href="upload.php">Upload</a></li>




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

    <section id="services" class="services">
        <div class="container" style="margin-top: 50px;">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body shadow-lg">
                            <div class="row">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#editAkun<?= $_SESSION['id_users']; ?>"><i class="bi bi-pencil-square" style="float: right; font-size: 2rem; color: gray;" title="Edit Profil"></i></a>
                            </div>

                            <?php while ($q2 = mysqli_fetch_assoc($kueri)) : ?>
                                <img src="assets/img/users/<?= $_SESSION['foto']; ?>" class="rounded-circle shadow-lg" width="150px" alt="">
                                <br>
                                <br>
                                <h2 style="font-weight: bold;"><?= $q2['nama_lengkap']; ?></h3>
                                    <span><?= $q2['nim']; ?></span>
                                    <p style="color: grey;"><?= $q2['tags_user']; ?></p>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" disabled><?= $q2['desc_user']; ?></textarea>
                                    </div>
                                    <br>
                                    <a href="https://instagram.com/<?= $q2['user_ig']; ?>" target="_blank"><i class="bl bi-instagram" style="font-size: 2rem; color: #c32aa3;"></i></a>

                                    <a href="https://id.linkedin.com/<?= $q2['user_lin']; ?>" target="_blank"><i class="bl bi-linkedin" style="font-size: 2rem; color: #0a66c2"></i></a>
                                    <a href="https://twitter.com/<?= $q2['user_twt']; ?>" target="_blank"> <i class="bl bi-twitter" style="font-size: 2rem; color: #1da1f2;"></i></a>

                                <?php endwhile; ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8 col-md-6">
                    <h2 style="font-weight: bold;">Postingan Anda</h2>

                    <div class="row">

                        <?php foreach ($query as $k) : ?>
                            <div class="col-lg-4 d-flex">

                                <div class="icon-box shadow-lg">


                                    <!-- <img src="assets/img/images/" alt=""> -->
                                    <div class="row">
                                        <?php
                                        // DISINI UNTUK MENGATUR FILE APA SAJA YANG BOLEH TAMPIL
                                        $ext = pathinfo($k['file'], PATHINFO_EXTENSION);
                                        $jpg = "jpg";
                                        $png = "png";
                                        $jpeg = "jpeg";
                                        $mp4 = "mp4";
                                        $jfif = "jfif";

                                        if ($ext == $jpg) {
                                        ?><img src="assets/img/uploads/<?= $k['file']; ?>" alt="" width="100%" height="100" style="background-size: cover;">
                                        <?php
                                        } else if ($ext == $png) {
                                        ?><img src="assets/img/uploads/<?= $k['file']; ?>" alt="" width="100%" height="100">
                                        <?php
                                        } else if ($ext == $jfif) {
                                        ?><img src="assets/img/uploads/<?= $k['file']; ?>" alt="" width="100%" height="100">
                                        <?php
                                        } else if ($ext == $jpeg) {
                                        ?><img src="assets/img/uploads/<?= $k['file']; ?>" alt="" width="100%" height="100">
                                        <?php
                                        } else if ($ext == $mp4) { ?>
                                            <video width="100%" height="100" controls>
                                                <source src="assets/img/uploads/<?= $k['file'] ?>" type="video/mp4">

                                                Your browser does not support the video tag.
                                            </video>
                                        <?php }
                                        ?>
                                        <div class="col-md-12 d-flex align-items-stretch " style="font-weight: bold;">
                                            <?= $k['judul']; ?>

                                        </div>
                                        <p style="color: grey; font-weight: thin;"><?= $k['created_at']; ?></p>
                                        <div class="col-md-6 d-flex align-items-stretch " style="font-weight: bold;">

                                        </div>

                                        <div class="col-md-12 d-flex mt-10 " style="font-weight: bold;">
                                            <a class="btn btn-warning" class="btn btn-info" href="profil_edit.php?id_post=<?php echo $k['id_post']; ?>"><i class="bi bi-pencil-fill" style="font-size: 1rem; color:#fff"></i></a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger mt 10" href="crud/delete.php?id_post=<?php echo $k['id_post']; ?>" onclick="return confirm('Yakin ingin menghapus postingan?')"><i class="bi bi-trash-fill" style="font-size: 1rem; color:#fff"></i></a>

                                        </div>



                                    </div>


                                </div>


                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" id="editAkun<?php echo $_SESSION['id_users']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content rounded-4">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Akun</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body shadow-lg">
                                <form action="crud/editprofil.php" method="post">
                                    <a href=""> <img src="assets/img/users/<?= $_SESSION['foto']; ?>" class="rounded-circle shadow-lg" width="150px" alt=""></a>

                                    <br>
                                    <br>
                                    <input type="" name="foto" value="<?= $_SESSION['foto']; ?>" hidden>
                                    <input type="" name="id_users" value="<?= $_SESSION['id_users']; ?>" hidden>
                                    <input type="" name="username" value="<?= $_SESSION['username']; ?>" hidden>
                                    <input type="" name="password" value="<?= $_SESSION['password']; ?>" hidden>
                                    <input type="" name="nama_lengkap" value="<?= $_SESSION['nama_lengkap']; ?>" hidden>
                                    <input type="" name="nim" value="<?= $_SESSION['nim']; ?>" hidden>
                                    <input type="" name="jurusan" value="<?= $_SESSION['jurusan']; ?>" hidden>

                                    <h2 style="font-weight: bold;"><?= $_SESSION['nama_lengkap']; ?></h3>
                                        <span style="font-weight: bold;"><?= $_SESSION['nim']; ?></span>
                                        <div class="form-group">
                                            <label for="aboutme">Tags</label>
                                            <input type="text" name="tags_user" class="form-control" id="tags_user" value="<?= $_SESSION['tags_user']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="aboutme">About Me</label>
                                            <textarea class="form-control" name="aboutme" rows="5" value="<?= $_SESSION['desc_user']; ?>"></textarea>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4  d-flex mx-auto">
                                                <i class="bl bi-instagram" style="font-size: 2rem;"><a href="#"></a></i>
                                                <div class="form-group">
                                                    <input type="sosmed" name="instagram" class="form-control" id="instagram" placeholder="" value="<?= $_SESSION['user_ig']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4  d-flex mx-auto">
                                                <i class="bl bi-linkedin" style="font-size: 2rem;"><a href="#"></a></i>
                                                <div class="form-group">
                                                    <input type="sosmed" name="linkedin" class="form-control" id="linkedin" placeholder="" value="<?= $_SESSION['user_lin']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 d-flex mx-auto">
                                                <i class="bl bi-twitter" style="font-size: 2rem;"><a href="#"></a></i>
                                                <div class="form-group">
                                                    <input type="sosmed" name="twitter" class="form-control" id="twitter" placeholder="" value="<?= $_SESSION['user_twt']; ?>" required>
                                                </div>
                                            </div>
                                        </div>





                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
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
        };
    </script>

</main><!-- End #main -->

<?php include('footer.php'); ?>