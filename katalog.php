<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Agenda | ALVIC Multimedia TSU</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav>
            <a href="index.php" class="logo">
                <img src="assets/logo.png" alt="Logo ALVIC">
                <span>ALVIC</span>
            </a>
            <a href="index.php" class="tombol-nav">Beranda</a>
        </nav>
    </header>

    <section class="agenda">
        <h2>Agenda Kegiatan</h2>
        <p class="subjudul">
            Informasi kegiatan dan aktivitas kreatif ALVIC Multimedia TSU.
        </p>
        
        <div class="filter-agenda">
            <button class="filter-btn aktif" data-kategori="Semua">Semua</button>
            <button class="filter-btn" data-kategori="Fotografi">Fotografi</button>
            <button class="filter-btn" data-kategori="Pameran">Pameran</button>
            <button class="filter-btn" data-kategori="Expo">Expo</button>
            <button class="filter-btn" data-kategori="Workshop">Workshop</button>
        </div>


        <div class="daftar-agenda">
            <?php foreach ($agenda as $kegiatan): ?>
                <article class="kartu"
                data-kategori="<?= aman($kegiatan['kategori'])?>
                    <span class="kategori">
                        <?= aman($kegiatan["kategori"]) ?>
                    </span>

                    <h3><?= aman($kegiatan["nama"]) ?></h3>

                    <p class="tanggal">
                        <?= aman($kegiatan["tanggal"]) ?>
                    </p>

                    <p class="deskripsi">
                        <?= aman($kegiatan["deskripsi"]) ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        &copy; <?= date("Y") ?> ALVIC Multimedia TSU.
        Semua hak dilindungi.
    </footer>

</body>
</html>
