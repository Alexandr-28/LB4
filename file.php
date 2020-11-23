<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Ваше имя:<?php 
    if(isset($_POST['nm'])){
        $_SESSION["nam"]=$_POST['nm'];
        echo $_SESSION["nam"];
    }
    ?>
    <br>
    <button type="button" onclick="window.location.href=('index.php');">Назад</button>
</body>
</html>