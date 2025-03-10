<?php
$connect1 = pg_connect("host=db dbname=id103 user=id103 password=kd58sv");
$cardmas1 = pg_query($connect1, 'SELECT * FROM torrentcard order by random()  LIMIT 1');
$card1 = pg_fetch_assoc($cardmas1);
?>
<div class="header">
    <a href="index.php" class="header_link headerlink1">Главная</a>
    <a href="catalog.php" class="header_link headerlink2">Релизы</a>
    <?php echo'<a href="anime.php?anim='. $card1['id'] .'" class="header_link headerlink3">Слуйчайное</a>';?>
    <a href="support.php" class="header_link headerlink4">Поддержка</a>
    <a href="about_sait.php" class="header_link headerlink5">О сайте</a>
    <img src="logo.png" class="hamburger">
    
</div>
<div class="menu hidden">
      <p>Навигация</p>
      <div class="menu-text">
        <a href="index.php">Главная</a>
        <a href="catalog.php">Релизы</a>
        <?php echo '<a href="anime.php?anim='. $card1['id'] .'">Слуйчайное</a>'; ?>
        <a href="support.php">Поддержка</a>
        <a href="about_sait.php">О сайте</a>
      </div>
      <script src="1.js"></script>   
    </div>
