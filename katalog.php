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
    <title>Katalog Agenda | ALVIC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <a href="index.php" class="logo">
            <img src="assets/logo.png" alt="Logo ALVIC">
            <span>ALVIC</span>
        </a>

        <a href="index.php">Beranda</a>
    </nav>
</header>

<main class="agenda">
    <h2>Katalog Agenda</h2>
    <p class="subjudul">
        Temukan berbagai kegiatan dan agenda kreatif UKM ALVIC.
    </p>

    <div class="ringkasan">
        <p>Total Agenda: <strong><?= jumlahAgenda($agenda); ?></strong></p>
        <p>Fotografi: <strong><?= hitungKategori($agenda, 'Fotografi'); ?></strong></p>
        <p>Pameran: <strong><?= hitungKategori($agenda, 'Pameran'); ?></strong></p>
        <p>Expo: <strong><?= hitungKategori($agenda, 'Expo'); ?></strong></p>
        <p>Workshop: <strong><?= hitungKategori($agenda, 'Workshop'); ?></strong></p>
    </div>

    <div class="filter-agenda">
        <button class="filter-btn aktif" data-kategori="Semua">Semua</button>
        <button class="filter-btn" data-kategori="Fotografi">Fotografi</button>
        <button class="filter-btn" data-kategori="Pameran">Pameran</button>
        <button class="filter-btn" data-kategori="Expo">Expo</button>
        <button class="filter-btn" data-kategori="Workshop">Workshop</button>
    </div>

    <div class="daftar-agenda">
        <?php foreach ($agenda as $item): ?>
            <article class="kartu"
                     data-kategori="<?= aman($item['kategori']); ?>">

                <span class="kategori">
                    <?= aman($item['kategori']); ?>
                </span>

                <h3><?= aman($item['nama']); ?></h3>

                <p class="tanggal"><?= aman($item['tanggal']); ?></p>

                <?php if ($item['tanggal'] === 'Coming Soon'): ?>
                    <span class="status segera">Segera Hadir</span>
                <?php elseif ($item['tanggal'] !== ''): ?>
                    <span class="status terjadwal">Terjadwal</span>
                <?php else: ?>
                    <span class="status">Tanggal Belum Ditentukan</span>
                <?php endif; ?>

                <p class="deskripsi">
                    <?= aman($item['deskripsi']); ?>
                </p>
            </article>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    <p>&copy; 2026 UKM ALVIC Multimedia TSU</p>
</footer>

<script>
    const tombolFilter = document.querySelectorAll('.filter-btn');
    const kartuAgenda = document.querySelectorAll('.kartu');

    tombolFilter.forEach(function(tombol) {
        tombol.addEventListener('click', function() {
            const kategoriDipilih = tombol.dataset.kategori;

            tombolFilter.forEach(function(item) {
                item.classList.remove('aktif');
            });

            tombol.classList.add('aktif');

            kartuAgenda.forEach(function(kartu) {
                const kategoriKartu = kartu.dataset.kategori;

                if (
                    kategoriDipilih === 'Semua' ||
                    kategoriDipilih === kategoriKartu
                ) {
                    kartu.style.display = 'block';
                } else {
                    kartu.style.display = 'none';
                }
            });
        });
    });
</script>

</body>
</html>
