<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="support.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="shortcut icon" href="img/entertainment.png" type="image/png">
    <title>АниСклад - Место под твои любимые тайтлы</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php 
include "header.php";
?>
    <?php
    if(isset($_GET['page'])) {
if($_GET['page'] == 'acept') {
    echo'<div class="message">
    Ваш случай будет в скоре разобран
    <button class="message__close" title="Возможно"></button>
</div>';
}
    }
?>
    <div class="mainblock">

        <div class="voprosi">
            <p class="">У тебя есть вопросы, вожможно я помогу тебе</p>
            <div class="quest">
                <p class="quest1 border">- Тут вроде говорилось о пасхалке, где я могу её найти?</p>
                <p class="quest1-1 inactive">- Понятие не имею о чём речь, но пожалуйста не отправляй 5 пустой поиск,
                    просто не надо</p>
                <p class="quest2 border">*Здесь будет вопрос*</p>
                <p class="quest2-1 inactive">*Здесь будет ответ*</p>
                <p class="quest3 border">*Здесь будет вопрос*</p>
                <p class="quest3-1 inactive">*Здесь будет ответ*</p>
                <p class="quest4 border">*Здесь будет вопрос*</p>
                <p class="quest4-1 inactive">*Здесь будет ответ*</p>
                <p class="quest5 border">*Здесь будет вопрос*</p>
                <p class="quest5-1 inactive">*Здесь будет ответ*</p>
            </div>
            <p></p>
            <p></p>
        </div>
        <hr>
        <div class="form">
            <p class="textupform">Так же если ты нашёл ошибку на сайте, или не нашёл ответ на свой вопрос в ответах, то
                напиши нам</p>
            <form method="post" action="report.php" class="forma">
                <p for="" class="label1">Что-то для обратной связи(если необходимо)</p>
                <input type="text" name="name" autocomplete="off">
                <label for="" class="">Что именно случилось?</label>
                <input type="text" name="tema" autocomplete="off">
                <label for="" class="">Расскажи подробнее</label>
                <textarea name="text" id=""></textarea>
                <button>*тык*</button>
            </form>
        </div>
    </div>
    <?php 
include "footer.php";
?>
    <script src="support.js"></script>
</body>

</html>