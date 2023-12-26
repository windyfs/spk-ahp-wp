<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendukung Keputusan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container mt-5">
    <div class="jumbotron">
        <div class="text-center mb-4">
            <img src="assets/logo.png" alt="Logo" height="200">
        </div>
        <p class="lead">Selamat datang di Sistem Pendukung Keputusan (SPK) untuk memilih masayarakat yang menerima bantuan PKH (Program Keluarga Harapan). Dengan sistem ini semoga program PKH bisa disalurkan dengan tepat sasaran.</p>
        <hr class="my-4">
        <p>Pilih salah satu opsi di bawah untuk melanjutkan:</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="kriteria.php" role="button">Data Kriteria</a>
            <a class="btn btn-success btn-lg" href="alternatif.php" role="button">Kelola Data Alternatif</a>
            <a class="btn btn-info btn-lg" href="hasil.php" role="button">Hasil SPK</a>
        </p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
