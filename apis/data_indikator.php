<?php
header('Content-Type: application/json; charset=utf-8');
include '../config/koneksi.php';

$sql = "SELECT
            k.idkategori,
            k.slug,
            k.kategori,
            i.id_indikator,
            i.nama_indikator,
            i.satuan,
            d.nilai,
            d.tahun_data
        FROM ppm_kategori k
        LEFT JOIN ppm_indikator i
            ON k.idkategori = i.idkategori
        LEFT JOIN ppm_dataindikator d
            ON i.id_indikator = d.id_indikator
            AND i.level_wilayah = 'kabupaten'
        ORDER BY k.idkategori, i.id_indikator, d.tahun_data DESC";

$query = mysqli_query($conn, $sql);

if (!$query) {
    http_response_code(500);
    echo json_encode(['error' => 'Gagal mengambil data']);
    exit;
}

$categoryData = [];

while ($row = mysqli_fetch_assoc($query)) {
    $slug = $row['slug'];

    if (!isset($categoryData[$slug])) {
        $nama = strtoupper($row['kategori']);

        $categoryData[$slug] = [
            'title' => "PROFIL $nama KABUPATEN TASIKMALAYA",
            'sidebar' => $nama,
            'map' => "PETA INDIKATOR $nama",
            'levelwil' => 'Kabupaten',
            'indikator' => '-',
            'value' => '-',
            'datatahun' => '-',
            'indicators' => []
        ];
    }

    if ($row['id_indikator'] === null) continue;

    $namaIndikator = $row['nama_indikator'];
    
    // if (!in_array($namaIndikator, $categoryData[$slug]['indicators'], true)) {
    //     $categoryData[$slug]['indicators'][] = $namaIndikator;
    // }
    
    $idIndikator = (int)$row['id_indikator'];

    if (!isset($categoryData[$slug]['indicators'][$idIndikator])) {
        $categoryData[$slug]['indicators'][$idIndikator] = [
            'id' => $idIndikator,
            'nama' => $row['nama_indikator'],
            'nilai' => $row['nilai'],
            'satuan' => $row['satuan'] ?? '',
            'tahun' => $row['tahun_data']
        ];
    }


    // Contoh awal: gunakan data terbaru dari indikator pertama.
    if ($categoryData[$slug]['indikator'] === '-') {
        $categoryData[$slug]['indikator'] = $namaIndikator;

        if ($row['nilai'] !== null) {
            $categoryData[$slug]['value'] =
                $row['nilai'] . ' ' . ($row['satuan'] ?? '');

            $categoryData[$slug]['datatahun'] = $row['tahun_data'];
        }
    }
    
    foreach ($categoryData as &$kategori) {
        $kategori['indicators'] = array_values($kategori['indicators']);
    }
    unset($kategori);
}


echo json_encode($categoryData);