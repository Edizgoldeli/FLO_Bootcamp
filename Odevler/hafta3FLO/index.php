<?php
include "dbconnection.php";
$count = 0;

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"> <!-- set character type -->
    <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- scaling for mobile devices -->
    <link rel=stylesheet href="style.css" /> <!-- style.css added -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'> <!-- Quicksand font has added -->
    <title> Odev 3 </title> <!-- title has set -->
</head>

<body>
    <center>
        <form method="post" action="register.php"> <!-- Created form that sends information to register.php-->
            Adı Soyadı:<br>
            <input type="text" name="name0" required>
            <br><br>
            Telefon Numarası:<br>
            <input type="tel" name="phone0" minlength="10" maxlength="10" required>
            <br><br>
            <input type="submit" class="submit" value="Kaydet">
        </form>
        <br>
        <table border='1' width='95%'>
            <!-- table width set as 95% of the pages width -->
            <tr class="bold">
                <td>Adı Soyadı</td> <!-- set headings-->
                <td class="cntr">Telefon Numarası</td>
                <td class="cntr">İşlem</td>
            </tr>
            <?php include_once "records.php"; // added records that we made?> 
    </center>
</body>

</html>