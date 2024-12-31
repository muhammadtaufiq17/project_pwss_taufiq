<?php
$events = [
    1 => [
        'judul' => 'Diskusi Buku: "Aroma Karsa - Dee Lestari"',
        'tanggal' => '10 Januari 2025',
        'deskripsi' => 'Membedah buku dan diskusi literasi novel fiksi karya Dee Lestari berjudul Aroma Karsa',
        'lokasi' => 'Jogja Book Club',
    ],
    2 => [
        'judul' => 'Diskusi Kelompok Bulanan',
        'tanggal' => '30 Januari 2025',
        'deskripsi' => 'Diskusi kelompok dengan jumlah 8 orang.Masing-masing anggota membawa dan menjelaskan buku bacaannya.',
        'lokasi' => 'Taman Denggung Sleman',
    ],
    3 => [
        'judul' => 'Pameran Buku Penerbit Indie',
        'tanggal' => '28 Februari 2025',
        'deskripsi' => 'Pameran buku-buku yang diterbitkan dari penerbit-penerbit indie dengan berbagai genre buku yang ditawarkan.',
        'lokasi' => 'JEC',
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acara Klub Buku</title>
    <link rel="stylesheet" href="style_event.css">
</head>
<body>
    <header>
        <h1>Acara Terdekat</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="member.php">Anggota</a>
            <a href="registration.php">Registrasi</a>
            <a href="event.php" class="active">Events</a>
        </nav>
    </header>
    <main>
        <section class="event-list">
            <div class="event-item" style="background-image: url('image/aroma.png'); background-repeat: no-repeat; background-position-x: right;">
                <h2>Diskusi Buku: "Aroma Karsa - Dee Lestari"</h2>
                <p><b>Tanggal: </b>10 Januari 2025</p>
                <p><b>Pembicara: </b>Rangga Dwi Kuswono, Gery Setiawan, Cici Hapsari</p>
                <p><b>Lokasi: </b>Jogja Book Club</p>
                <p>Membedah buku dan diskusi literasi novel fiksi karya Dee Lestari berjudul Aroma Karsa. 
                pembahasan akan dimulai dari fisik buku, struktur buku, isi buku, gaya penulisan dan interpretasi dari pembicara mengenai buku ini.
                </p>
            </div>
            <div class="event-item">
                <h2>Diskusi Kelompok Bulanan</h2>
                <p><b>Tanggal: </b>30 Januari 2025</p>
                <p><b>Lokasi: </b>Taman Denggung Sleman</p>
                <p>Diskusi kelompok dengan jumlah 8 orang.Masing-masing anggota membawa dan menjelaskan buku bacaannya.</p>
            </div>
            <div class="event-item">
                <h2>Pameran Buku Penerbit Indie</h2>
                <p><b>Tanggal: </b>28 Februari 2025</p>
                <p><b>Lokasi: </b>JEC</p>
                <p>Pameran buku-buku yang diterbitkan dari penerbit-penerbit indie dengan berbagai genre buku yang ditawarkan.</p>
            </div>
        </section>
    </main>
    <footer>
        &copy; 2024 Klub Buku Jogja. All rights reserved.
    </footer>
</body>
</html>
