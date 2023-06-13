<?php
include '../../conf/config.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$id_users = $_POST['id_users'];
$tags = $_POST['tags'];
$tgl = $_POST['tgl'];
$id_post = $_POST['id_post'];
$namefile = $_POST['namefile'];


$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'jfif', 'mp4');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// mysqli_query($koneksi, "UPDATE `posts` SET id_post= NULL,judul='$judul',file='$filename',deskripsi='$deskripsi',tag= '$tags',id_tag=NULL,id_comment=NULL,id_like=NULL,id_user='$id_users',created_at='$tgl',updated_at=current_timestamp() WHERE id_post ='$id_post';");

if($filename == false){
    // echo $namefile ;
    if ($ukuran < 9999999) {
        mysqli_query($koneksi, "UPDATE `posts` SET id_post= NULL ,judul='$judul',file='$namefile',deskripsi='$deskripsi',tag= '$tags',id_tag=NULL,id_comment=NULL,id_like=NULL,id_user='$id_users',created_at='$tgl',updated_at=current_timestamp() WHERE id_post ='$id_post';");
        header("location:../profil.php");
    }
} if (!in_array($ext, $ekstensi)) {
    header("location: ../profil.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 10440700000) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['file']['tmp_name'], '../assets/img/uploads/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "UPDATE `posts` SET id_post= NULL ,judul='$judul',file='$xx',deskripsi='$deskripsi',tag= '$tags',id_tag=NULL,id_comment=NULL,id_like=NULL,id_user='$id_users',created_at='$tgl',updated_at=current_timestamp() WHERE id_post ='$id_post';");
        header("location:../profil.php");
    } else {
        header("location: ../");
    }
}


