<?php
include('koneksi.php');
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_tamu'];
// Ambil nama tamu berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql = mysqli_query($koneksi,"select username from tamu where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
	mysqli_close($koneksi); // Menutup koneksi
	header('Location: index.php'); // Mengarahkan ke Home Page
}
?>