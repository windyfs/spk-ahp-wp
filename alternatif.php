<?php
    // Connection
    include('config.php');

    // Query untuk mengambil data alternatif
    $query = "SELECT * FROM alternatif ORDER BY id_alternatif ASC";
    $result = mysqli_query($koneksi, $query);

    // Array untuk menyimpan data alternatif
    $alternatif_data = array();

    // Loop untuk mengambil data alternatif
    while ($row = mysqli_fetch_assoc($result)) {
        $alternatif_data[] = $row;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alternatif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Data Alternatif</h2>
        </div>
        <div class="col-md-6 text-right">
            <a data-toggle="modal" data-target="#tambahalter" class="btn btn-primary">Tambah Alternatif</a>
        </div>
    </div>

    <!-- Modal Tambah Alternatif -->
    <div id="tambahalter" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Alternatif</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="prosestambahalter.php">
                        <div class="form-group">
                            <label for="nama_alternatif">Nama:</label>
                            <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" placeholder="Masukkan nama" required>
                        </div>
                        <div class="form-group">
                            <label for="usia">Usia:</label>
                            <input type="number" class="form-control" id="usia" name="usia" placeholder="Masukkan usia" required>
                        </div>
                        <div class="form-group">
                            <label for="penghasilan">Penghasilan:</label>
                            <input type="number" class="form-control" id="penghasilan" name="penghasilan" placeholder="Masukkan penghasilan" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggungan">Tanggungan:</label>
                            <input type="number" class="form-control" id="tanggungan" name="tanggungan" placeholder="Masukkan tanggungan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kepala Keluarga</th>
                <th>Usia</th>
                <th>Penghasilan</th>
                <th>Tanggungan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop data alternatif disini -->
            <?php foreach ($alternatif_data as $index => $alternatif) : ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $alternatif['nama']; ?></td>
                    <td><?php echo $alternatif['usia']; ?></td>
                    <td><?php echo $alternatif['penghasilan']; ?></td>
                    <td><?php echo $alternatif['tanggungan']; ?></td>
                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?php echo $index; ?>">Edit</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?php echo $index; ?>">Hapus</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Modal Edit -->
    <?php foreach ($alternatif_data as $index => $alternatif) : ?>
        <div class="modal fade" id="editModal<?php echo $index; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo $index; ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel<?php echo $index; ?>">Edit Data Alternatif</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="prosesubahalter.php">
                            <input type="hidden" id="idAlternatif" name="id_alternatif" value="<?php echo $alternatif['id_alternatif']; ?>">
                            <div class="form-group">
                                <label for="editNamaAlternatif<?php echo $index; ?>">Nama Kepala Keluarga:</label>
                                <input type="text" class="form-control" id="editNamaAlternatif<?php echo $index; ?>" name="editNamaAlternatif" value="<?php echo $alternatif['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="editUsia<?php echo $index; ?>">Usia:</label>
                                <input type="number" class="form-control" id="editUsia<?php echo $index; ?>" name="editUsia" value="<?php echo $alternatif['usia']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="editPenghasilan<?php echo $index; ?>">Penghasilan:</label>
                                <input type="text" class="form-control" id="editPenghasilan<?php echo $index; ?>" name="editPenghasilan" value="<?php echo $alternatif['penghasilan']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="editTanggungan<?php echo $index; ?>">Jumlah Tanggungan:</label>
                                <input type="number" class="form-control" id="editTanggungan<?php echo $index; ?>" name="editTanggungan" value="<?php echo $alternatif['tanggungan']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" id="buttonSimpanEdit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Modal Hapus -->
    <?php foreach ($alternatif_data as $index => $alternatif) : ?>
        <div class="modal fade" id="hapusModal<?php echo $index; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel<?php echo $index; ?>" aria-hidden="true">
            <!-- Isi modal hapus disini -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusModalLabel<?php echo $index; ?>">Hapus Data Alternatif</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data alternatif <?php echo $alternatif['nama']; ?>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <a href="proseshapusalter.php?id_alternatif=<?php echo $alternatif['id_alternatif']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
