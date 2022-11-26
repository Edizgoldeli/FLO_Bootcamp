<?php
require_once "dbConnection.php";
?>
<table border='1' style="border-collapse: collapse; margin-left: auto; margin-right: auto;" width='350px'>

    <tr>
        <td><b>Cevher</b></td>
        <td class="cntr"><b>Kodu</b></td>
        <td class="cntr"><b>Fiyat</b></td>
    </tr>
    <?php
    $sorgu = $conn->query("select * from maden", PDO::FETCH_ASSOC);
    foreach ($sorgu as $veri) {
        $count++; //set counter to count number of the records
        $ID =  $veri['ID'];
        $code =  $veri['code'];
        $ore = $veri['ore'];
        $price = $veri['price'];

    ?>
        <tr>
            <td><?php echo $ore; ?></td>
            <td class="cntr"><?php echo $code; ?></td>
            <td class="cntr"><?php echo $price; ?>₺</td>
        </tr>
        <br>
    <?php
    }
    ?>
</table>