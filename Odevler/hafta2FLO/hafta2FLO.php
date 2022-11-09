<?php

session_start();
$urun1 = "Ülker Çikolatalı Gofret 40 gr";
$urun1Fiyat = "10₺";
$urun2 = "Eti Damak Kare Çikolata 60 gr";
$urun2Fiyat = "20₺";
$urun3 = "Nestle Bitter Çikolata 50 gr";
$urun3Fiyat = "20₺";
$adet1 = $_SESSION["adet1"];
$adet2 = $_SESSION["adet2"];
$adet3 = $_SESSION["adet3"];
$fiyat1 = $adet1 * $urun1Fiyat;
$fiyat2 = $adet2 * $urun2Fiyat;
$fiyat3 = $adet3 * $urun3Fiyat;
$total = $fiyat1 + $fiyat2 + $fiyat3;
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel=stylesheet href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <title> Odev 2 </title>
</head>

<body>
    <center>
        <br>
        <table border='1' width='95%'>
            <tr>
                <td><b>Ürün Adı</b></td>
                <td class="cntr"><b>Ürün Fiyatı</b></td>
                <td class="cntr"><b>Adet</b></td>
            </tr>



            <tr>
                <form method="post" action="sepetKontrol.php">
                    <td><?php echo $urun1; ?></td>
                    <td class="cntr"><?php echo $urun1Fiyat; ?></td>
                    <td class="cntr"><input type="number" name="adet1" min="1" max="50" placeholder="0"></td>
            </tr>
            <tr>
                <td><?php echo $urun2; ?></td>
                <td class="cntr"><?php echo $urun2Fiyat; ?></td>
                <td class="cntr"><input type="number" name="adet2" min="1" max="50" placeholder="0"></td>
            </tr>
            <tr>
                <td><?php echo $urun3; ?></td>
                <td class="cntr"><?php echo $urun3Fiyat; ?></td>
                <td class="cntr"><input type="number" name="adet3" min="1" max="50" placeholder="0"></td>
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
            <input type="hidden" name="temizle" value="1">
            <input type="submit" class="submit" value="Sepeti Temizle">
    </center>
</body>

</html>