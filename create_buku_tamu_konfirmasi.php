<?php

include('koneksi.php');
include('session.php'); //perintah session harus selalu digunakan !!!!
$no_kartu = $_POST['no_kartu'];
$ucapan = $_POST['ucapan'];
$no_kartu = htmlspecialchars($no_kartu, ENT_QUOTES);
$ucapan = htmlspecialchars($ucapan, ENT_QUOTES);
$no_kartu = stripslashes($no_kartu);
$ucapan = stripslashes($ucapan);
$no_kartu = mysqli_real_escape_string($koneksi,$no_kartu);
$ucapan = mysqli_real_escape_string($koneksi,$ucapan);
echo '<html>
    <head>
        <title>Buku Tamu</title>
        <link rel="stylesheet" href="css/table.css"  type="text/css"/>
        <link rel="stylesheet" href="css/style.css"  type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body><div class="container">
            <div class="login-container" style="text-align:center;width:400px;">
                <div class="form-box"style="border:1">';
if (
        !isset($no_kartu) &&
        !isset($ucapan)) {
    echo '<h2 style="text-align: center">Data harus diisi lengkap !</h2>';
} else {
    mysqli_query($koneksi, "INSERT INTO daftar_hadir VALUES('$no_kartu', '$login_session', '$ucapan')");
    echo '<h3 style="text-align: center">Buku Tamu Berhasil Dibuat!</h3><hr>    <a href="index_tamu.php">Kembali ke Index Buku Tamu</a>';
}

echo '</div></div></body></html>'
?>