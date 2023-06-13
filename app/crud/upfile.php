<?php
session_start();
include '../../conf/config.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$id_users = $_POST['id_users'];
$tags = $_POST['tags'];
$tgl = date('Y-m-d H:i:s');


$rand = rand();
$ekstensi =  array('mp4', 'jpg', 'jpeg', 'png', 'jfif');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


// echo $filename, $judul, $deskripsi, $id_users, $tags, $tgl;

if (!in_array($ext, $ekstensi)) {
    header("location: ../upload.php?alert=2");
} else {
    if ($ukuran < 9999999) {
        echo $filename;
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['file']['tmp_name'], '../assets/img/uploads/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "INSERT INTO `posts` (`id_post`, `judul`, `file`, `deskripsi`, `tag`, `id_tag`, `id_comment`, `id_like`, `id_user`, `created_at`,`updated_at`) VALUES (NULL, '$judul', '$xx', '$deskripsi', '$tags', NULL, NULL, NULL, '$id_users', current_timestamp(),NULL);");
        header("location:../index.php");
    } else {
        header("location: ../upload.php?alert=2");
        // echo $filename, $judul, $deskripsi, $id_users, $tags, $tgl;

    }
}
