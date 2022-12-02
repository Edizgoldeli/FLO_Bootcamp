<?php
include "classes.php";
session_start();

unset($_SESSION['ID']);

$a = new Url;
$a->redirect("HTML","login");
