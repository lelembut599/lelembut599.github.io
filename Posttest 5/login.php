<?php 
require "koneksi.php";

if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if ($email == "pindo@gmail.com" && $password == "a") {
        echo "<script>
            alert('Login Berhasil!'); 
            document.location.href = 'admin/data.php';
        </script>";
    } else {
        echo "<script>
            alert('Login Gagal! Email atau password salah.');
            document.location.href = 'login.php';
        </script>";
    }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h1>Welcome Back :)</h1>
            <p>To keep connected with us please login with your personal information by email address and password.</p>
            <form action="" method="post">
                <input type="email" placeholder="Email Address" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <button type="submit" name = "login">Login Now</button>
                <div class="footer-links">
                    <a href="#">Create Account</a>
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </div>
        <div class="login-illustration">
            <img src="Assets/login.jpeg" alt="Login Illustration">
        </div>
    </div>
</body>
</html>