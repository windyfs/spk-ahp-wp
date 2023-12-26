<?php
    // Include konfigurasi database
    include('config.php');
    include('perhitungan-ahp.php');

    // // Query untuk mengambil data kriteria dari database
    // $result = mysqli_query($koneksi, "SELECT * FROM `kriteria` ORDER BY `kriteria`.`id` ASC");

    // // Array untuk menyimpan data kriteria
    // $kriteria_data = array();

    // // Loop untuk mengambil data kriteria
    // while ($row = mysqli_fetch_assoc($result)) {
    //     $kriteria_data[] = $row;
    // }

    // Tutup koneksi database
    mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kriteria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        </div>
    </div>
    
    <!-- Tampilkan matriks perbandingan -->
    <h3>Matriks Perbandingan</h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th></th> <!-- Empty cell for the row labels -->
                <?php $kriteriaNames = ['Usia', 'Penghasilan', 'Tanggungan']; ?>
                <?php foreach ($arrayBobot['matriks_perbandingan'][0] as $index => $value) : ?>
                    <th><?php echo $kriteriaNames[$index]; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php $kriteriaLabels = ["Usia", "Penghasilan", "Tanggungan"]; ?>
            <?php foreach ($arrayBobot['matriks_perbandingan'] as $barisIndex => $baris) : ?>
                <tr>
                    <td><?php echo $kriteriaLabels[$barisIndex]; ?></td> <!-- Row label -->
                    <?php foreach ($baris as $nilai) : ?>
                        <td><?php echo $nilai; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <!-- Tampilkan bobot kriteria -->
    <h3>Bobot Kriteria</h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kriteria</th>
                <th>Jenis Kriteria</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
        <?php $kriteriaNames = ['Usia', 'Penghasilan', 'Tanggungan']; ?>
        <?php $jenisKriteria = ['Benefit', 'Cost', 'Benefit']; ?>
            <?php foreach ($arrayBobot['bobot_kriteria'] as $index => $bobot) : ?>
                <tr>
                    <td><?php echo $kriteriaNames[$index]; ?></td>
                    <td><?php echo $jenisKriteria[$index]; ?></td>
                    <td><?php echo $bobot; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Display Consistency Ratio (CR) -->
    <h3>Consistency Ratio (CR)</h3>
    <p><?php echo isset($_SESSION['consistency_ratio']) ? $_SESSION['consistency_ratio'] : "N/A"; ?></p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
