<?php
include '../config/koneksi.php';
mysql_query("DELETE FROM tb_rekam_medis WHERE id = '$_GET[id]'");
header('location:index.php?menu=rekam_medis');
?>
