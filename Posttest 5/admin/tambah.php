<?php 
require "../koneksi.php";

if (isset($_POST['tambah'])){
    $nama = htmlspecialchars($_POST['nama']);
    $desc = htmlspecialchars($_POST['desc']);
    $tanggal = htmlspecialchars($_POST['tanggal']);

    $gambar = $_FILES['foto']['name']; 
    $gambartmp = $_FILES['foto']['tmp_name']; 
    
    
    $target_dir = "../upload images/";
    $target_file = $target_dir . basename($gambar); 

    
    if (move_uploaded_file($gambartmp, $target_file)) {
        
        $sql = "INSERT INTO data_anjing (nama, deskripsi, foto, tanggal) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nama, $desc, $gambar, $tanggal); 
        
        if ($stmt->execute()) {
            echo "<script>
            document.location.href = 'data.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'data.php';
            </script>";
        }
        
        $stmt->close();
    } else {
        echo "<script>
        alert('Gagal Mengupload Gambar!');
        </script>";
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/style-tambah.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anjing</title>
</head>
<body>

    <section id="tambah-data">
        <div class="judul">
            <p>Tambah Data Anjing</p>
        </div>

        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="foto">
                    <label for="foto">Masukkan Nama Anjing</label>
                    <input type="text" placeholder="Nama" id="nama" name="nama" required>
                </div>
                <div class="foto">
                    <label for="foto">Masukkan Tanggal Data</label>
                    <input type="date" placeholder="DD-MM-YY" id="date" name="tanggal" required>
                </div>
                <div class="foto">
                    <label for="foto">Masukkan Gambar Anjing</label>
                    <input type="file" name="foto" id="foto" value="Gambar anjing" required>
                </div>
                <textarea placeholder="Deskripsi" id="desc" name="desc" class="comment-input" required></textarea>
                <input type="submit" value="Tambah Data" name="tambah" id="tambah">
            </form>
        </div>
    </section>


</body>
</html>