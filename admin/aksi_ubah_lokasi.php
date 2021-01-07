<?php
    include "../koneksi.php";

    $id_lokasi =$_GET['id_lokasi'];
    $harga=$_POST['harga'];
    $deskripsi=$_POST['deskripsi'];

    // ubah data karyawan
    $query=mysqli_query($koneksi,"UPDATE lokasi SET harga='$harga', deskripsi='$deskripsi' WHERE id_lokasi='$id_lokasi' ");
    if($query){
        header('location:lokasi.php');
        //jika berhasil di delete langsung beralih ke index.php atau tampilan awal
    } else {
        //jika tidak berhasil tampil tulisan gagal
        echo "gagal";
    }
?>