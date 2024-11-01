<?php
$members = [];
if (isset($_GET['name'])) {
    $members[] = htmlspecialchars($_GET['name']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Members</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="member.php">Anggota</a>
            <a href="registration.php">Registrasi</a>
        </nav>
    </header>
    <main>
        <h2>Current Members</h2>
        <ul>
            <?php
            if (isset($_SESSION['members']) && count($_SESSION['members']) > 0) {
                foreach ($_SESSION['members'] as $member) {
                    echo "<li>" . htmlspecialchars($member) . "</li>";
                }
            } else {
                echo "<li>No members registered yet.</li>";
            }
            ?>
        </ul>
    </main>
</body>
</html>
