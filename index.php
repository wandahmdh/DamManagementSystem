<?php
    session_start();

    if (isset($_SESSION['status'])) {
        header("location:../admin_index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>smart dam management system</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <br/>
        <br/>
        <center>
		<h2>selamat datang di webpage kami</h2>
		<h3> silahkan memasukkan akun disini</h3>
		</center>	
        <br/>
        <div class="login">
        <br/>
            <form action="login.php" method="post" onSubmit="return validasi()">
                <div>
                    <label>Username:</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div>
                    <label>Password:</label>
                    <input type="password" name="password" id="password" />
                </div>			
                <div>
                    <input type="submit" value="Login" class="tombol">
                </div>
            </form>
        </div>
    </body>

    <script type="text/javascript">
        function validasi() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;		
            if (username != "" && password!="") {
                return true;
            }else{
                alert('Username atau Password tidak sesuai !');
                return false;
            }
        }
    </script>
</html>