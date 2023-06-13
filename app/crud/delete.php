<?php
session_start();
include('../../conf/config.php');

$id_post = $_GET['id_post'];


$query = mysqli_query($koneksi, "DELETE FROM posts WHERE id_post ='$id_post'");


header('location: ../profil.php');
