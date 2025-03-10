<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
echo ' <a href="anime.php?anim='. $card['id'] .'">
<div class="catalogcard">
<img class="catalogcardimg card" src="cardimg/'. $card['img'] .'">
<div class="hiddencontent">
<div>
    <h3 class="cardname">'. $card['name'] .'</h3>
    <p class="cardepisode">'. $card['episode'] .'</p>
    <p class="cardtext">'. $card['text'] .'</p>
    <a href="'. $card['buttonlink'] .'"><button class="button">Скачать</button></a>
    </div>
    </div>

</div></a>';
?>
</body>
</html>