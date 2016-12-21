<?php
	$namahost     = "localhost";
	$namaPengguna = "root";
	$katasandi    = "";
	$nama_dbase   = "bukutamu";
	$koneksi      = mysqli_connect($namahost,$namaPengguna,$katasandi);
	$database     = mysqli_select_db($koneksi,$nama_dbase);
	//cek koneksi
	if(!$koneksi)
		echo "Koneksi Gagal";
	if(!$database)
		echo "Database tidak ditemukan";
?>