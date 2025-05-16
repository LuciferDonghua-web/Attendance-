<?php
$path=$_SERVER['DOCUMENT_ROOT'];
require_once $_SERVER['DOCUMENT_ROOT'] . "/attendance_app/database/database.php";
$dbo = new Database();

$c="create table tab44
(id int)";
$st=$dbo->conn->prepare($c);
$st->execute();
?>