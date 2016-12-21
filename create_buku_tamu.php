<html>
    <head>
        <title>Add Buku Tamu</title>
        <link rel="stylesheet" href="css/style.css"  type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="login-container" style="text-align:center;">
                <div class="form-box"style="border:1">
                    <h2 style="text-align: center">Buat</h2>
                    <h2 style="text-align: center">Buku Tamu</h2>
                <hr/>
                    <form action="create_buku_tamu_konfirmasi.php" method="POST">
<!--                        <table>
                            <tr>
                                <td>No Kartu</td><td>:</td><td><input type="text" name="no_kartu" placeholder="No Kartu" maxlength="50"/></td>
                            </tr>
                            <tr>
                                <td>Ucapan</td><td>:</td><td><input type="text" name="ucapan" placeholder="Ucapan" maxlength="50"/></td>
                            </tr>
                        </table>-->
                        <input name="no_kartu" placeholder="No Kartu" type="text" style="padding: 0" maxlength="50">
                        <input name="ucapan" placeholder="Ucapan"  type="text"  style="padding: 0;border-radius:0;" maxlength="50">
                        <br><br>
                        <input type="submit" value="Submit"  style="width:200px;"/><br/>
                        <br><br>
                        <a href="index_tamu.php">kembali ke index Buku Tamu</a>
                    </form>
                </div>
<!--                <div class="form-box"style="border:1">
                    <form action="" method="post" style="align-items: center">
                        <input id="email" name="username" placeholder="Username" type="text" style="padding: 0">
                        <input id="password" name="password" type="password" placeholder="password" style="padding: 0">
                        <br><br>
                        <input type="submit" name="submit" id="submit" value="Login" style="width:200px;">
                        <p>Not a member?<a href="registrasi.php">  Register Now! </a> </p>
                    </form>
                </div>-->

            </div>
        </div>
    </body>
</html>