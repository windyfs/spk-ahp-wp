<?php
include("config.php");

if (isset($_POST['id_alternatif'])) {
    $idAlternatif = $_POST['id_alternatif'];
    $namaAlternatif = $_POST['editNamaAlternatif'];
    $usia = $_POST['editUsia'];
    $penghasilan = $_POST['editPenghasilan'];
    $tanggungan = $_POST['editTanggungan'];

    $sql = "UPDATE alternatif 
            SET nama = '$namaAlternatif', usia = '$usia', penghasilan = '$penghasilan', tanggungan = '$tanggungan'
            WHERE id_alternatif = $idAlternatif";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('Location: alternatif.php');
        exit();
    } else {
        echo "Gagal mengubah data. Error: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>
