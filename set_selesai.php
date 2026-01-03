<?php
    // koneksi
    include('koneksi.php'); 

    // mengambil nilai dari parameter id 
    $id = $_GET['id']; 

    // perintah sql utuk set selesai 
    $sql="update list set status_selesai=1 where id='$id'"; 
    mysqli_query($koneksi, $sql) or die ("Gagal SQL"); 

    // pindah halaman ke halaman index 
    header('location:index.php'); 
?>