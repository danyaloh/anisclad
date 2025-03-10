<?php
$connect = pg_connect("host=db dbname=id103 user=id103 password=kd58sv");
$cardmas = pg_query($connect, 'SELECT * FROM torrentcard LIMIT 16');
$card = pg_fetch_assoc($cardmas);
?>
<!DOCTYPE html>
<htmL>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="catalog.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/entertainment.png" type="image/png">
    <title>Каталог</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap"
        rel="stylesheet">
</head>

<body class="catalogbody">
    <?php 
include "header.php";
?>
    <p class="text-nad-search">Ты уже знаешь что хочешь посмотреть?<br> Так вперёд!</p>
    <?php
if(isset($_GET['page'])) {
echo'<form class="search" action="input.php?page=6" method="post">';
}else{
    echo'<form class="search" action="input.php" method="post">';
}
?>
    <input class="searchinput" type="text" name="username">
    <button class="searchbutton" type="submit"><img src="img\tools-and-utensils.png"></button>

    </form>
    <?php
if(isset($_GET['page'])) {
    echo'<div class="message">
    Надеюсь ты больше так не сделаешь
    <button class="message__close" title="Возможно"></button>
</div>';
}
?>
    <div class="catalog">
        <?php
            while($card){ 
                echo ' <a href="anime.php?anim='. $card['id'] .'">
                     <div class="catalogcard">
                     <img class="catalogcardimg card" src="cardimg/'. $card['img'] .'">
                     <div class="hiddencontent">
                     <div>
                         <h3 class="cardname">'. $card['name'] .'</h3>
                         <p class="cardepisode">'. $card['episode'] .'</p>
                         <p class="cardtext">'. $card['text'] .'</p>
                         <a href=""><button class="button">Скачать</button></a>
                         </div>
                         </div>
              
                 </div></a>';
         
                 $card = pg_fetch_assoc($cardmas);
     
                 };
?>
        <?php
// while($card){
//     if($_GET = $card['id']) {

//     }
// }
?>
    </div>
    <?php

include "footer.php";
?>
    <script src="catalog.js"></script>
</body>

</html>