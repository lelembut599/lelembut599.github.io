<?php 
require "koneksi.php"; 

session_start();

$query = "SELECT * FROM data_anjing";

if (isset($_GET['cari'])) {
    $cari = htmlspecialchars($_GET['cari']);
    $query = "SELECT * FROM data_anjing WHERE nama LIKE ?";
}

$stmt = $conn->prepare($query);

if (isset($_GET['cari'])) {
    $param = "%$cari%";
    $stmt->bind_param("s", $param);
}

$stmt->execute();
$result = $stmt->get_result();

$anjing = [];
while ($row = $result->fetch_assoc()) {
    $anjing[] = $row;
}

$stmt->close();
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
            <a href="Process/logout.php" class="back">
                LOGOUT
            </a>
        </div>
    </nav>
    <section id="search-bar-container">
    <div class="search-bar-content">
        <form action="" method="GET">
            <input type="text" name="cari" placeholder="Cari Anjing Disini" class="search-input">
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>
</section>
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
