<?php
$connect = pg_connect("host=db dbname=id103 user=id103 password=kd58sv");
$name = $_POST['name'];
$tema = $_POST['tema'];
$text = $_POST['text'];
$date = new DateTime();

$result = pg_query_params($connect, 'INSERT INTO report (name, tema, text, time) VALUES ($1, $2, $3, $4)', [$name, $tema, $text, $date->format('c')]);
if ($result) {
    header('location: support.php?page=acept');
}