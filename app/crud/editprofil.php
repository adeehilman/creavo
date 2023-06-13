<?php
include '../../conf/config.php';

session_start();
$id_users = $_POST['id_users'];
$username = $_POST['username'];
$nama = $_POST['nama_lengkap'];
$foto = $_POST['foto'];
$nim = $_POST['nim'];
$aboutme = $_POST['aboutme'];
$jurusan = $_POST['jurusan'];
$tags = $_POST['tags_user'];
$ig = $_POST['instagram'];
$lin = $_POST['linkedin'];
$twt = $_POST['twitter'];

// echo $id_users, $username, $nama, $nim, $aboutme, $jurusan, $tags, $ig, $lin, $twt;

mysqli_query($koneksi, "UPDATE `users` SET id_users= '$id_users',username='$username',
nama_lengkap='$nama',foto='$foto',nim= '$nim',jurusan=NULL,desc_user ='$aboutme',tags_user=
'$tags',user_ig='$ig',user_lin='$lin',user_twt='$twt' WHERE id_users ='$id_users';");

header("location: ../profil.php");
