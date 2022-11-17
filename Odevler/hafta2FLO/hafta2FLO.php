<?php
include "dbConnection.php";
session_start();

$urunler = array(
    array("Ülker Çikolatalı Gofret 40 gr", "10₺"), //ürün ismini ve fiyatını tanımladık
    array("Eti Damak Kare Çikolata 60 gr", "20₺"),
    array("Nestle Bitter Çikolata 50 gr", "20₺")
);



$adet1 = $_SESSION["adet1"]; //daha önceki işlemlerden gelen ürün bilgisi için session kullandık
$adet2 = $_SESSION["adet2"];
$adet3 = $_SESSION["adet3"];

$fiyat1 = $adet1 * $urunler[0][1]; //birden fazla eklenen ürünlerin fiyatını hesapladık
$fiyat2 = $adet2 * $urunler[1][1];
$fiyat3 = $adet3 * $urunler[2][1];
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
        <table border='1' width='95%'>
            <!-- tablo oluşturup genişliği sayfanın %95'i olacak şekilde ayarladık -->
            <tr>
                <td><b>Ürün Adı</b></td> <!-- tablo başlıklarını ayarladık -->
                <td class="cntr"><b>Ürün Fiyatı</b></td>
                <td class="cntr"><b>Adet</b></td>
            </tr>



            <tr>
                <form method="post" action="sepetKontrol.php">
                    <!-- form işlemini post metoduyla sepetKontrol.php'ye yollayacağımızı belirledik -->
                    <td><?php echo $urunler[0][0]; ?></td>
                    <td class="cntr"><?php echo $urunler[0][1]; ?></td>
                    <td class="cntr"><input type="number" name="adet1" min="0" max="50" placeholder="0"></td> <!-- ürün adedi eklenebilmesi için number türünde girdi alanı ekledik ve min max ile aralığı daraltıp kabul edilmeyen girdilerin engellenmesini sağladık ( php tarafında bir kontrol daha var mininimum için ) -->
            </tr>
            <tr>
                <td><?php echo $urunler[1][0]; ?></td>
                <td class="cntr"><?php echo $urunler[1][1]; ?></td>
                <td class="cntr"><input type="number" name="adet2" min="0" max="50" placeholder="0"></td>
            </tr>
            <tr>
                <td><?php echo $urunler[2][0]; ?></td>
                <td class="cntr"><?php echo $urunler[2][1]; ?></td>
                <td class="cntr"><input type="number" name="adet3" min="0" max="50" placeholder="0"></td>
            </tr>

        </table>

        <input type="submit" class="submit" value="Ürünü sepete ekle">
        </form>
        <?php
        if ($fiyat1 == "" && $fiyat1 == 0) { // fiyat 0₺ yada direkt girdi bilgisi yoksa bunu kaydediyoruz 
            $a = 1;
        } else {
            $a = 0;
        }
        if ($fiyat2 == "" && $fiyat2 == 0) {
            $b = 1;
        } else {
            $b = 0;
        }
        if ($fiyat3 == "" && $fiyat3 == 0) {
            $c = 1;
        } else {
            $c = 0;
        }

        if ($a == 1 && $b == 1 && $c == 1) { //eğer hiçbir ürünün değeri 0'dan büyük değil ve/veya boşsa bu koşul çalışır, sepet yerine sepet boş görseli gösterilir.
        ?>
            <div class="sepetBos">
                <!-- Hocam bu kısmı istemediğinizi biliyorum ama eklemek istedim 😅 -->
                <img src="https://ediz.goldeli.com/FLO_odev2_sepetbos.png" alt="Sepetinizde ürün bulunmamaktadır" width="300px">
            </div>
        <?php
        } else {
        ?>
            <table border='1' width='95%'>
                <h3>Sepetiniz:</h3>
                <tr>
                    <td><b>Ürün Adı</b></td>
                    <td class="cntr"><b>Adet</b></td>
                    <td class="cntr"><b>Fiyat</b></td>
                </tr>
                <!-- -->
                <?php
                $sorgu = $conn->query("select * from sepet", PDO::FETCH_ASSOC);
                foreach ($sorgu as $veri) {
                    $count++; //set counter to count number of the records
                    $ID =  $veri['ID'];
                    $urun = $veri['urun'];
                    $fiyat = $veri['fiyat'];
                    if ($ID == 1) {
                        $adet = $adet1;
                        $toplam = $fiyat1;
                    } else if ($ID == 2) {
                        $adet = $adet2;
                        $toplam = $fiyat2;
                    } else if ($ID == 3) {
                        $adet = $adet3;
                        $toplam = $fiyat3;
                    }

                ?>
                    <tr>
                        <td><?php echo $urun; ?></td>
                        <td class="cntr"><?php echo $adet; ?></td>
                        <td class="cntr" aria-placeholder="0"><?php echo $toplam; ?>₺</td>
                    </tr>
                <?php
                }
                ?>
                <!-- -->
            </table>
                <form method="post" action="sepetKontrol.php">
                    <input type="hidden" name="temizle" value="1"> <!-- sepeti temizlemek için php tarafında tüm seçili ürünleri silen fonksiyonu çalıştırmak için 1 değerini yolladık -->
                    <input type="submit" class="submit" value="Sepeti Temizle">
    </center>
<?php } ?>
</body>

</html>