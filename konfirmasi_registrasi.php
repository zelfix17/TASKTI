<?php
    //include berfungsi untuk mengkoneksikan kodingan dengan localhost
    include('koneksi.php');

    if( isset($_POST['nama'])  &&
		isset($_POST['alamat'])  &&
		isset($_POST['no_tlp'])  &&
		isset($_POST['username'])     &&
        isset($_POST['password']) &&
        isset($_POST['repassword'])
      )
    {
        $nama   = $_POST['nama'];
        $nama=htmlspecialchars($nama,ENT_QUOTES);
	$alamat   = $_POST['alamat'];
        $alamat=htmlspecialchars($alamat,ENT_QUOTES);
	$no_tlp   = $_POST['no_tlp'];
        $no_tlp=htmlspecialchars($no_tlp,ENT_QUOTES);
        $username      = $_POST['username'];
        $username=htmlspecialchars($username,ENT_QUOTES);
        $password = $_POST['password'];
        $password=htmlspecialchars($password,ENT_QUOTES);
        $repassword = $_POST['repassword'];
        $repassword=htmlspecialchars($repassword,ENT_QUOTES);
        
		//$role = '0'; //role 0 adalah role user
    }
	else
	{
        //otomatis mengalihkan ke halaman pendaftaran jika terjadi undefined index
        header("location:registrasi.php");
    }
    
    echo '<html>
    <head>
        <title>Buku Tamu</title>
        <link rel="stylesheet" href="css/table.css"  type="text/css"/>
        <link rel="stylesheet" href="css/style.css"  type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    </head>
    <body><div class="container">
            <div class="login-container" style="text-align:center;width:400px;">
                <div class="form-box"style="border:1">';
    if  (
        empty($nama) ||  
        empty($alamat)    ||
		empty($no_tlp)    ||
		empty($username)    ||  
        empty($password)   ||  
        empty($repassword)   
        )
    {
        //pernyataan yang keluar jika salah satu atau beberapa kemungkinan di atas terjadi
        echo '<h3 style="text-align: center">ada kolom yang belum diisi</h3><hr>';
        echo "<a href='registrasi.php'>Kembali ke halaman pendaftaran</a>";
    }
	else
	{
        //jika user telah memasukkan semua data yang dibutuhkan, koreksi kata sandi
        if($password == $repassword)
		{
            $ambilDataSql     = mysqli_query($koneksi,"SELECT * FROM tamu WHERE username = '$username'");
            $cek_username = mysqli_num_rows($ambilDataSql);
            //mengecek ketersediaan identitas
            if($cek_username == 0){//jika nama pengguna tidak ditemukan/belum terdaftar
                //lakukan penambahan data
                mysqli_query($koneksi,"INSERT INTO tamu VALUES('$nama','$alamat','$no_tlp','$password','$username')");
                echo '<h3 style="text-align: center">pendaftaran berhasil</h3><hr>';
                echo "<a href='index.php'>Kembali ke halaman utama</a>";
            } else
			{
                echo '<h3 style="text-align: center">Pengguna sudah terdaftar</h3><hr>';
                echo "<a href='index.php'>Kembali ke halaman utama</a>";
            }
        }
		else
		{
            echo '<h3 style="text-align: center">kata sandi tidak sama</h3><hr>';
            echo '<a href="registrasi.php">Kembali ke halaman pendaftaran</a>';
        }
    }
    echo '</div></div></body></html>'
?>