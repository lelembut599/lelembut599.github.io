<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Daftar Anjing Ras</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <h1 class="logo">
            <img src="Assets/logo.png" alt="logo" width="150px">
        </h1>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#catalog">Catalog</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="login.php">Sign In</a></li>
            <li>
                <div class="switch">
                    <input type="checkbox" id="darkModeToggle">
                    <label for="darkModeToggle"></label>
                </div>
            </li>
        </ul>
        <img src="Assets/main-menu.png" width="30px" class="menu-btn" alt="menu-button">
    </nav>

    <!-- Header Section -->
    <header id="home">
        <div class="header-content">
            <h2>Daftar Ras Anjing Yang Berbeda</h2>
            <h1>Only With Pety</h1>
            <a href="#" class="ctn">About Pety</a>
        </div>
    </header>

    <!-- Catalog Section -->
    <section class="catalog" id="catalog">
        <div class="overlay" onclick="openOverlay()"></div>
        <div class="catalog-container">
            <div class="catalog-item">
                <img src="Assets/malamute.png" alt="Gambar Anjing" class="item-gambar">
                <p class="judul-item">Alaskan Malamute</p>
                <a href="#" class="ctn learn-more">Learn More</a>
            </div>
            <div class="catalog-item">
                <img src="Assets/pomeranian.png" alt="Gambar Anjing" class="item-gambar">
                <p class="judul-item">Pomeranian</p>
                <a href="#" class="ctn learn-more">Learn More</a>
            </div>
            <div class="catalog-item">
                <img src="Assets/akita.png" alt="Gambar Anjing" class="item-gambar">
                <p class="judul-item">Akita</p>
                <a href="#" class="ctn learn-more">Learn More</a>
            </div>
            <div class="catalog-item">
                <img src="Assets/pyrenean.png" alt="Gambar Anjing" class="item-gambar">
                <p class="judul-item">Pyrenean</p>
                <a href="#" class="ctn learn-more">Learn More</a>
            </div>
            <div class="catalog-item">
                <img src="Assets/golden.png" alt="Gambar Anjing" class="item-gambar">
                <p class="judul-item">Golden Retriever</p>
                <a href="#" class="ctn learn-more">Learn More</a>
            </div>
            <div class="catalog-item">
                <img src="Assets/pug.png" alt="Gambar Anjing" class="item-gambar-pug">
                <p class="judul-item">Pug</p>
                <a href="#" class="ctn learn-more">Learn More</a>
            </div>
            <div class="catalog-item">
                <img src="Assets/corgi.png" alt="Gambar Anjing" class="item-gambar">
                <p class="judul-item">Corgi</p>
                <a href="#" class="ctn learn-more">Learn More</a>
            </div>
            <div class="catalog-item">
                <img src="Assets/poodle.png" alt="Gambar Anjing" class="item-gambar">
                <p class="judul-item">Poodle</p>
                <a href="#" class="ctn learn-more">Learn More</a>
            </div>
            <div class="catalog-item">
                <img src="Assets/shih tzu.png" alt="Gambar Anjing" class="item-gambar">
                <p class="judul-item">Shih Tzu</p>
                <a href="#" class="ctn learn-more">Learn More</a>
            </div>
            <div >
                <a href ="catalog.php" class = "show-more-btn">
                        SHOW MORE ➔ 
                </a>
            </div>        
        </div>
        </div>
    </section>
        <div class="popup-container">
            <button type="submit" class = "popup-btn" onclick="openPopup()">Kritik Dan Saran</button>
            <div class="overlay" id="overlay" onclick="closePopup()"></div>
            <div class="popup" id="popup">
                <img src="Assets/pen.png" alt="pen" class="popup-img">
                <button id="close-popup" class="close-button" onclick="closePopup()">
                    <img src="Assets/cross.png" alt="keluar" class="x-img" >
                </button>
                <h2>Kritik Dan Saran</h2>
                <div class="form-container">
                    <form  action="form.php" method="GET">
                        <input type="text" placeholder="Nama" name="nama">
                        <input type="email" placeholder="E-mail" name="email">
                        <input type="number" placeholder="Telp" name="telp">
                        <textarea placeholder="Komentar Anda" name="komen" class="comment-input"></textarea>
                        <input type="submit" placeholder="KIRIM" name="submit" onclick="colsePopup()">
                    </form>
                </div>
            </div>
        </div>
    <section>

    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="overlay" onclick="openOverlay()"></div>
        <div class="title">
            <h1>About Us</h1>
            <div class="line"></div>
        </div>
        <div class="about-container">
            <div class="about-item">
                <img src="Assets/a.jpg" alt="Gambar Orang" class="about-gambar">
                <div>"Halo, Perkenalkan saya Christian mahasiswa dari Universitas Mulawarman prodi informatika"</div>
            </div>
        </div>
        <div class="footer-content">
            <p>Copyright © 2024 Pety</p>
        </div>
    </section>

    <script src="script/script.js"></script>
</body>
</html>
