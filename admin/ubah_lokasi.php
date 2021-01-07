<?php include "../koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Edit data lokasi</h2>
    <hr>
    <?php
    
        $id_lokasi=$_GET['id_lokasi'];
        //menampilkan data karyawan yang ingin kita ubah
        $query = mysqli_query($koneksi, "SELECT * FROM lokasi WHERE id_lokasi='$id_lokasi'");
        $data = mysqli_fetch_array($query);
    ?>
    <!-- ambil data yang akan di edit-->
    <form action="aksi_ubah_lokasi.php?id_lokasi=<?= "$id_lokasi"; ?>" method="POST">
        <p> 
            Harga: <input type="text" name="harga" value="<?= $data['harga']; ?>" required> 
        </p>
        <p> Deskripsi: <textarea name="deskripsi" required> <?= $data['deskripsi']; ?></textarea>  
        </p>
            <!-- tombol menyimpan data -->
        <p> <input type="submit" value="Simpan"> </p>
    </form>
</body>
</html>