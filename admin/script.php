<?php
session_start();
$connect = pg_connect("host=db dbname=id103 user=id103 password=kd58sv");
$n = $_POST['name'];
$p = $_POST['pass'];
$help = "SELECT * FROM php WHERE name= $1";
$help2 = [
    $n
];
$cheak = pg_query_params($connect, $help, $help2);
$assoc = pg_fetch_assoc($cheak);
$name = $assoc['name'];
$pass = $assoc['pass'];
if($n === $name && $p === $pass) {
    $_SESSION['name'] = $name;
    $_SESSION['accept'] = true;
    header('location: console.php');
}else {
    $_SESSION['null'] = true;
    header('location: index.php');
}
?>