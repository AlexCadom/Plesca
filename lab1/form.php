<?php
function verif($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    $login = $pass = "";
    $login_err = $pass_err = 0;
    $err_login_mess = $err_pass_mess = "";

    if(isset($_POST["submit"])){
        
        if(!empty($_POST["login"] && !empty($_POST["pass"]))){
            $login = verif($_POST["login"]);
            $pass = verif($_POST["pass"]);

            // if(!preg_match("/^[A-z0-9]{3,20}$/",$login)){
            //     $login_err++;
            // }
            // if(!preg_match("/^[A-z0-9]{3,30}$/",$pass)){
            //     $pass_err++;
            // }
            if($login_err != 0){
                $err_login_mess = "Логин должен состоять из латинских букв и цифр, и быть от 3 до 20 символов";
            }
            if($pass_err != 0){
                $err_pass_mess = "Пароль должен состоять из латинских букв и цифр, и быть от 3 до 30 символов";
            }
            // $mysql = new mysqli('localhost','root','root','lab1');
            // $mysql->query("INSERT INTO `user` (`login`,`pass`)
            // VALUES('$login','$pass')");
            // echo "Регистрация успешна";
            // $mysql->close();
            if(!$login_err != 0 && !$pass_err != 0){
                $mysql = new mysqli('localhost','root','root','lab1');
                
                $result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login'");
                $data = $result->fetch_assoc();

                if(empty($data)) $err_login_mess = "Неверный логин!<br/>";
                
                else{
                    $result = $mysql->query("SELECT * FROM `user` WHERE `pass` = '$pass'");
                    $data = $result->fetch_assoc();
                    if(empty($data)){
                        $err_pass_mess = "Неверный пароль!<br/>";
                    }
                    else{
                        header('Location: http://lab1/adminpage.php');
                    }
                     $mysql->query("INSERT INTO `user` (`login`,`pass`) 
                     VALUES('$login','$pass')");
                     echo "Регистрация успешна";

                }

                $mysql->close();
            }
        }
        else echo "Заполните все поля!";
    }
?>