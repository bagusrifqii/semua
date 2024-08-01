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

$sql = "SELECT id, nama, umur FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nama: " . $row["nama"]. " - Umur: " . $row["umur"]. "<br>";
    }
} else {
    echo "0 result";
}

$conn->close();
?>
