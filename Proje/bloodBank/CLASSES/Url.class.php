<?php
class Url
{
    public $file;
    public $address;

   public function directory($file, $address)
   {
       if ($file == "") {
           $result = "/bloodBank/$address.php";
       } else {
           $result = "/bloodBank/$file/$address.php";
       }
       echo $result;
   }

   public function redirect($file, $address){
    if ($file == "") {
        $result = "/bloodBank/$address.php";
    } else {
        $result = "/bloodBank/$file/$address.php";
    }
    header('Location: '.$result); 
   }

}