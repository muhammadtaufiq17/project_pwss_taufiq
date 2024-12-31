<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "book_club";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$jnsKL          = $_POST['jnsKL'];
$email          = $_POST['email'];
$phone          = $_POST['phone'];
$genre          = $_POST['genre'];
$buku_favorit   = $_POST['buku_favorit'];

$sql = "INSERT INTO members (nama, alamat, jnsKL, email, phone, genre, buku_favorit)
        VALUES ('$nama', '$alamat', '$jnsKL', '$email', '$phone', '$genre', '$buku_favorit')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran Anda Berhasil. <a href='member.php'>View Members</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
