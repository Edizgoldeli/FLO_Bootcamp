<?php
function upload($class)
{
    $adress = __DIR__ ."/Classes/".$class . ".class.php";
    require_once($adress);
}
spl_autoload_register("upload");
