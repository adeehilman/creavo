<?php

session_start();

include('config.php');

$id_user = $_POST['id'];
$password = $_POST['pwd'];

$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$id_user' AND password='$password'");


$query = mysqli_query($koneksi, "SELECT * FROM posts INNER JOIN users ON posts.id_user = users.id_users");
// if (mysqli_num_rows($query) == 1) {
//     header('location:../');
// } else {
//     header('location:../');
// }


$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['username'] == "guest") {

        // buat session login dan username

        $_SESSION['username'] = $data['username'];
        $_SESSION['id_users'] = $data['id_users'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['foto'] = $data['foto'];

        $nama = mysqli_fetch_array($login);
        // alihkan ke halaman dashboard admin
        header("location: ../app/index.php");


        // cek jika user login sebagai pegawai
    } else {
        // buat session login dan username
        $_SESSION['id_users'] = $data['id_users'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['foto'] = $data['foto'];
        $_SESSION['nim'] = $data['nim'];
        $_SESSION['video'] = $data['video'];
        $_SESSION['tags_user'] = $data['tags_user'];
        $_SESSION['jurusan'] = $data['jurusan'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['desc_user'] = $data['desc_user'];
        $_SESSION['user_ig'] = $data['user_ig'];
        $_SESSION['user_lin'] = $data['user_lin'];
        $_SESSION['user_twt'] = $data['user_twt'];





        // alihkan ke halaman dashboard pegawai
        header("location:../app/index.php");
    }
} else {
    header("location:../index.php?error=1");
}
