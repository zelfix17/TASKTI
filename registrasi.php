<html>
    <head>
        <title>Registrasi</title>
        <link rel="stylesheet" href="css/style.css"  type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body><div class="container">
            <div class="login-container" style="text-align:center;width:400px;">
                <div class="form-box"style="border:1">
                    <form action="konfirmasi_registrasi.php" method="POST" >
                        <h2 style="text-align: center">Registrasi</h2>
                        <hr>
<!--                        <table>
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama" placeholder="Nama" maxlength="50"/></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" placeholder="Alamat" maxlength="50"  style="padding: 0;border-radius:0;"/></td>
                            </tr>
                            <tr>
                                <td>No HP</td>
                                <td><input type="text" name="no_tlp" placeholder="No HP" maxlength="50"  style="padding: 0;border-radius:0;"/></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" placeholder="Username" maxlength="100"  style="padding: 0;border-radius:0;"/></td>
                            <tr/>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" placeholder="Password" maxlength="15"  style="padding: 0;border-radius:0;"/></td>
                            </tr>
                            <tr>
                                <td>Re-Password</td>
                                <td><input type="password" name="repassword" placeholder="Re-Password" maxlength="15"  style="padding: 0;border-radius:0;"/></td>
                            <tr/>
                        </table>-->

                        <input type="text" name="nama" placeholder="Nama" maxlength="50"/>
                        <input type="text" name="alamat" placeholder="Alamat" maxlength="50"  style="padding: 0;border-radius:0;"/>
                        <input type="text" name="no_tlp" placeholder="No HP" maxlength="50"  style="padding: 0;border-radius:0;"/>
                        <input type="text" name="username" placeholder="Username" maxlength="100"  style="padding: 0;border-radius:0;"/>
                        <input type="password" name="password" placeholder="Password" maxlength="15"  style="padding: 0;border-radius:0;"/>
                        <input type="password" name="repassword" placeholder="Re-Password" maxlength="15"  style="padding: 0;border-radius:0;"/>
                        <br>
                        <br>
                        <input type="submit" value="Submit"/><br/>
                        <br>
                        <a href="index.php">Kembali ke halaman login</a>
                    </form>
                </div>
            </div>
    </body>
</html>