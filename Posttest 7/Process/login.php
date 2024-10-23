<?php 
require "../koneksi.php";

session_start();

if (isset($_POST['login'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $checkUsername = "SELECT * FROM akun WHERE username='$username'";
    $checkUsernameResult = mysqli_query($conn, $checkUsername);

    if (mysqli_num_rows($checkUsernameResult) === 1) {
        $akun = mysqli_fetch_assoc($checkUsernameResult);

        if(password_verify($password, $akun['pass_akun'])){
            $_SESSION['login'] = true;
            if($akun['role'] === 'admin'){
                $_SESSION['role'] = 'admin';
                echo "<script>
                    alert('Login berhasil!');
                    document.location.href = '../admin/data.php';
                </script>";
            }else{
                $_SESSION['role'] = 'user';
                echo "<script>
                    alert('Login berhasil!');
                    document.location.href = '../catalog.php';
                </script>";
            }
        }else{
            echo "
            <script>
                alert('Password Salah!');
            </script>";
        }
    }else {
        echo "
        <script>
            alert('Username tidak ditemukan!');
        </script>";
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h1>Welcome Back :)</h1>
            <p>To keep connected with us please login with your personal information by email address and password.</p>
            <form action="" method="post">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <button type="submit" name = "login">Login Now</button>
                <div class="footer-links">
                    <a href="registrasi.php">Create Account</a>
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </div>
        <div class="login-illustration">
            <img src="../Assets/login.jpeg" alt="Login Illustration">
        </div>
    </div>
</body>
</html>