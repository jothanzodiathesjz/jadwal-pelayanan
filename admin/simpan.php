<?php
require_once('../koneksi/koneksi-db.php');
if ($_POST){
    $sql = "INSERT INTO jadwal (hari,tanggal) VALUES ('{$_POST['hari']}','{$_POST['tanggal']}') ";
    $query = mysqli_query($koneksi,$sql);

    $sql = "SELECT max(id_jadwal) AS last_id FROM jadwal limit 1";
    $query = mysqli_query($koneksi,$sql);

    $data = mysqli_fetch_array($query);
    $last_id = $data['last_id'];

    $sql = "INSERT INTO pelayan (id_jadwal,worship_lead,singers,pemusik,tamborin,soundman,khotbah) VALUES ('$last_id','{$_POST['worship_lead']}','{$_POST['singers']}','{$_POST['pemusik']}','{$_POST['tamborin']}','{$_POST['soundman']}','{$_POST['khotbah']}')";

    $query = mysqli_query($koneksi,$sql);

    if($query){
        echo "<script>alert('Data Berhasil Disimpan');window.location='index.php?mod=jadwalibadah'</script>";
    }else{
        echo "<script>alert('Gagal Disimpan');</script>";
    }
}   

?>