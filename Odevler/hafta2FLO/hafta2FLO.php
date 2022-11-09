<?php

session_start();
$urun1 = "Ülker Çikolatalı Gofret 40 gr"; //ürün ismini tanımladık
$urun1Fiyat = "10₺"; // ürün fiyatını tanımladık
$urun2 = "Eti Damak Kare Çikolata 60 gr";
$urun2Fiyat = "20₺";
$urun3 = "Nestle Bitter Çikolata 50 gr";
$urun3Fiyat = "20₺";
$adet1 = $_SESSION["adet1"]; //daha önceki işlemlerden gelen ürün bilgisi için session kullandık
$adet2 = $_SESSION["adet2"];
$adet3 = $_SESSION["adet3"];
$fiyat1 = $adet1 * $urun1Fiyat; //birden fazla eklenen ürünlerin fiyatını hesapladık
$fiyat2 = $adet2 * $urun2Fiyat;
$fiyat3 = $adet3 * $urun3Fiyat;
$total = $fiyat1 + $fiyat2 + $fiyat3; //sepet tutarını hesapladık
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"> <!-- karakter tipini belirledik -->
    <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- mobil cihazlar için ölçek ayarı yaptık -->
    <link rel=stylesheet href="style.css" /> <!-- style.css dosyasını ekledik -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'> <!-- Quicksand font'unun kaynağını ekledik -->
    <title> Odev 2 </title> <!-- başlığı belirledik -->
</head>

<body>
    <center>
        <br>
        <table border='1' width='95%'> <!-- tablo oluşturup genişliği sayfanın %95'i olacak şekilde ayarladık -->
            <tr>
                <td><b>Ürün Adı</b></td> <!-- tablo başlıklarını ayarladık -->
                <td class="cntr"><b>Ürün Fiyatı</b></td>
                <td class="cntr"><b>Adet</b></td>
            </tr>



            <tr>
                <form method="post" action="sepetKontrol.php"> <!-- form işlemini post metoduyla sepetKontrol.php'ye yollayacağımızı belirledik -->
                    <td><?php echo $urun1; ?></td>
                    <td class="cntr"><?php echo $urun1Fiyat; ?></td> 
                    <td class="cntr"><input type="number" name="adet1" min="0" max="50" placeholder="0"></td> <!-- ürün adedi eklenebilmesi için number türünde girdi alanı ekledik ve min max ile aralığı daraltıp kabul edilmeyen girdilerin engellenmesini sağladık ( php tarafında bir kontrol daha var mininimum için ) -->
            </tr>
            <tr>
                <td><?php echo $urun2; ?></td>
                <td class="cntr"><?php echo $urun2Fiyat; ?></td>
                <td class="cntr"><input type="number" name="adet2" min="0" max="50" placeholder="0"></td>
            </tr>
            <tr>
                <td><?php echo $urun3; ?></td>
                <td class="cntr"><?php echo $urun3Fiyat; ?></td>
                <td class="cntr"><input type="number" name="adet3" min="0" max="50" placeholder="0"></td>
            </tr>

        </table>

        <input type="submit" class="submit" value="Ürünü sepete ekle"> 
        </form>

        <table border='1' width='95%'>
            <h3>Sepetiniz:</h3>
            <tr>
                <td><b>Ürün Adı</b></td>
                <td class="cntr"><b>Adet</b></td>
                <td class="cntr"><b>Fiyat</b></td>
            </tr>

            <tr>
                <td><?php echo $urun1; ?></td>
                <td class="cntr"><?php echo $adet1; ?></td>
                <td class="cntr"><?php echo $fiyat1; ?>₺</td>
            </tr>
            <tr>
                <td><?php echo $urun2; ?></td>
                <td class="cntr"><?php echo $adet2; ?></td>
                <td class="cntr"><?php echo $fiyat2; ?>₺</td>
            </tr>
            <tr>
                <td><?php echo $urun3; ?></td>
                <td class="cntr"><?php echo $adet3; ?></td>
                <td class="cntr"><?php echo $fiyat3; ?>₺</td>
            </tr>
            <tr>
                <td colspan="2">Genel Toplam</td>

                <td class="cntr"><?php echo $total; ?>₺</td>
            </tr>
        </table>
        <form method="post" action="sepetKontrol.php">
            <input type="hidden" name="temizle" value="1"> <!-- sepeti temizlemek için php tarafında tüm seçili ürünleri silen fonksiyonu çalıştırmak için 1 değerini yolladık -->
            <input type="submit" class="submit" value="Sepeti Temizle">
    </center>
</body>

</html>