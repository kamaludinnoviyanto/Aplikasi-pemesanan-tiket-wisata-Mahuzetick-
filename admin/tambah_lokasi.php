<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aksi_tambah_lokasi.php" method="POST" enctype="multipart/form-data">
        Harga: <input type="text" name="harga"> <p>
        Deskripsi: <textarea name="deskripsi"></textarea> <p>
        Gambar: <input type="file" name="gambar"> <p>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>