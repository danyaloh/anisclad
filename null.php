<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="null.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap" rel="stylesheet">
</head>
<body>
<?php
if($i < 6){
include "header.php";
echo'<div class="null">';
}
?>
<?php
if($i < 6){
if($i == 1 ) {
    echo'<form class="search" action="input.php?page=1" method="post">';
}elseif($i == 2) {
    echo'<form class="search" action="input.php?page=2" method="post">';
}elseif($i == 3) {
    echo'<form class="search" action="input.php?page=3" method="post">';
}elseif($i == 4) {
    echo'<form class="search" action="input.php?page=4" method="post">';
}elseif($i == 5) {
    echo'<form class="search" action="input.php?page=5" method="post">';
}elseif($i == 6) {
    echo'<form class="search" action="input.php?page=6" method="post">';
}

echo'<input class="searchinput" type="text" name="username">';
echo'<button class="searchbutton" type="submit"><img src="img\tools-and-utensils.png"></button>';

echo'</form>';
}
?>
<?php
if(empty($q)) {
    $a = '<a class="life" href="catalog.php?page=sea_in_next_time">y̶o̶u̶r̶ ̶l̶i̶f̶e̶ </a>';
}else {
    $a = '<a class="nolife">y̶o̶u̶r̶ ̶l̶i̶f̶e̶ </a>';
}

if($i == 1) {
    echo '<p class="text">Хм, ты ничего не написал. Попробуй ещё раз</p>';
}elseif($i == 2) {
echo '<p class="text">У тебя всё хорошо?</p>';
}elseif($i == 3) {
    echo '<p class="text">Ты серьёздно думаешь что это смешно?</p>';
}elseif($i == 4) {
    echo '<p class="text">ХВАТИТ!</p>';
}elseif($i == 5) {
    echo '<p class="text">Ещё раз и я убью это сайт</p>';
}elseif($i == 6) {
    echo'<div class="paskalbox">
    <h1>An exception has occurred</h1>
    <p>file '. $a .'"index.php" line 307</p>
    <p>see console for detals</p>
    </div>';
    echo '<iframe hidden src="2.mp3" allow="autoplay" type="audio/mpeg"></iframe>';
echo'<style>
body {
    background-image: url(4.gif);
    background-repeat: no-repeat;
    margin: 0;
    width: 100%;
}
</style>';
}



?>
</div>

<?php
if($i < 6) {
include "footer.php";
}
?>
<script src="null.js"></script>
</body>
</html>