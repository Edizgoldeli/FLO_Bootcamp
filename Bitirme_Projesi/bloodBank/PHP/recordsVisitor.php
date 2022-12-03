<?php include_once "top.php";
include_once "dbConnection.php";
$text = new Text;
?>
<meta charset="utf-8">
<br><br><br><br><br><br>
<h2>Kan donörü arama sonuçları</h2>

<div class="box3">
    <table>
        <tr class="bold">
            <th>Sıra</th> <!-- set headings-->
            <th class="cntr">Adı Soyadı</th>
            <th class="cntr">Kan Tipi</th>
            <th class="cntr">Cinsiyet</th>
            <th class="cntr">Miktar (mL)</th>
        </tr>
        <?php
        $url = new Url;

        if ($_POST['bloodType'] == NULL) {
            $url->redirect("", "index");
        }

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
                <td class="cntr"><?php echo mb_substr($name, 0, 1) . "**** " . mb_substr($surname, 0, 1) . "****"; ?></td>
                <td class="cntr"><?php echo $bType; ?></td>
                <td class="cntr"><?php echo $gender; ?></td>
                <td class="cntr" id="td"><?php echo $given; ?></td>
            </tr>
        <?php
        }
        if ($count == 0) {
        ?>
            <tr>
                <td colspan="5" id="td"> Sistemimizde <?php echo "$bloodType"; ?> bulunmamaktadır.</td>
            </tr>
        <?php
        }
        $totalDonationLitre = array_sum($totalDonation) / 1000;
        ?>
    </table>
</div>
<div class="box2">Toplam kan bağışı <?php echo $text->decimal($totalDonationLitre); ?> Litre</div>
