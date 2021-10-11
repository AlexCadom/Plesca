<?php
    if(isset($_POST["exit"])){
        header('Location: http://lab1');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/style2.css" media="screen" type="text/css" />
    <title>Admin Page</title>
    <style>
       
    </style>
</head>
<body>
    <div class="wl">
        <span class="text1">Welcome to the Ethernet</span>
        <span class="text2">Brother!</span>
    </div>
    <form action="" method="post">
        <input type="submit" value="Выйти" name="exit">
    </form>
</body>
</html>