<?php include(__DIR__ . "/HTML/top.php");
$url = new Url;
?>

<div class="box1">
    <form action="<?php $url->directory("HTML","recordsVisitor"); ?>" method="post">

        <h2>Kan tipinizi seçiniz</h2>
        <select name="bloodType" class="searchBar">
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
        <input type="submit" class="submit" name="submit" value="Ara">
    </form>
</div>
<?php include(__DIR__ . "/HTML/bottom.php"); ?>