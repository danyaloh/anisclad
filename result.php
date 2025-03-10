<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="result.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">

    <link rel="shortcut icon" href="img/entertainment.png" type="image/png">

    <title>АниСклад - Место под твои любимые тайтлы</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap"

        rel="stylesheet">

</head>



<body>

    <?php 

    include 'header.php';

    ?>

    <form class="search" action="input.php" method="post">

        <input class="searchinput" type="text" name="username">

        <button class="searchbutton" type="submit"><img src="img\tools-and-utensils.png"></button>

    </form>

    <?php echo'<p class="result">Вот что мне удалось найти по запросу '. $f .':</p>';?>

    <div class="catalog">

        <?php

            while($sodershimoe){ 

                echo ' <a href="anime.php?anim='. $sodershimoe['id'] .'">

                     <div class="catalogcard">

                     <img class="catalogcardimg card" src="cardimg/'. $sodershimoe['img'] .'">

                     <div class="hiddencontent">

                     <div>

                         <h3 class="cardname">'. $sodershimoe['name'] .'</h3>

                         <p class="cardepisode">'. $sodershimoe['episode'] .'</p>

                         <p class="cardtext">'. $sodershimoe['text'] .'</p>

                         <a href=""><button class="button">Скачать</button></a>

                         </div>

                         </div>

              

                 </div></a>';

         

                 $sodershimoe = pg_fetch_assoc($query);

     

                 };

?>

    </div>

    <?php 

    include 'footer.php';

    ?>

</body>



</html>