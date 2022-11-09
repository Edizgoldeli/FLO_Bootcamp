<?php
session_start();
function guvenlik($metin = '')
{
    $metin = strip_tags($metin);
    $metin = htmlspecialchars($metin);
    return $metin;
}

$adet1a = guvenlik($_SESSION["adet1"]); //önceden eklenmiş ürünler silinmemesi için session ile tekrar çağırdık
$adet2a = guvenlik($_SESSION["adet2"]);
$adet3a = guvenlik($_SESSION["adet3"]);

if( $_POST["adet1"] < 0 ){ // girilen adet 0'dan küçükse yanlış girdi olmaması için 0'a eşitledik
    $_POST["adet1"] = 0;
}
if( $_POST["adet2"] < 0 ){
    $_POST["adet2"] = 0;
}
if( $_POST["adet3"] < 0 ){
    $_POST["adet3"] = 0;
}
$adet1 = guvenlik($_POST["adet1"]) + $adet1a; //önceden sepete eklenmiş ürün adedi ile yeni eklenen ürün adetlerini toplayıp yeni değişkene kaydettik
$adet2 = guvenlik($_POST["adet2"]) + $adet2a;
$adet3 = guvenlik($_POST["adet3"]) + $adet3a;
$temizle = guvenlik($_POST["temizle"]); 

if($adet1 == "" ){ //eğer girdi olmadan form tamamlanmışsa 0 olarak sayılması için if koşulu ekledik
    $adet1 = 0;
}
if($adet2 == ""){
    $adet2 = 0;
}
if($adet3 == ""){
    $adet3 = 0;
}
if($temizle == 1){ //sepeti temizleyip $temizle değerinide 0'a eşitledik böylece sürekli ürünleri silmeyecek
    $adet1 = 0;
    $adet2 = 0;
    $adet3 = 0;
    $temizle = 0;
}
$_SESSION["adet1"] = $adet1; //diğer sayfada gösterim yapılabilmesi için değişkenleri session'a kaydettik
$_SESSION["adet2"] = $adet2;
$_SESSION["adet3"] = $adet3;
$_SESSION["temizle"] = $temizle;

    echo"<script>
    window.top.location = 'hafta2FLO.php'; 
    </script>"; //bu sayfayı kullanıcının kalmaması yada görmemesi için javascript ile yeniden formun olduğu sayfaya yönlendirdik
