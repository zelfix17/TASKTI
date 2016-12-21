<?php
    include('koneksi.php');
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
	}
	else
	{
		// Variabel username dan password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($koneksi,$username);
		$password = mysqli_real_escape_string($koneksi,$password);
		// SQL query untuk memeriksa apakah data terdapat di database?
		$query = mysqli_query($koneksi,"select * from tamu where password='$password' AND username='$username'");
		$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_tamu']=$username; // Membuat Sesi/session
				header("location: index_tamu.php"); // Mengarahkan ke halaman buku tamu
				//echo "<h1>Login Berhasil !</h1>";
				}
			else 
				{
				//echo "Login gagal!";
				echo "<font color='#FF0000'>Username atau Password belum terdaftar</font>";
				}
				mysqli_close($koneksi); // Menutup koneksi
	}
}
?>