
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
        </nav>
    </header>
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
            <!-- <input type="checkbox" id="lp" name="jnsKlm[]" value="lp">
            <label for="lp">Laki-laki</label>
            <input type="checkbox" id="pr" name="jnsKlm[]" value="pr">
            <label for="pr">Perempuan</label> -->
        </div>
        <div class="btn-group">
            <button id="buttonRegistrasi" type="submit" class="btn">Daftar</button>
            <button id="buttonBatal" type="button" class="btn cancel">Batal</button>
        </div>
    </form>
    <script>
        document.getElementById("buttonRegistrasi").addEventListener("click", function(event) {
            event.preventDefault();
            var form = document.getElementById("formRegistrasi");
            var nama = form.elements["nama"].value;
            alert("Selamat '" + nama + "' sudah terdaftar");
            form.elements["nama"].value = '';
            form.elements["alamat"].value = '';
            form.elements["jnsKL"].value = 'empty';
        });
    
        document.getElementById("buttonBatal").addEventListener("click", function() {
            window.location.href = "latihan_13.html"; // Replace with your desired URL
        });
    </script>
    <footer>
        &copy; 2024 Klub Buku Jogja
    </footer>
</body>
</html>
