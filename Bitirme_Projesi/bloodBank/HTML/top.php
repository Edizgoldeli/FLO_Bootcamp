<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include("/Applications/MAMP/htdocs/bloodBank/PHP/dbConnection.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- set character type -->
    <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- scaling for mobile devices -->
    <meta name="description" content="Kan Bankası">
    <meta name="theme-color" content="#FF5454">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />

    <meta name="apple-mobile-web-app-status-bar-style" content="#FF5454">
    <meta name="apple-mobile-web-app-title" content="KanBankası">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel=stylesheet href="/bloodBank/STYLE/general.css" />
    <?php
    $login = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if ($login == "localhost/bloodBank/HTML/login.php") {
    ?>
        <link rel=stylesheet href="/bloodBank/STYLE/login.css" />
    <?php
    } else {
    ?>
        <link rel=stylesheet href="/bloodBank/STYLE/main.css" />
    <?php
    }
    if ($login == "localhost/bloodBank/HTML/donorRegister.php") {
    ?>
        <link rel=stylesheet href="/bloodBank/STYLE/register.css" />
    <?php
    } ?>

    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'> <!-- Quicksand font has added -->
    <title> Blood Bank </title> <!-- title has set -->


</head>

<body>