<?php include "form.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="private">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1</title>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
<div id="login">
        <form action="" method="post" autocomplete="off">
            <fieldset class="clearfix">
                <label for="login">Логин:</label>
                <p><span class="fontawesome-user"></span><input type="text" value="Логин"  name="login"  onBlur="if(this.value == '') this.value = 'Логин'" onFocus="if(this.value == 'Логин') this.value = ''" required></p>
                <label for="pass">Пароль:</label><!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password"  value="Пароль" id="pass" name="pass"  onBlur="if(this.value == '') this.value = 'Пароль'" onFocus="if(this.value == 'Пароль') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><?=$err_login_mess ?></p><br/>
                <p><?=$err_pass_mess ?></p>
            </fieldset>
            <p><input type="submit" onclick="validare();" value="Войти" name="submit"></p>
        </form>
    <!-- <form action="" method="post">
        <label for="login">Логин:</label>
        onBlur="if(this.value == '') this.value = 'Логин'" onFocus="if(this.value == 'Логин') this.value = ''" required
        <input type="text" id="login" name="login" placeholder="логин">
        <span style="color: red;"><?=$err_login_mess ?></span><br/>

        <label for="pass">Пароль:</label>
        <input type="password" id="pass" name="pass" placeholder="пароль">
        <span style="color: red;"><?=$err_pass_mess ?></span><br/>
        <input type="submit" onclick="validare();" value="Войти" name="submit">
    </form> -->

    <!-- <script>
        function validare(){
            var log = document.getElementById("login").value;
            var pass = document.getElementById("pass").value;
            var mess = "";
            var err = 0;
    
            if(!/^[A-z0-9]{3,20}$/.test(log)){
                mess += "login error\n";
                err++;
            }
            if(!/^[A-z0-9]{3,30}$/.test(pass)){
                mess += "password error";
                err++;
            }
    
            if(err) alert(mess);
        }
    </script> -->
</body>
</html>