<?php
include "dbconnection.php";
$ID= $_POST['ID'];

$sql = $conn->prepare("delete from user where ID=?");
$delete = $sql->execute([$ID]);
if($delete){
    echo"<script>
    window.top.location = 'index.php'; 
    </script>";
}else{
    echo"<script>
    window.top.location = 'index.php'; 
    </script>";
}
$conn->close(); 
