<?php
// Include konfigurasi database
include('config.php');
include('perhitungan-ahp.php');

$bobot_usia = $bobotKriteria[0] ;
$bobot_penghasilan = $bobotKriteria[1];
$bobot_tanggungan = $bobotKriteria[2];

// Ambil data alternatif dari database
$sql_alternatif = "SELECT nama, usia, penghasilan, tanggungan FROM alternatif";
$result_alternatif = $koneksi->query($sql_alternatif);

if ($result_alternatif->num_rows > 0) {
    while ($row = $result_alternatif->fetch_assoc()) {
        $array_nama[] = $row["nama"];
        $array_usia[] = $row["usia"];
        $array_penghasilan[] = $row["penghasilan"];
        $array_tanggungan[] = $row["tanggungan"];
    }
}

// usia=benefit, penghasilan=cost, tanggungan=benefit
$jumlahArray = count($array_nama);

// Inisialisasi variabel untuk menyimpan hasil perhitungan
$array_nilai_S = array();

// Looping untuk menghitung nilai S
for ($i = 0; $i < $jumlahArray; $i++) {
    // Perhitungan nilai
    $nilai_S = pow($array_usia[$i], $bobot_usia) * pow($array_penghasilan[$i], -$bobot_penghasilan) * pow($array_tanggungan[$i], $bobot_tanggungan);

    // Menyimpan hasil perhitungan ke dalam array $array_nilai_S
    $array_nilai_S["S" . ($i + 1)] = $nilai_S;
}

// Inisialisasi variabel untuk jumlah nilai S
$jumlah_nilai_S = array_sum($array_nilai_S);

// Inisialisasi array untuk menyimpan nilai V
$array_nilai_V = array();

// Looping untuk menghitung nilai V
for ($i = 0; $i < $jumlahArray; $i++) {
    // Perhitungan nilai V
    $nilai_V = $array_nilai_S["S" . ($i + 1)] / $jumlah_nilai_S;

    // Menyimpan hasil perhitungan ke dalam array $array_nilai_V
    $array_nilai_V["V" . ($i + 1)] = $nilai_V;
}

// Mengurutkan array_nilai_V dari yang terbesar ke terkecil
arsort($array_nilai_V);

// Menutup koneksi
$koneksi->close();
?>
