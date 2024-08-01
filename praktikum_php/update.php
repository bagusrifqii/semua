<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "test_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];

$sql = "UPDATE users SET nama='$nama', umur='$umur' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
