<?php
$servername = "localhost";
$dbname = "FLO";
$username = "root";
$password = "root";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", "$username", "$password");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection failed: " . $exception->getMessage();
}
