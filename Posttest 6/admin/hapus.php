<?php 
require "../koneksi.php";

$id = $_GET['id'];


$query = mysqli_query($conn, "SELECT foto FROM data_anjing WHERE id = $id");
$data = mysqli_fetch_assoc($query);
$foto = $data['foto']; 
$path = "../upload images/" . $foto;


if (file_exists($path)) {
    
    unlink($path);
}


$result = mysqli_query($conn, "DELETE FROM data_anjing WHERE id = $id");

if ($result) {
    echo "
    <script>
        document.location.href = 'data.php';
    </script>";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'data.php';
    </script>";
}
?>