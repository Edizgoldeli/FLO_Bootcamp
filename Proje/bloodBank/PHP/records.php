<?php include_once "top.php";
include_once "dbConnection.php";
session_start();
$direct = new Url;
$text = new Text;
$csv = new Csv;
echo $_SESSION['ID'];
if ($_SESSION['ID']) {
} else {
    $direct->redirect("HTML", "login");
}
$search = $_POST['search'];

$searchType = $_POST['searchType'];
$bType = $_POST['bType'];

if ($search == NULL) {
} else {
    $search = "= '" . $search . "'";
}

if ($searchType == "all") {
    $status = 1;
    $searchKey = "";
} else if ($searchType == "ID") {
    $status = 0;
    $searchKey = "where ID $search";
} else if ($searchType == "phone") {
    $status = 0;
    $searchKey = "where phone $search";
} else if ($searchType == "bType") {
    $status = 0;
    $searchKey = "where bType $search";
}
?>

<br><br>
<form action="" method="POST">
    <input type="text" class="recordsSearch" name="search" placeholder="Anahtar girdi">
    <select name="searchType" class="recordsSearchType">
        <option class="searchBar" value="ID" ;> <?php echo "Sıra No"; ?></option>
        <option class="searchBar" value="phone" ;> <?php echo "Telefon Numarası"; ?></option>
        <option class="searchBar" value="bType" ;> <?php echo "Kan Tipi"; ?></option>
        <option class="searchBar" value="all" ;> <?php echo "Tüm Kayıtlar"; ?></option>
    </select>
    <input type="submit" class="submit1" value="Ara">
</form>

<div class="box3">
    <table>
        <tr class="bold" id="tableHead">
            <th>Sıra No</th> <!-- set headings-->
            <th>Adı Soyadı</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Kan Tipi</th>
            <th>Cinsiyet</th>
            <th>Miktar (mL)</th>
        </tr>
        <?php
        $bloodType = $_POST['bloodType'];
        $totalDonation = array();
        $csvFileContent = array();
        $csvFileContent[] = "ID; İsim; Soyad; Telefon; Email; Kan Tipi; Cinsiyet; Miktar(mL); \n";

        $sorgu = $conn->query("select * from donor $searchKey", PDO::FETCH_ASSOC);
        foreach ($sorgu as $veri) {
            $count++; //set counter to count number of the records
            $ID = $veri['ID'];
            $name = $veri['name'];
            $surname = $veri['surname'];
            $bType = $veri['bType'];
            $given = $veri['given'];
            $gender = $veri['gender'];
            $email = $veri['email'];
            $phone = $veri['phone'];
            $totalDonation[] = $given;
            $csvFileContent[] = $ID . "; " . $name . "; " . $surname . "; " . $phone . "; " . $email . "; " . $bType . "; " . $gender . "; " . $given . ";\n";
        ?>
            <tr>
                <td><?php echo $ID; ?></td> <!-- declared values of the table -->
                <td><?php echo $name . " " . $surname; ?></td>
                <td><?php echo $phone; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $bType; ?></td>
                <td><?php echo $gender; ?></td>
                <td id="td"><?php echo $given; ?></td>
            </tr>
        <?php
        }

        if ($totalDonation != NULL) {
            $totalDonationLitre = array_sum($totalDonation) / 1000;
        }
        $csv->saveFile($csvFileContent)
        ?>
    </table>
</div>
<div class="box2">Toplam <?php echo $text->decimal($totalDonationLitre); ?> Litre kan bağışı listelenmektedir</div>
<form method="POST">
    <input type="button" class="submit2" name="csv" value="CSV İndir">
</form>