<?php
if(isset($_SESSION['error'])) {
    echo 'Не все поля были заполнены';
    unset($_SESSION['error']);
}
?>
<form method="post" action="addscript.php" enctype="multipart/form-data">
<label for="">Название</label>
<input type="text" name="name">
<label for="">Имя картинки</label>
<input type="text" name="img">
<label for="">Укороченное описание</label>
<input type="text" name="text">
<label for="">Полное Описание</label>
<input type="text" name="fulltext">
<label for="">Ссылка на скачку</label>
<input type="text" name="link">
<label for="">Ссылка на видео</label>
<input type="text" name="video">
<label for="">Сезон</label>
<input type="text" name="season">
<label for="">Эпизоды</label>
<input type="text" name="episode">
<label for="">Жанры</label>
<input type="text" name="genre">
<button type="submit">*Тык*</button>
</form>