<?php
require_once('koneksi/koneksi-db.php');
if ($_POST){
    $sql = "INSERT INTO user (nama_user, username, password, level) VALUES ('{$_POST['nama_user']}', '{$_POST['username']}', MD5('{$_POST['password']}'), 'user')";
    $query = mysqli_query($koneksi,$sql);

    if($query){
        echo "<script>alert('Registrasi Berhasil Silahkan Login');window.location='login.php'</script>";
    }else{
        echo "<script>alert('Gagal Disimpan');window.location='register.php'</script>";
    }
}   

?>
<!-- INSERT INTO user (id_user, nama_user, username, passwor`, level) VALUES (NULL, '{$_POST['nama_user']}', '{$_POST['username']}', MD5('{$_POST['password']}'), 'user'); -->