<?php
include('lambdaMax.php');

$matriksPerbandingan= MatriksPerbandingan();

function hitungBobotKriteria($matriksPerbandingan) {
    // Menentukan jumlah tiap kolom (untuk normalisasi matriks)
    $jumlahKolom = array_map('array_sum', $matriksPerbandingan);

    // Normalisasi matriks
    $matriksNormalisasi = [];
    foreach ($matriksPerbandingan as $baris) {
        $matriksNormalisasi[] = array_map(function ($nilai) use ($jumlahKolom) {
            return $nilai / array_sum($jumlahKolom);
        }, $baris);
    }

    // Menghitung bobot kriteria (rata-rata dari tiap baris matriks normalisasi)
    $bobotKriteria = normalisasiBobot($matriksNormalisasi);

    // Normalisasi bobot kriteria agar jumlahnya menjadi 1
    $totalBobot = array_sum($bobotKriteria);
    $bobotKriteria = array_map(function ($bobot) use ($totalBobot) {
        return $bobot / $totalBobot;
    }, $bobotKriteria);

    return $bobotKriteria;
}

function normalisasiBobot($matriksNormalisasi) {
    return array_map('average', $matriksNormalisasi);
}

function average($array) {
    return array_sum($array) / count($array);
}

$bobotKriteria = hitungBobotKriteria($matriksPerbandingan);
$arrayBobot = ['matriks_perbandingan' => $matriksPerbandingan, 'bobot_kriteria' => $bobotKriteria];

$matriksPerbandingan = $arrayBobot['matriks_perbandingan'];

// Continue with the rest of your code
$CI = ($lambdaMax - 3) / (3 - 1);

// Determine Random Index (RI)
$RI = 0.58;

// Calculate Consistency Ratio (CR)
$CR = $CI / $RI;

session_start();
$_SESSION['consistency_ratio'] = $CR;

?>

