<?php
    // Include the database connection
    include('config.php');
    include('perhitungan-wp.php');

    // Perform AHP WP calculation and retrieve the ranking
    // $result = mysqli_query($koneksi, "SELECT nama_alternatif, skor_akhir FROM ranking ORDER BY skor_akhir DESC");

    // Array to store ranking data
    // $ranking_data = array();

    // Loop to fetch ranking data
    /* while ($row = mysqli_fetch_assoc($result)) {
        $ranking_data[] = $row;
    } */

    // Close the database connection
    // mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemeringkatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container mt-5">
    <h2>Hasil Pemeringkatan</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alternatif</th>
                <th>Skor Akhir</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop to display ranking data -->
            <?php
            $counter = 1; 
            foreach ($array_nilai_V as $key => $value) {
                $index = substr($key, 1); // Mendapatkan indeks dari kunci (menghapus huruf "V")
                echo "<tr>";
                echo "<td>" . $counter++ . "</td>";
                echo "<td>" . $array_nama[$index - 1] . "</td>";
                echo "<td>" . $value . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
