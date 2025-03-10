<?php
include "connect.php";
$i = $_GET['id'];
$query = "DELETE FROM report WHERE id='" . $i . "'";
// $result = pg_query($connect, "DELETE FROM report WHERE id=' . $i . '");
if($result = pg_query($query)){
    header('location: console.php?page=report');
}