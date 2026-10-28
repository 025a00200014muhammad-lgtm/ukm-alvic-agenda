<?php

declare(strict_types=1);

$agenda = [
    [
        "nama" => "Photo Hunting",
        "kategori" => "Fotografi",
        "tanggal" => "Jadwal menyusul",
        "deskripsi" => "Kegiatan berburu foto bersama untuk melatih kemampuan fotografi anggota."
    ],
    [
        "nama" => "Mini Exhibition",
        "kategori" => "Pameran",
        "tanggal" => "Jadwal menyusul",
        "deskripsi" => "Pameran karya fotografi dan multimedia dari anggota ALVIC."
    ],
    [
        "nama" => "Mini Expo",
        "kategori" => "Expo",
        "tanggal" => "Jadwal menyusul",
        "deskripsi" => "Pengenalan karya dan aktivitas kreatif kepada mahasiswa."
    ],
    [
        "nama" => "Creative Workshop",
        "kategori" => "Workshop",
        "tanggal" => "Jadwal menyusul",
        "deskripsi" => "Belajar dan berbagi pengetahuan tentang dunia multimedia."
    ]
];

function aman(string $teks): string
{
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALVIC Multimedia TSU | Agenda</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav>
            <div class="logo">ALVIC</div>
            <a href="#agenda">Agenda Kegiatan</a>
        </nav>
    </header>

    <section class="hero">
        <h1>ALVIC Multimedia TSU</h1>

        <p>
            Ruang berkarya, belajar, dan berkembang
            bersama dalam dunia fotografi dan multimedia.
        </p>

        <a href="#agenda">Lihat Agenda</a>
    </section>

    <section class="agenda" id="agenda">
        <h2>Agenda Kegiatan</h2>

        <p class="subjudul">
            Informasi kegiatan dan aktivitas kreatif ALVIC Multimedia TSU.
        </p>

        <div class="daftar-agenda">
            <?php foreach ($agenda as $kegiatan): ?>
                <article class="kartu">

                    <span class="kategori">
                        <?= aman($kegiatan["kategori"]) ?>
                    </span>

                    <h3>
                        <?= aman($kegiatan["nama"]) ?>
                    </h3>

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
