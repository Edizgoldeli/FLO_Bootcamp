<?php
include "dbconnection.php";
$FN= $_POST['name0'];
$PN= $_POST['phone0'];

$sorgu = $conn->prepare("insert into user values(?,?,?,?)");
$add = $sorgu->execute(array(NULL,"$FN","$PN",NULL));
if($add){
    echo"<script>
    window.top.location = 'index.php'; 
    </script>";
}else{
    echo"<script>
    window.top.location = 'index.php'; 
    </script>";
}
$conn->close(); 