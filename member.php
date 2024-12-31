<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_club";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nama, genre, alamat, buku_favorit FROM members";
$result = $conn->query($sql);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Anggota</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="member.php">Anggota</a>
            <a href="registration.php">Registrasi</a>
            <a href="event.php">Acara</a>
        </nav>
    </header>
    <main>
        <h1>Daftar Anggota</h1>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Genre Favorit</th>
                <th>Buku Favorit</th>
                <th>Domisili</th>
                <!-- <th>Email</th> -->
                <!-- <th>No. HP</th> -->
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["nama"] . "</td>
                            <td>" . $row["genre"] . "</td>
                            <td>" . $row["buku_favorit"] . "</td>
                            <td>" . $row["alamat"] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No members found</td></tr>";
            }
            ?>
        </table>
    </main>
</body>
</html>
<?php
$conn->close();
?>
