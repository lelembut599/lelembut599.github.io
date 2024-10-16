<?php
require "../koneksi.php";

$id = $_GET['id'];


$query = mysqli_query($conn, "SELECT * FROM data_anjing WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['edit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $desc = htmlspecialchars($_POST['desc']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $fotoLama = $data['foto']; 

    if ($_FILES['foto']['name']) {
        $fotoBaruUpload = $_FILES['foto']['name'];
        $fotoTmp = $_FILES['foto']['tmp_name'];

        $file_ekstensi = pathinfo($fotoBaruUpload, PATHINFO_EXTENSION);
        $fotoBaru = date('Y-m-d_H-i-s').'.'.$file_ekstensi;

        $pathLama = "../upload images/" . $fotoLama;
        $pathBaru = "../upload images/" . $fotoBaru;

        
        if (file_exists($pathLama)) {
            unlink($pathLama);
        }

       
        move_uploaded_file($fotoTmp, $pathBaru);
    } else {
        $fotoBaru = $fotoLama;
    }


    $sql = "UPDATE data_anjing SET nama = ?, deskripsi = ?, foto = ?, tanggal = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nama, $desc, $fotoBaru, $tanggal, $id);

    if ($stmt->execute()) {
        echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'data.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diubah!');
        </script>";
    }

    $stmt->close();
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-edit.css">

    <title>Edit Anjing</title>
</head>
<body>

    <section id="edit-data">
        <div class="judul">
            <p>Edit Data Anjing</p>
        </div>

        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" value="<?php echo $data['nama']; ?>" id="nama" name="nama" required>
                <input type="date" value="<?php echo $tanggal['tanggal']; ?>" id="tanggal" name="tanggal" required>
                <div class="foto">
                    <label for="foto">Gambar Saat Ini</label><br>
                    <img src="../upload images/<?php echo $data['foto']; ?>" alt="Gambar Anjing" width="100"><br><br>
                    <label for="foto">Pilih Gambar Baru (jika ingin mengubah)</label>
                    <input type="file" name="foto" id="foto">
                </div>
                <textarea placeholder="Deskripsi" id="desc" name="desc" class="comment-input" required></textarea>
                <input type="submit" value="Edit Data" name="edit" id="edit">
            </form>
        </div>
    </section>

</body>
</html>
