<?php
session_start();
if(isset($_SESSION['null'])){
$error = '<div class="error">Неверное имя пользователя или пароль</div>';
}elseif(isset($_SESSION['notlogin'])){
    $error = '<div class="error">Для доступа в админ панель требуется авторизация</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Админ панель</title>
</head>
<body>
    <form action="script.php" method="post" class="">
        <label>Логин</label>
        <input type="text" name="name" readonly onfocus="this.removeAttribute('readonly')"></input>
        <label>Пароль</label>
        <input type="password" name="pass" readonly onfocus="this.removeAttribute('readonly')"></input>
        <button type="submit" class="login-btn">Войти</button>
        <?php 
            if(isset($error)) {
                echo $error;
                unset($_SESSION['null']);
                unset($_SESSION['notlogin']);
            }
        ?>
    </form>
    
</body>
</html>