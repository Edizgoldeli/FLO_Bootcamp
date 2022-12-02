<?php
function classes($class)
{
    $adress = "/Applications/MAMP/htdocs/bloodBank/CLASSES/" . $class . ".class.php";
    require_once($adress);
}
spl_autoload_register("classes");
