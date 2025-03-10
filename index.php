<?php
$connect = pg_connect("host=db dbname=id103 user=id103 password=kd58sv");
$slidemas = pg_query($connect, 'SELECT * FROM animslide');
$slide = pg_fetch_assoc($slidemas);
$cardmas = pg_query($connect, 'SELECT * FROM torrentcard order by random()  LIMIT 6');
$card = pg_fetch_assoc($cardmas);
?>
<!DOCTYPE html>
<htmL>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
    <link rel="shortcut icon" href="img/entertainment.png" type="image/png">
    <title>АниСклад - Место под твои любимые тайтлы</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap"
        rel="stylesheet">
</head>

<body class="mainbody">
    <?php 
include "header.php";
?>
    <div class="swiper-container sw">

        <div class="swiper-wrapper">
            <?php 
                $i = 1;
                while($slide) {
                echo '<a href="'. $slide['link'] .'" class="swiper-slide sw'. $i .'">
                    <img src="img/'. $slide['img'] .'">

                </a>';
                $slide = pg_fetch_assoc($slidemas);
                $i++;
            };
                ?>

        </div>
    </div>
    <p class="textrecom">Вот что ты можешь посмотреть</p>
    <?php
        ?>
    <div class="recomd">
        <?php
            $i2 = 1;
            while($card){ 
           echo ' <a href="anime.php?anim='. $card['id'] .'">
                <div class="recomendcard">
                <img class="cardimg card" src="cardimg/'. $card['img'] .'">
                <div class="secretcontent content">
                <div>
                    <h3 class="name">'. $card['name'] .'</h3>
                    <p class="episode">'. $card['episode'] .'</p>
                    <p class="text">'. $card['text'] .'</p>
                    <a href="'. $card['buttonlink'] .'"><button class="cardbutton">Скачать</button></a>
                    </div>
                    </div>
         
            </div></a>';
    
            $card = pg_fetch_assoc($cardmas);

            };
            ?>
    </div>
    <?php
include "footer.php";
?>


    <script src="script.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper('.sw', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 1800,
            disableOnInteraction: false,
        },
    });
    </script>
    <!-- <img src="y2.gif"> -->
</body>

</html>
<!-- <div class="content">
<form action="input.php" method="post">
<input type="text" name="username"><br>
<button type="submit"></button> 

</form> -->