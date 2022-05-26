<?php 
require_once('../koneksi/koneksi-db.php');
$id_jadwal = $_GET['id_jadwal'];
mysqli_query($koneksi,"DELETE FROM pelayan WHERE id_jadwal='$id_jadwal'");
mysqli_query($koneksi,"DELETE FROM jadwal WHERE id_jadwal='$id_jadwal'");

header("location:index.php?mod=jadwalibadah");
?>