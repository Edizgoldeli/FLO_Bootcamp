<?php
include_once "dbConnection.php";
session_start();

$hash = new Hash;
$direct = new Url;

$name = $_POST['name'];
$surname = $_POST['surname'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$bType = $_POST['bType'];
$gender = $_POST['gender'];
$donation = $_POST['donation'];
$password = $_POST['password'];

$pHash = $hash->encode($password);
$date = date('Y-m-d H:i:s');

$sorgu = $conn->prepare("insert into donor values(?,?,?,?,?,?,?,?,?,?,?,?)");
$add = $sorgu->execute(array(NULL, "$name", "$surname", "$birth", "$gender", "$email", "$pHash", "$tel", "$bType", "$donation", NULL, $date));


$direct->redirect("HTML", "donorRegister");
