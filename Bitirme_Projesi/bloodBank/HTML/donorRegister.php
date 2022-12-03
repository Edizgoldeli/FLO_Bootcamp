<?php include(__DIR__ . "/top.php");
session_start();
$direct = new Url;
echo $_SESSION['ID'];
if ($_SESSION['ID']) {
} else {
    $direct->redirect("HTML", "login");
}
?>
<br><br><br><br>
<h2>Donör Kayıt</h1><br><br>

    <form action="<?php $direct->directory("PHP","donorRegister"); ?>" method="post">
        <input type="text" class="name" name="name" placeholder="İsim" required>
        <input type="text" class="surname" name="surname" placeholder="Soyad" required>
        <input type="date" class="birth" name="birth" placeholder="Doğum günü" required>
        <input type="email" class="email" name="email" placeholder="E-mail" required>
        <input type="phone" class="tel" name="tel" placeholder="Telefon" minlength="10" maxlength="12" required>
        <select name="bType" class="bType" required>
            <option class="searchBar" value="00 Rh-" ;> <?php echo "00 Rh-"; ?></option>
            <option class="searchBar" value="00 Rh+" ;> <?php echo "00 Rh+"; ?></option>
            <option class="searchBar" value="A0 Rh-" ;> <?php echo "A0 Rh-"; ?></option>
            <option class="searchBar" value="A0 Rh+" ;> <?php echo "A0 Rh+"; ?></option>
            <option class="searchBar" value="AA Rh-" ;> <?php echo "AA Rh-"; ?></option>
            <option class="searchBar" value="AA Rh+" ;> <?php echo "AA Rh+"; ?></option>
            <option class="searchBar" value="B0 Rh-" ;> <?php echo "B0 Rh-"; ?></option>
            <option class="searchBar" value="B0 Rh+" ;> <?php echo "B0 Rh+"; ?></option>
            <option class="searchBar" value="BB Rh-" ;> <?php echo "BB Rh-"; ?></option>
            <option class="searchBar" value="BB Rh+" ;> <?php echo "BB Rh+"; ?></option>
            <option class="searchBar" value="AB Rh-" ;> <?php echo "AB Rh-"; ?></option>
            <option class="searchBar" value="AB Rh+" ;> <?php echo "AB Rh+"; ?></option>
        </select>
        <input type="number" class="donation" name="donation" placeholder="Bağışlanan Miktar/mL" required>
        <input type="password" class="password" name="password" placeholder="parola belirleyin" required>
        <select name="gender" class="gender" required>
            <option class="searchBar" value="Erkek" ;> <?php echo "Erkek"; ?></option>
            <option class="searchBar" value="Kadın" ;> <?php echo "Kadın"; ?></option>
        </select>
        <input type="submit" class="search" name="submit" value="Kaydet">
    </form>

    <?php include(__DIR__ . "/bottom.php"); ?>
