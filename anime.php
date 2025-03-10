<?php
$connect = pg_connect("host=db dbname=id103 user=id103 password=kd58sv");
$infomas = pg_query($connect, 'SELECT * FROM torrentcard  WHERE id = '. $_GET['anim'] .'');
$info = pg_fetch_assoc($infomas);
$cardmas = pg_query($connect, 'SELECT * FROM torrentcard LIMIT 3');
$card = pg_fetch_assoc($cardmas);
include "3.php";
?>