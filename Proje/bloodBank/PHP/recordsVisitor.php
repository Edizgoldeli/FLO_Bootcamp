<?php include_once "top.php"; 
include_once "dbConnection.php";
$text = new Text;
?>
<meta charset="utf-8">
<br><br><br><br><br><br><br>
<h2>Kan donörü arama sonuçları</h2>

<div class="box3">
<table>
    <tr class="bold">
        <th>Sıra</th> <!-- set headings-->
        <th>Adı Soyadı</th>
        <th>Kan Tipi</th>
        <th>Cinsiyet</th>
        <th>Miktar (mL)</th>
    </tr>
    <?php
    $bloodType = $_POST['bloodType'];
    $totalDonation = array();
    $sorgu = $conn->query("select * from donor where bType = '$bloodType' ", PDO::FETCH_ASSOC);
    foreach ($sorgu as $veri) {
        $count++; //set counter to count number of the records

        $name = $veri['name'];
        $surname = $veri['surname'];
        $bType = $veri['bType'];
        $given = $veri['given'];
        $gender = $veri['gender'];
        $totalDonation[] = $given;

    ?>
        <tr>
            <td><?php echo $count; ?></td> <!-- declared values of the table -->
            <td><?php echo mb_substr($name,0,1) . "**** " . mb_substr($surname,0,1)."****"; ?></td>
            <td><?php echo $bType; ?></td>
            <td><?php echo $gender; ?></td>
            <td id="td"><?php echo $given; ?></td>
        </tr>
    <?php
    }
    $totalDonationLitre = array_sum($totalDonation)/1000;
    ?>
    </table>
</div>
<div class="box2">Toplam kan bağışı <?php echo $text->decimal($totalDonationLitre); ?> Litre</div>


    
