<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Buku Tamu</title>
</head>
<?php
include('koneksi.php');
$id1=$_GET['id1']; 
$id2=$_GET['id2'];
$delete= mysqli_query($koneksi,"Delete from daftar_hadir where username='$id1' and no_kartu='$id2'") or die ("Error tu");
?>
<h3>Data berhasil di hapus</h3>
<a href="index_tamu.php">Kembali ke index</a>
<body>
</body>
</html>