<?php
setcookie("test","Ediz Göldeli", time()+3600,"/","deneme.com", false, false); //isim, bilgi, yaşam süresi, geçerli olacağı yerler / tüm site demek, true https false http, false değiştirilemez true değiştirilebilir
//ilk 3 must 
echo "Çerez içeriği: ".$_COOKIE["test"]; //Çerezin içeriğini kontrol edebiliriz

if(isset($_COOKIE["test"])){ //Çerezin içeriğini kontrol edebiliriz
    echo " dosya var"
}else { echo'dosya yok';}

setcookie("ziyaretci","Ad Soyad");
if (empty($_COOKIE["ziyaretci"])){ //Çerezin içeriğini kontrol edebiliriz
    echo "Çerez içi boş.";
}else{ echo"Çerez içi boş";}

setcookie("ziyaretci","Ad Soyad",time()-1); // -1 yapıp kayıtlı cookileri silebiliriz