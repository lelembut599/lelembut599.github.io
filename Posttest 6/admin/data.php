<?php 
require "../koneksi.php";

$sql = mysqli_query($conn, "SELECT * FROM data_anjing");

$anjing = [];
while ($row = mysqli_fetch_assoc($sql)) {
    $anjing[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../styles/style-data.css">
    <title>Admin Worksheet</title>
</head>
<body>
    <section id="data-anjing">
        <div class="data-judul">
            <p>Data Anjing</p>
        </div>

        <div class="back">
            <a href="../index.php" class = "back-btn">
                <i class="fa-solid fa-home"> BACK HOME</i>
            </a> 
        </div>
        <div class="tambah-anjing">
            <a href="tambah.php">
                <button>[+] Tambah Anjing</button>
            </a>
        </div>

        <table class="tabel-anjing">
            <thead>
                <tr class="tabel-header">
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($anjing as $ajg): ?>
                <tr class= "tabel-desc">
                    <td><img src="../upload images/<?php echo $ajg['foto']; ?>" alt="Gambar Anjing" class="upload" width="100px"></td>
                    <td><?php echo $ajg['nama']; ?></td>
                    <td><?php echo $ajg['deskripsi']; ?></td>
                    <td><?php echo $ajg['tanggal']; ?></td>
                    <td class="edit-data">
                        <div class="edit">
                            <a href="edit.php?id=<?php echo $ajg['id']?>">
                                <button>
                                <i class="fa-solid fa-pen"></i>
                                </button>
                            </a>
                        </div>
                    </td>
                    <td class="hapus-data">
                        <div class="hapus">
                            <a href="hapus.php?id=<?php echo $ajg['id']?>" >
                                <button>
                                <i class="fa-solid fa-trash"></i>   
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </section>
</body>
</html>