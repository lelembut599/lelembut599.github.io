<?php 
    require '../koneksi.php';

    if (isset($_POST['registrasi'])){
        $username = htmlspecialchars($_POST['username']);
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
        $role = $_POST['role'];

        $checkUsername = "SELECT * FROM akun WHERE username = '$username'";
        $usernameResult = mysqli_query($conn, $checkUsername);
        if(mysqli_num_rows($usernameResult) > 0){
            echo "
            <script>
            alert('Username sudah digunakan!');
            document.location.href = 'registrasi.php';
            </script>
            ";
        }else{
            $insertUserSql = "INSERT INTO akun (username, pass_akun, role) VALUES ('$username', '$password', '$role')";
            if (mysqli_query($conn, $insertUserSql)){
                echo "<script>
                alert('Berhasil melakukan registrasi!');
                document.location.href = 'login.php';
                </script>";
            }else{
                echo "<script>
                alert('Gagal melakukan registrasi!');
                document.location.href = 'registrasi.php';
                </script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-regist.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Registrasi</title>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h1>Hi Buddy :)</h1>
            <p>To keep connected with us please regist with your personal information by email address and password.</p>
            <form action="" method="post">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <div class="remember-me">
                <select name="role" id="role">
                        <option value="" disabled selected>Pilih Role..</option>
                        <option name="role" value="admin">Admin</option>
                        <option name="role" value="user">User</option>
                    </select>
                </div>
                <button type="submit" name = "registrasi">Regist Now</button>
            </form>
        </div>
        <div class="login-illustration">
            <img src="../Assets/login.jpeg" alt="Login Illustration">
        </div>
    </div>
</body>
</html>