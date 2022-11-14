<?php
include "dbconnection.php";


?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"> <!-- karakter tipini belirledik -->
    <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- mobil cihazlar için ölçek ayarı yaptık -->
    <link rel=stylesheet href="style.css" /> <!-- style.css dosyasını ekledik -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'> <!-- Quicksand font'unun kaynağını ekledik -->
    <title> Odev 3 </title> <!-- başlığı belirledik -->
</head>

<body>
    <center>
        <form method="post" action="register.php">
            Adı Soyadı:<br>
            <input type="text" name="name0">
            <br><br>
            Telefon Numarası:<br>
            <input type="tel" name="phone0">
            <br><br>
            <input type="submit" class="submit" value="Kaydet">
        </form>
        <br>
        <table border='1' width='95%'>
            <!-- tablo oluşturup genişliği sayfanın %95'i olacak şekilde ayarladık -->
            <tr class="bold">
                <td>Adı Soyadı</td> <!-- tablo başlıklarını ayarladık -->
                <td class="cntr">Telefon Numarası</td>
                <td class="cntr">İşlem</td>
            </tr>
            <?php
            $sorgu = $conn->query("select * from user", PDO::FETCH_ASSOC);
            foreach ($sorgu as $veri) {
                $ID =  $veri['ID'];
                $name = $veri['name'];
                $phone = $veri['phone'];
                $timeSTMP = $veri['timeSTMP'];

            ?>
                <tr>
                    <td><?php echo $name; ?></td> <!-- tablo başlıklarını ayarladık -->
                    <td class="cntr"><?php echo $phone; ?></td>
                    <form method="post" action="delete.php">
                        <input type="hidden" name="ID" value="<?php echo $ID?>">
                    <td class="cntr"><input type="submit" class="delete" value="Sil"></td>
                    </form>
                </tr>

            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>