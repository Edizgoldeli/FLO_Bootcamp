<?php
require_once "dbConnection.php";

$ID = $_POST["prdctID"];
$name = $_POST["name"];
$size = $_POST["size"];
$amount = $_POST["amount"];
$percent = $_POST["percent"];

$KDV = 1.08;



$sorgu = $conn->query("select *  from maden where ID = $ID", PDO::FETCH_ASSOC);
foreach ($sorgu as $veri) {
    $ID1 =  $veri['ID'];
    $code =  $veri['code'];
    $ore = $veri['ore'];
    $price = $veri['price'];
    $GLOBALS['price'] = $price;
    function cevherFiyat($ID)
    {
        return $GLOBALS['price'];
    }
}
$cevherFiyat = cevherFiyat($ID1);
echo "<br>cevherfiyat $cevherFiyat <br>";
function taneEtkisi($cevherFiyat, $size)
{
    if ($size == 3) {
        $cevherFiyat = $cevherFiyat * 0.85;
    } else if ($size == 2) {
        $cevherFiyat = $cevherFiyat * 0.9;
    } else if ($size == 1) {
        $cevherFiyat = $cevherFiyat * 1;
    }
    return $cevherFiyat;
}
if ($size == 3) {
    $oreName = "Karpuz";
} else if ($size == 2) {
    $oreName = "Portakal";
} else if ($size == 1) {
    $oreName = "Erik";
}
echo "<br>taneEtkisi ";
echo taneEtkisi($cevherFiyat, $size) . "<br>";

$taneEtkisi = taneEtkisi($cevherFiyat, $size);

function temizlikEtkisi($percent, $taneEtkisi)
{
    $percent = $percent / 100;
    $lastPrice = $percent * $taneEtkisi;
    return $lastPrice;
}
echo "<br>temizlik etkisi ";
$temizlikEtkisi = temizlikEtkisi($percent, $taneEtkisi);
echo "<br>";
function decimal($number)
{
    $number = number_format($number, 0, ',', '');
    echo $number;
}
$differenceTE = $taneEtkisi - $temizlikEtkisi;
$total = $temizlikEtkisi * $amount;
$KDVeffect = $KDV * $total;
$KDVdifference = $KDVeffect - $total;
?>

<head>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'> <!-- Quicksand font'unun kaynağını ekledik -->

</head>
<style>
    td {
        border: none;
    }

    * {
        font-family: Quicksand;
    }
</style>
<table border='2' style="border-collapse: collapse; margin-left: auto; margin-right: auto;" width='250px'>
<tr>
        <td>* * * * Cevher v1.0 * * * * </td>
    </tr>
    <tr>
        <td>* Müşteri'nin </td>
    </tr>
    <tr>
        <td>İsmi: <?php echo $name; ?></td>
    </tr>
    <tr>
        <td>* Cevherin</td>
    </tr>
    <tr>
        <td><?php echo "Kodu: $code";?></td>
    </tr>
    <tr>
        <td><?php echo "Tane büyüklüğü: $size";?></td>
    </tr>
    <tr>
        <td><?php echo "Temizlik oranı: $percent";?></td>
    </tr>
    <tr>
        <td><?php echo "Miktar (ton): $amount";?></td>
    </tr>
    <tr>
        <td>* * * * * * * * * * * * * * * * * * * * * * * * * * </td>
    </tr>
    <tr>
        <td>* * * * * * * Fatura * * * * * * *</td>
    </tr>
    <tr>
        <td>Alıcı: <?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Cevher Türü: <?php echo $ore; ?></td>
    </tr>
    <tr>
        <td>Normal Birim Fiyat: <?php echo $price; ?> TON/₺</td>
    </tr>
    <tr>
        <td>Tane: <?php echo $oreName; ?></td>
    </tr>
    <tr>
        <td><?php echo "$oreName Fiyat: $taneEtkisi TON/₺"; ?></td>
    </tr>
    <tr>
        <td>Temizlik: <?php echo $percent; ?>%, Etkisi: -<?php echo $differenceTE; ?>₺</td>
    </tr>
    <tr>
        <td>Temizlik Etkisi Sonrası Birim Fiyat: <?php decimal($temizlikEtkisi); ?> TON/₺</td>
    </tr>
    <tr>
        <td>Toplam: <?php decimal($total); ?>₺</td>
    </tr>
    <tr>
        <td> KDV (%8): <?php decimal($KDVdifference); ?>₺ </td>
    </tr>
    <tr>
        <td> Genel Toplam: <?php decimal($KDVeffect); ?>₺ </td>
    </tr>
    <br><br>
    <tr>
        <td> Mega Madencilik, 2016 </td>
    </tr>
    <tr>
        <td>* * * * * * * * * * * * * * * * * * * * * * * * * * </td>
    </tr>

</table>
<center><a href="index.php"> Go back </a></center>