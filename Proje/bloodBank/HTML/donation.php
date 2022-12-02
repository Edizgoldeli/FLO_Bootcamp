<?php include_once "top.php"; 
session_start();
$direct = new Url;
echo $_SESSION['ID'];
if ($_SESSION['ID']) {
} else {
    $direct->redirect("HTML", "login");
}
?>
<form action="" method="POST">
<input type="text" class="searchDonor" name="username" placeholder="ID, mail, telefon">
<input type="submit" class="searchDonorSubmit" value="Ara">
<form action="" method="POST">
<input type="submit" class="donateUpdate" value="Kaydı güncelle">
    </form>
<div class="box4">
<table>
    <tr class="bold">
        <th>Sıra</th> <!-- set headings-->
        <th class="cntr">Adı Soyadı</th>
        <th class="cntr">Kan Tipi</th>
        <th class="cntr">Cinsiyet</th>
        <th class="cntr">Miktar (mL)</th>
    </tr>
</table>
</div>

<form action="" method="POST">
        <input type="text" class="donationAmount" name="username" placeholder="bağış miktarı">
        <input type="text" class="donee" name="password" placeholder="Bağışlanacak kişi">
        <input type="submit" class="donateSubmit" value="Bağış Eşleştir">
    </form>

<?php include_once "bottom.php"; ?>