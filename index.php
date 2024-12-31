
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Klub Buku Jogja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- INI MERUPAKAN IMPLEMENTASI MATERI SINTAKS DASAR -->
        <h1><?php echo "Selamat Datang Para Kutu Buku"; ?></h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="member.php">Anggota</a>
            <a href="registration.php">Registrasi</a>
            <a href="event.php">Acara</a>
        </nav>
    </header>
    <main>
        <article>
            <div class="about">
                <img src="image/diskusi.jpg" alt="Diskusi kelompok" class="about-image">
                <p>
                    <b>TENTANG KAMI</b><br/>
                    Gemar membaca merupakan salah satu ciri bangsa yang hebat. Klub Buku Jogja merupakan komunitas yang hadir untuk mewadahi
                    para pecinta buku dan pegiat literasi. Diskusi dalam klub ini bersifat ilmiah populer. Kata ilmiah di sini mengandung pengertian bahwa topik atau tema yang didiskusikan berupa tema yang berhubungan dengan perkembangan ilmu pengetahuan dan penelitian di bidang kebahasaan dan kesastraan. Kata populer digunakan untuk mewadahi topik atau tema yang berasal dari hasil membaca karya-karya populer untuk menambah pengetahuan umum anggota klub ini. Dengan demikian, karya-karya yang didiskusikan tidak hanya terbatas pada tema kebahasaan dan kesastraan, tetapi juga mencakup tema pengetahuan umum lain yang bermanfaat untuk meningkatkan kualitas hidup anggota klub baca ini. Mari berkumpul dan tumbuh bersama Klub Buku Jogja.
                </p>
            </div>
            <div>
        </article>
        <div style="text-align:center;"><h2><b>ACARA TERDEKAT</b></h2></div>
        <section class="event-container">
            <div class="event-box">
                    <h2>Diskusi Buku: "Aroma Karsa - Dee Lestari"</h2>
                    <p>
                        Membedah buku dan diskusi literasi novel fiksi karya Dee Lestari berjudul Aroma Karsa
                    </p>
                    <a href="event.php?event_id=1" class="btn">Cari Tau</a>
                </div>
                <div class="event-box">
                    <h2>Diskusi Kelompok Bulanan</h2>
                    <p>
                        Diskusi kelompok dengan jumlah 8 orang.Masing-masing anggota membawa dan menjelaskan buku bacaannya. 
                    </p>
                    <a href="event.php?event_id=2" class="btn">Cari Tau</a>
                </div>
                <div class="event-box">
                    <h2>Pameran Buku Penerbit Indie</h2>
                    <p>
                        Pameran buku-buku yang diterbitkan dari penerbit-penerbit indie dengan berbagai genre buku yang ditawarkan.
                    </p>
                    <a href="event.php?event_id=3" class="btn">Cari Tau</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
