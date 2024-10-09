<?php 
require "koneksi.php"; 

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

    <link rel="stylesheet" href="styles/style-catalog.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Pety</title>
</head>
<body>
    <nav id="navbar">
        <div class="nav-judul">
        <h1 class="logo">
            <img src="Assets/logo.png" alt="logo" width="100px">
        </h1>
        </div>
        <div class="nav-judul">
            <p>ALL ABOUT DOG</p>
        </div>
        <div class="nav-back">
            <a href="index.php" class="back">
                 ←BACK
            </a>
        </div>
    </nav>

    <section id="catalog">
        <div class="catalog-container">
        <?php foreach($anjing as $ajg): ?>
            <div class="catalog-item">
                <img src="upload images/<?php echo $ajg['foto']; ?>" alt="Gambar ANJING" class="item-gambar">
                <p class="item-judul"><?php echo $ajg['nama']; ?></p>
                <a href="#" class="ctn-learn-more">Learn More</a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>