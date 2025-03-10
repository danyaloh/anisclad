
<?php
session_start();
$connect = pg_connect("host=db dbname=id103 user=id103 password=kd58sv");
$name = $_POST['name'];
$text = $_POST['text'];
$fulltext = $_POST['fulltext'];
$img =  $_POST['img'];
$link = $_POST['link'];
$video = $_POST['video'];
$season = $_POST['season'];
$episode = $_POST['episode'];
$genre = $_POST['genre'];
if($name == NULL or $text == NULL or $fulltext == NULL or $img == NULL or $link == NULL or $video == NULL or $season == NULL or $episode == NULL or $genre == NULL){
    $_SESSION['error'] = true;
    header('location: console.php?page=addanim');
    die('');
};
$result = pg_query_params($connect, 'INSERT INTO torrentcard (name, img, text, buttonlink, episode, video, fulltext, genre, season) VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9)', [$name, $img, $text, $link, $episode, $video, $fulltext, $genre, $season]);
if ($result) {
    header('location: console.php?page=addanim');
}