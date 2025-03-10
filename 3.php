<!DOCTYPE html>
<htmL>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="shortcut icon" href="img/entertainment.png" type="image/png">
    <title>АниСклад - Место под твои любимые тайтлы</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap"
        rel="stylesheet">
</head>

<body class="pagebody">
    <div class="v1">
        <?php 
include "header.php";
?>
        <div class="recomend">
            <p class="tak_she">Так же ты можешь посмотреть:</p>
            <?php
            while($card){ 
                echo ' <a href="anime.php?anim='. $card['id'] .'">
                     <div class="recomendcard">
                     <img class="cardimg card" src="cardimg/'. $card['img'] .'">
                     <div class="secretcontent content">
                     <div>
                         <h3 class="recomname">'. $card['name'] .'</h3>
                         <p class="recomepisod">'. $card['episode'] .'</p>
                         <p class="recomtext">'. $card['text'] .'</p>
                         <a href="'. $card['buttonlink'] .'"><button class="cardbutton">Скачать</button></a>
                         </div>
                         </div>
              
                 </div></a>';
         
                 $card = pg_fetch_assoc($cardmas);
     
                 };
?>

        </div>


        <div class="mainblock">
            <?php    
 echo '<div class="text">
    <p class="name">'. $info['name'] .'</p>
    <hr> 
    <p class="season">'. $info['season'] .'</p>
    <p class="genre">'. $info['genre'] .'</p>
    <hr>
    <p class="fulltext"><img  class="img" src="cardimg/'. $info['img'] .'" alt="" class="cardimg">'. $info['fulltext'] .'</p>
</div>
<hr class="v3">
<p class="textnadvideo">Ты можешь посмотреть это прямо у нас на сайте</p>
<iframe class="v2" src="'. $info['video'] .'" type="text/html" frameborder="0"></iframe>

    <div class="dowloand">
    <p>Или же просто скачать</p>
<a href="'. $info['buttonlink'] .'"><button>*Тык*</button></a>
</div>';
?>
        </div>
        <?php

include "footer.php";
?>
    </div>

</body>

</html>