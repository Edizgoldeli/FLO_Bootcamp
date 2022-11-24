<?php
include "dbconnection.php";
$ID= $_POST['ID'];

$sql = $conn->prepare("delete from haftaDort where ID=?"); // declared pdo sql statement which deletes selected id
$delete = $sql->execute([$ID]); //declared $ID so row which has $ID will deleted
if($delete){
    echo"<script>
    window.top.location = 'index.php'; 
    </script>"; //send user to index page
}else{
    echo"<script>
    window.top.location = 'index.php'; 
    </script>";
}
$conn->close(); //closed connection
