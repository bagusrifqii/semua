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

$nama = $_POST['nama'];
$umur = $_POST['umur'];

$sql = "INSERT INTO users (nama, umur) VALUE ('$nama', '$umur)";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>