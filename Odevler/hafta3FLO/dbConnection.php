<?php
$conn = new PDO("mysql:host=localhost;dbname=FLO;charset=utf8","root","root");

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>