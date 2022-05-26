<?php
	$page = isset($_GET['page']) ? $_GET['page'] : "";
		if ($page=="home" xor $page == "" ) {
			include "beranda.php";
		}
        elseif ($page == "tambah_jadwal") {
			include "admin/tambah-jadwal.php";
        }

?>