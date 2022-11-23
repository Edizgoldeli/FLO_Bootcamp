<?php
require_once "dbConnection.php";
?>
 <table border='1' style="border-collapse: collapse;" width='95%'>
                
                <tr>
                    <td><b>Ot</b></td>
                    <td class="cntr"><b>Kodu</b></td>
                    <td class="cntr"><b>Tazelik Kaybının Fiyat Etkisi</b></td>
                </tr>
<?php
$sorgu = $conn->query("select * from aktar", PDO::FETCH_ASSOC);
foreach ($sorgu as $veri) {
    $count++; //set counter to count number of the records
    $ID =  $veri['ID'];
    $prdctName =  $veri['prdctName'];
    $status = $veri['status'];
    $unitPrice = $veri['unitPrice'];
    $valueLoss = $veri['valueLoss'];
    
    ?>
    <tr>
                        <td><?php echo $prdctName; ?></td>
                        <td class="cntr"><?php echo $ID; ?></td>
                        <td class="cntr">-<?php echo $valueLoss; ?>%</td>
                    </tr>
                    <br>
    <?php
}
?>
 </table>