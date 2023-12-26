<?php
include('config.php');
if(isset($_GET['id_alternatif'])) {
  $idAlternatif = $_GET['id_alternatif'];
  $hapus="DELETE FROM alternatif WHERE id_alternatif='$idAlternatif'";
  mysqli_query($koneksi, $hapus);
}
mysqli_close($koneksi);
header("location: alternatif.php");
?>