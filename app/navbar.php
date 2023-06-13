 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center ">
     <div class=" container d-flex align-items-center ">

         <div class="logo">
             <h1><a href="index.html"><img src="assets/img/logo.PNG" alt=""> </a></h1>

         </div>

         <nav id="navbar" class="navbar me-auto">
             <ul>
                 <li><a class="nav-link scrollto active" href="#hero" style="font-size: large;">Home</a></li>
                 <li><a class="nav-link scrollto" href="#category" style="font-size: large;">Category</a></li>
                 <li><a class="nav-link scrollto" href="#aboutus" style="font-size: large;">About Us</a></li>
                 <li><a class="nav-link scrollto " href="upload.php" style="font-size: large;">Upload</a></li>




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
     <div class="modal fade" id="exampleModal<?= $q['id_post']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     ...
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
             </div>
         </div>
     </div>
 </header><!-- End Header -->

 <?php
    include('footer.php'); ?>
 <script>
 </script>