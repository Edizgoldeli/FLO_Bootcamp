<?php
include_once "dbConnection.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$encode = new Hash;
$direct = new Url;
$sorgu = $conn->query("select * from admin where username = '$username' ", PDO::FETCH_ASSOC);


    foreach ($sorgu as $veri) {
        $passwordHash = $veri['password'];

        if ($encode->verify($password, $passwordHash)) {
            $ID =  $veri['ID'];
            $username = $veri['username'];
            $_SESSION['ID'] = $ID;
            echo "Hoşgeldiniz.";
            $direct->redirect("HTML", "records");
        }else{
            $direct->redirect("HTML", "login");
        }
    }
    $direct->redirect("HTML", "login");
