
<?php
$connect = pg_connect("host=db dbname=id103 user=id103 password=kd58sv");
$cardmas = pg_query($connect, 'SELECT * FROM report');
$card = pg_fetch_assoc($cardmas);
?>
<div class="catalog">
<?php
while($card){ 
    echo '
        <div class="catalogcard">
        <div>
        <h3 class="cardname">'. $card['name'] .'</h3>
        <p class="cardepisode">'. $card['tema'] .'</p>
        <p class="cardtext">'. $card['text'] .'</p>
        <a class="button"><img src="tick.png"></a>
        </div>
         <div class="hiddencontent"> 
         <p class="v1">Вы уверены что вопрос закрыт?</p>
         <div class="yesorno">
         <a href="delete.php?id='. $card['id'] .'"><p class="yes">Да</p></a>
         <p class="no">Нет</p>
        </div>
         </div>
     </div>';

     $card = pg_fetch_assoc($cardmas);

     };
?>
</div>