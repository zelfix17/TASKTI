
<?php
include('login.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Login</title>

        <!-- Skrip CSS -->
        <link rel="stylesheet" href="css/style.css"/>
<!--        <link rel="stylesheet" href="css/login.css"/>-->
        <script type="text/javascript" src="js/login.js"></script>
    </head>	
    <body>
        <!--<div class="container">
                <div class="main">
                    <form action="" method="post">
                        <h2>Login</h2>
                        <br>
                        <hr/>
                        <a href="registrasi.php">Registrasi</a>		
                        <br>
                        <label>Username :</label>
                        <input id="email" name="username" placeholder="Username" type="text">
    
                        <label>Password :</label>
                        <input id="password" name="password" placeholder="**********" type="password">
    
                        <input type="submit" name="submit" id="submit" value="Login">
                    </form>
                </div>
            </div>-->
        <div class="container">
            <div class="login-container">
                <div id="output"></div>
                <div>
                    <h1> Guest Book </h1>
                </div>
                <div class="form-box"style="border:1">
                    <form action="" method="post" style="align-items: center">
                        <input id="email" name="username" placeholder="Username" type="text" style="padding: 0">
                        <input id="password" name="password" type="password" placeholder="password" style="padding: 0">
                        <br><br>
                        <input type="submit" name="submit" id="submit" value="Login" style="width:200px;">
                        <p>Not a member?<a href="registrasi.php">  Register Now! </a> </p>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>


