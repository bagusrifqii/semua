<?php
echo "Hello, World!";
?>

<?php
$nama ="Bagus";
$umur ="18";
$tinggi ="168";
$is_student ="true";

echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . "<br>";
echo "Tinggi: " . $tinggi . "<br>";
echo "Mahasiswa: " . ($is_student ? "Ya" : "Tidak") . "<br>";
?>

<?php
$nilai = 85;

if ($nilai >= 90) {
    echo "Grade: A";
} elseif ($nilai >= 80) {
    echo "Grade: B";
} elseif ($nilai >= 70) {
    echo "Grade: C";
} else {
    echo "Grade: D";
}
?>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Nomor: " . $i . "<br>";
}

$buah = array("Apel", "Mangga", "Pisang");
foreach ($buah as $item) {
    echo "Buah:" . $item . "<br>";
}
?>

<?php
function sapa($nama) {
    return "Halo, " . $nama . "!";
}

echo sapa("Bagus");
?>

<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "test_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $sconn->connect_error);
}
echo "Koneksi berhasil";
?>

