<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Buku Tamu</title>
        <link rel="stylesheet" href="css/table.css"  type="text/css"/>
        <link rel="stylesheet" href="css/style.css"  type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        
        <div class="container">
            <div class="login-container" style="width:auto;text-align:left;">
                <h2 style="text-align: center">Buku Tamu</h2>
                <hr/>
                <p><b id="welcome">Selamat Datang : <i><?php echo $login_session; ?></i></b> <b id="logout"><a href="logout.php">Log Out</a></b><br> </p>
                
                <div class="input-group col-md-12">
                    <a class="btn btn-primary" href="create_buku_tamu.php" >Add Buku Tamu</a>
<!--                    <form action="" method="post">
                        <input class="form-control input-lg" type="text" name = "input_cari" placeholder="Cari Tamu" style="width:250px;" />
                        <span class="input-group-btn">
                            <button class="btn btn-success btn-lg" type="button" name="cari">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>

                    </form>-->
                </div>
           

                <?php
                $input_cari = @$_POST['input_cari'];
                $cari = @$_POST['cari'];
// jika tombol cari di enter
                if ($cari) {
                    // jika kotak pencarian tidak sama dengan kosong
                    if ($input_cari != "") {
                        // cari berdasarkan username
                        $sql = mysqli_query($koneksi, "SELECT * FROM daftar_hadir WHERE username like '%$input_cari%' order by rate DESC") or die(mysqli_error());
                        if (!$sql) {
                            die('Gagal ambil data: ' . mysqli_error());
                        }
                        echo '<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Table</h3>
				</div> <!-- /widget-header -->
				<div class="widget-content"><table class="table table-striped table-bordered"><tr><thead>Username</thead><thead>No Kartu</thead><thead>Ucapan</thead><thead  class="td-actions">Aksi</thead></tr>';
                        while ($row = mysqli_fetch_array($sql)) {
                            echo "<tr><td>{$row['username']}</td><td>{$row['no_kartu']}</td><td>{$row['ucapan']}</td>";
                            if ($row['username'] == $login_session) {
                                echo '<td><a href="delete_buku_tamu.php?id1=' . $row['username'] . '&id2=' . $row['no_kartu'] . '">Delete</a> </td></tr>';
                            }
                        }
                        echo "</table></div></div></div>";
                    } else {
                        $ambildata = mysqli_query($koneksi, "SELECT * FROM daftar_hadir order by username DESC");
                        if (!$ambildata) {
                            die('Gagal ambil data: ' . mysqli_error());
                        }
                        echo '<table class="table table-striped table-bordered"><tr><thead>Username</thead><thead>No Kartu</thead><thead>Ucapan</thead><thead  class="td-actions">Aksi</thead></tr>';
                        while ($row = mysqli_fetch_array($ambildata)) {
                            echo '<tr><td>{$row["username"]}</td><td>{$row["no_kartu"]}</td><td>{$row["ucapan"]}</td>';
                            if ($row['username'] == $login_session) {
                                echo '<td><a href="delete_buku_tamu.php?id1=' . $row['username'] . '&id2=' . $row['no_kartu'] . '">Delete</a> </td></tr>';
                            }
                        }
                        echo "</table>";
                    }
                } else {
                    $ambildata = mysqli_query($koneksi, "SELECT * FROM daftar_hadir order by username DESC");
                    if (!$ambildata) {
                        die('Gagal ambil data: ' . mysqli_error());
                    }
                    echo '<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Table</h3>
				</div>
				<div class="widget-content"><table class="table table-striped table-bordered"><thead><tr><th>Username</th><th>No Kartu</th><th>Ucapan</th><th class="td-actions">Aksi</th></tr></thead>';
                    while ($row = mysqli_fetch_array($ambildata)) {
                        echo '<tbody><tr><td>' . $row['username'] . '</td><td>' . $row['no_kartu'] . '</td><td>' . $row["ucapan"] . '</td>';
                        if ($row['username'] == $login_session) {
                            echo '<td><a class="btn btn-danger" href="delete_buku_tamu.php?id1=' . $row['username'] . '&id2=' . $row['no_kartu'] . '">Delete</a></td></tr>';
                        } else {
                            echo '<td></td>';
                        }
                    }
                    echo '</tbody></table></div></div></div>';
                }



//echo 'Berhasil ambil data\n";
//Untuk mengambil Foto perintah e dibawah !
//$kueri = mysqli_query($koneksi,"SELECT * FROM tempat_foto");
//        while ($baris = mysqli_fetch_array($kueri))
//        {
//		   echo $baris['id_tempat']."&nbsp;".$baris[0]."<br><br>";
//		   echo '<img src="data:image/jpeg;base64,'.base64_encode( $baris['foto'] ).'"/>';   
//           echo"<br><br><hr>";
//         }
                ?>

            </div>
        </div>
    </div>
</body>
</html>