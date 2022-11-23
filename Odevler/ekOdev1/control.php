<?php
require_once "dbConnection.php";

$ID = $_POST["prdctID"];
$amount = $_POST["amount"];
$amount = $amount / 1000;
$status = $_POST["status"];
$KDV = 1.18;


$sorgu = $conn->query("select *  from aktar where ID = $ID", PDO::FETCH_ASSOC);
foreach ($sorgu as $veri) {
    $ID1 =  $veri['ID'];
    $prdctName =  $veri['prdctName'];
    $unitPrice = $veri['unitPrice'];
    $valueLoss = $veri['valueLoss'];
    $vLoss = (100 - $valueLoss) / 100; //turned from 10% -> 0.9 / 25% -> 0.75
}
function tazelikEtkisi($status, $amount, $price, $KDV, $vLoss, $ID)
{
    if ($status == TRUE) {
        $lastPrice = $amount * $price * $KDV;
        $basePrice = $amount * $price * $KDV;
        $kdvFree = $amount * $price;
        $KDV1 = $lastPrice - $kdvFree;
        $lastFactor = $kdvFree / $amount;
        $freshStat = "Taze.";
    } else if ($status == FALSE) {
        $lastPrice = $amount * $price * $vLoss * $KDV;
        $basePrice = $amount * $price * $KDV;
        $kdvFree = $amount * $price * $vLoss;
        $KDV1 = $lastPrice - $kdvFree;
        $lastFactor = ($kdvFree * $vLoss) / $amount;
        $freshStat = "Taze değil.";
    }
    $baseKDVFree = $amount * $price;
   
    $tazelikEtkisi = $baseKDVFree-($baseKDVFree * $vLoss);
    
    if ($KDV1 < 0) {
        $KDV1 = $KDV1 * -1;
    }
    $GLOBALS["basePrice"] = $basePrice;
    $GLOBALS['lastPrice'] = $lastPrice;
    $GLOBALS['tazelikEtkisi'] = $tazelikEtkisi;
    $GLOBALS['ID'] = $ID;
    $GLOBALS['KDV1'] = $KDV1;
    $GLOBALS['lastFactor'] = $lastFactor;
    $GLOBALS['kdvFree'] = $kdvFree;
    $GLOBALS["baseKDVFree"] = $baseKDVFree;
    $GLOBALS['freshStat'] = $freshStat;
}

function decimal($number)
{
    $number = number_format($number, 0, ',', '');
    echo $number;
}
tazelikEtkisi($status, $amount, $unitPrice, $KDV, $vLoss, $ID1);
if($status == 1){
    $tazelikEtkisi = 0;
}
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
<table border='2' style="border-collapse: collapse;" width='250px'>
<tr>
        <td>Tür: <?php echo $prdctName; ?></td>
    </tr>
    <tr>
        <td>Fiyat(kg): <?php echo $unitPrice; ?>₺</td>
    </tr>
    <tr>
        <td><?php echo "-$prdctName- miktar: $amount kg"; ?></td>
    </tr>
    <tr>
        <td>Taze mi?(1=taze): <?php echo $status; ?></td>
    </tr>
    <tr>
        <td>İşlem tutar: <?php decimal($baseKDVFree); ?>₺</td>
    </tr>
    <tr>
        <td>Tazelik Etkisi: -<?php decimal($tazelikEtkisi); ?>₺</td>
    </tr>
    <tr>
        <td>Tutar: <?php decimal($kdvFree); ?>₺</td>
    </tr>
    <tr>
        <td>* * * * * * * * * * * * * * * * * * * * * </td>
    </tr>
    <tr>
        <td>Fatura: </td>
    </tr>
    <tr>
        <td> ------------------------------- </td>
    </tr>
    <tr>
        <td> OT A.Ş. </td>
    </tr>
    <tr>
        <td> <?php echo "* $prdctName: $amount x";
                decimal($lastFactor);
                echo "= ";
                decimal($kdvFree);
                echo "₺"; ?> </td>
    </tr>
    <tr>
        <td> <?php echo $freshStat; ?> </td>
    </tr>
    <tr>
        <td> KDV (%18): <?php decimal($KDV1); ?>₺ </td>
    </tr>
    <tr>
        <td> Genel Toplam: <?php decimal($lastPrice); ?>₺ </td>
    </tr>
</table>
<a href="index.php"> Go back </a>