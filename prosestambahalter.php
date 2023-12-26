<?php
include("config.php");

if (isset($_POST['nama_alternatif'])) {
    $namaAlternatif = $_POST['nama_alternatif'];
    $usia = $_POST['usia'];
    $penghasilan = $_POST['penghasilan'];
    $tanggungan = $_POST['tanggungan'];

    $sql = "INSERT INTO alternatif (nama, usia, penghasilan, tanggungan)
            VALUES ('$namaAlternatif', '$usia', '$penghasilan', '$tanggungan')";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('Location: alternatif.php');
        exit();
    } else {
        echo "Gagal menambahkan data. Error: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}

?>