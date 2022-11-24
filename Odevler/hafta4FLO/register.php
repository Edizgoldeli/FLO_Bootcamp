<?php

include "dbconnection.php";
$FN = $_POST['name'];
$TC = $_POST['tc'];

$verification = new TcKimlik;
$verification->validate($TC);

$sorgu = $conn->prepare("insert into haftaDort values(?,?,?,?)");
$add = $sorgu->execute(array(NULL, "$FN", "$TC", "$status"));
if ($add) {
    echo "<script>
    window.top.location = 'index.php'; 
    </script>";
} else {
    echo "<script>
    window.top.location = 'index.php'; 
    </script>";
}
