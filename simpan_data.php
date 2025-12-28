<?php 
    //koneksi 
    include('koneksi.php'); 

    //mengambil data dari form 
    $judul = $_POST['judul']; 

    //simpan data kedatabase 
    $sql="insert into list (judul) values ('$judul')"; 
    mysqli_query($koneksi, $sql) or die ("Gagal SQL"); 
?>