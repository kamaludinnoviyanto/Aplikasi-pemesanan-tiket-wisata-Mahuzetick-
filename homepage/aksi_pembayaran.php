<?php 
    include "../koneksi.php";

    $user   = $_POST['username'];
    $lokasi = $_POST['id_lokasi'];
    
    $namaFile = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "upload/";

    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    if ($terupload) {
        $query = mysqli_query($koneksi,"INSERT INTO pembayaran VALUES('','$lokasi','$user', '', '$nama_gambar_baru')");
        if(!$query){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        } else {
            var_dump("INSERT INTO pembayaran VALUES('','$lokasi','$user', '', '$nama_gambar_baru')");
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil ditambah.');window.location='lokasi.php';</script>";
        }
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
        echo $namaFile;
        echo "Upload Gagal!";
    }  
?>