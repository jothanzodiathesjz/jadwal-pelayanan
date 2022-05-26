<?php
require_once('../koneksi/koneksi-db.php');
$id_jadwal=$_POST['id_jadwal'];
$hari=($_POST['hari']);
$tanggal=($_POST['tanggal']);
$worship_lead=($_POST['worship_lead']);
$singers=($_POST['singers']);
$pemusik=($_POST['pemusik']);
$tamborin=($_POST['tamborin']);
$soundman=($_POST['soundman']);
$khotbah=($_POST['khotbah']);

$sql=mysqli_query($koneksi,"UPDATE jadwal SET hari='$hari',tanggal='$tanggal' WHERE id_jadwal='$id_jadwal'");
$sql=mysqli_query($koneksi,"UPDATE pelayan SET worship_lead='$worship_lead',singers='$singers', pemusik='$pemusik', tamborin='$tamborin', soundman='$soundman', khotbah='$khotbah' WHERE id_jadwal='$id_jadwal'");

if($sql){
    echo "<script>alert('Berhasil Diupdate');window.location='index.php?mod=jadwalibadah'</script>";
}else{
    echo "<script>alert('Gagal Diupdate');window.location='index.php?mod=jadwalibadah&id='$id_jadwal'</script>";
}


?>
