<?php
session_start();

$_SESSION["kitap"] = "Atatürk";
$_SESSION["yil"] = 2020;

echo "Yazar". $_SESSION["kitap"]."<br> yıl: ". $_SESSION["yil"];

if (isset($_SESSION["kitap"])){
    echo "oturuma hoşgeldiniz"
}
if( empty($_SESSION["yil"])){
    //içerik boşsa xxx
}else{//içerik doluydu xxx
}
unset($_SESSION["kitap"],$_SESSION["yil"]);
session_destroy();//tüm sessionlar kapatılır