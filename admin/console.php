<?php
session_start();
if(!$_SESSION['accept']) {
    $_SESSION['notlogin'] = true;
    header('location: index.php');
}
if(!isset($_GET['page'])){
$_GET['page'] = 'main';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="console.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap" rel="stylesheet">
    <?php if($_GET['page'] == 'report') { echo '<title>Репорты</title>';}
        elseif($_GET['page'] == 'addanim'){ echo '<title>Добавить</title>';}
        else{ echo '<title>Главый Экран</title>'; }
    ?>
    <?php if($_GET['page'] == 'report') {   echo '<link rel="stylesheet" href="report.css">'; }
          elseif($_GET['page'] == 'addanim'){echo '<link rel="stylesheet" href="add.css">';}
    ?>
</head>
<body>
<div class="menu">
    <p class="navig">Навигация</p>
    <a href="../index.php" class="naviglink">Выйти на сайт</a>
    <a href="console.php?page=report" class="naviglink">Репорты</a>
    <a href="console.php?page=addanim" class="naviglink">Добавить Аниме</a>
</div>
<div class="content">
    <?php
    if($_GET['page'] == 'report') {
        echo'<p class="text1">И какую проблему мы будем решать сегодня?</p><hr>';
        include('report.php');
    }elseif($_GET['page'] == 'addanim') {
        echo'<p class="text1">Ну я думаю ты сам знаешь что делать</p><hr>';
        include('add.php');
    }
    ?>
</div>
<script src="admin.js"></script>
</body>
</html>