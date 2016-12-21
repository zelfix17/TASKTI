<?php
	$namahost     = "ap-cdbr-azure-southeast-b.cloudapp.net";
	$namaPengguna = "beebea5f89af0a";
	$katasandi    = "9b37a973";
	$nama_dbase   = "zelfixkti";
	$koneksi      = mysqli_connect($namahost,$namaPengguna,$katasandi);
	$database     = mysqli_select_db($koneksi,$nama_dbase);
	//cek koneksi
	if(!$koneksi)
		echo "Koneksi Gagal";
	if(!$database)
		echo "Database tidak ditemukan";
?>