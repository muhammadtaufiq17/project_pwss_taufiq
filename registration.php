
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Anggota</title>
    <link rel="stylesheet" href="style_reg.css">
</head>
<body>
    <header>
        <p>Register jadi anggota klub !</p>
        <nav>
            <a href="index.php">Home</a>
            <a href="member.php">Anggota</a>
            <a href="registration.php">Registrasi</a>
            <a href="event.php">Acara</a>
        </nav>
    </header>

    <!-- INI MERUPAKAN IMPLEMENTASI MATERI FORM -->
    <form id="formRegistrasi" action="submit.php" method="post">
        <h1>Form Registrasi</h1>
        <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <input type="text" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin :
            <select id="jnsKL" name="jnsKL">
                <option value="empty"></option>
                <option value="lp">Laki-laki</option>
                <option value="pr">Perempuan</option>
            </select>
            </label>
        </div>
        <div class="form-group">
            <label for="alamat">Email :</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="alamat">No HP :</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="alamat">Genre Favorit :</label>
            <input type="text" id="genre" name="genre" required>
        </div>
        <div class="form-group">
            <label for="alamat">Buku Favorit :</label>
            <input type="text" id="buku_favorit" name="buku_favorit" required>
        </div>
        <div class="btn-group">
            <button id="buttonRegistrasi" type="submit" class="btn">Daftar</button>
            <button id="buttonBatal" type="button" class="btn cancel">Batal</button>
        </div>
    </form>
    <script>
        // Ini merupakan implementasi materi Fungsi
        document.getElementById("buttonBatal").addEventListener("click", function() {
            window.location.href = "latihan_13.html";
        });
    </script>
    <footer>
        &copy; 2024 Klub Buku Jogja
    </footer>
</body>
</html>
