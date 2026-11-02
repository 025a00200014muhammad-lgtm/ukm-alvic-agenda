<?php
declare(strict_types=1);

function aman(string $teks): string
{
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}

function jumlahAgenda(array $agenda): int
{
    return count($agenda);
}

function hitungKategori(array $agenda, string $kategori): int
{
    $hasilFilter = array_filter(
        $agenda,
        fn(array $item): bool => $item['kategori'] === $kategori
    );

    return count($hasilFilter);
}