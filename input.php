<?php
$connect = pg_connect("host=db dbname=id103 user=id103 password=kd58sv");
$otsutstvie = empty($_POST['username']);
$i = 1;
if(isset($_GET['page'])) {
if($_GET['page'] == 1) {
$i = 2;
}elseif($_GET['page'] == 2){
    $i = 3;
}elseif($_GET['page'] == 3){
    $i = 4;
}elseif($_GET['page'] == 4){
    $i = 5;
}elseif($_GET['page'] == 5){
    $i = 6;
}elseif($_GET['page'] == 6){
    $i = 6;
    $q = 1;
}
}
if($otsutstvie) {
    include "null.php";
}else {
    $f = $_POST['username'];
    $f = mb_strtolower($f, 'UTF-8');

$query = pg_query($connect, "SELECT * FROM torrentcard WHERE LOWER(name) LIKE '%$f%'");
$sodershimoe = pg_fetch_assoc($query);
    include 'result.php';
}
?>
