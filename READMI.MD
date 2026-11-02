# Website Agenda ALVIC Multimedia TSU

## Deskripsi
Website Agenda ALVIC Multimedia TSU merupakan website profil organisasi yang menampilkan informasi dan agenda kegiatan ALVIC Multimedia TSU. Website ini dibuat menggunakan PHP dengan data agenda yang disimpan dalam file terpisah.

## Fitur
- Menampilkan profil ALVIC Multimedia TSU.
- Menampilkan daftar agenda kegiatan.
- Menampilkan nama, kategori, tanggal, dan deskripsi kegiatan.
- Memfilter agenda berdasarkan kategori.
- Menampilkan ringkasan jumlah agenda dan jumlah agenda per kategori.
- Menampilkan status agenda berdasarkan informasi tanggal.
- Mengamankan teks yang ditampilkan pada halaman web.

## Teknologi
- HTML
- CSS
- PHP
- Laragon sebagai lingkungan pengembangan lokal.

## Struktur Folder
```text
ukm-alvic-agenda/
├── index.php
├── katalog.php
├── data.php
├── functions.php
├── style.css
├── assets/
├── screenshots/
├── README.md
└── .gitignore
```

## Cara Menjalankan
1. Simpan folder proyek di direktori `C:\laragon\www\`.
2. Jalankan Laragon dan aktifkan web server.
3. Buka browser.
4. Akses `http://ukm-alvic-agenda.test` jika virtual host Laragon sudah dikonfigurasi.
5. Jika virtual host belum tersedia, coba akses `http://localhost/ukm-alvic-agenda/`.
6. Klik menu Agenda Kegiatan untuk melihat daftar agenda.

## Fungsi PHP
- `aman(string $teks): string` — mengamankan teks sebelum ditampilkan ke HTML.
- `jumlahAgenda(array $agenda): int` — menghitung jumlah seluruh agenda.
- `hitungKategori(array $agenda, string $kategori): int` — menghitung jumlah agenda berdasarkan kategori.

## Fungsi Array Bawaan
- `count()` — menghitung jumlah data agenda.
- `array_filter()` — menyaring agenda berdasarkan kategori.

## Screenshot
Simpan minimal dua screenshot website di folder `screenshots/`:
1. Tampilan halaman beranda.
2. Tampilan halaman katalog agenda.

## Pengembang
- Nama: Muhammad Salman Al Fariz
- NIM: 025A00200014
- Program Studi: Informatika
- Universitas: Universitas Tiga Serangkai

## Referensi
- [Cantumkan sumber referensi yang digunakan, jika ada.]

## Penggunaan AI
- Menggunakan AI untuk tampilan CSS.
- Menggunakan AI bagian if else di katalog.php

## Catatan
Tanggal kegiatan dapat diperbarui sesuai informasi resmi dari pengurus ALVIC Multimedia TSU.
