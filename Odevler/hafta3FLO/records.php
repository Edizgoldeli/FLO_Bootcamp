<?php include "top.php";?>
<head>
<link rel=stylesheet href="style.css" /> 
</head>
<center>
<table border='1' width='95%'>
            <!-- table width set as 95% of the pages width -->
            <tr class="bold">
                <td>Adı Soyadı</td> <!-- set headings-->
                <td class="cntr">Telefon Numarası</td>
                <td class="cntr">İşlem</td>
            </tr>
<?php
include "dbconnection.php"; //included database connection to make this page work independently
            $sorgu = $conn->query("select * from user", PDO::FETCH_ASSOC);
            foreach ($sorgu as $veri) {
                $count++; //set counter to count number of the records
                $ID =  $veri['ID']; 
                $name = $veri['name'];
                $phone = $veri['phone'];
                $timeSTMP = $veri['timeSTMP'];

            ?>
                <tr>
                    <td><?php echo $name; ?></td> <!-- declared values of the table -->
                    <td class="cntr"><?php echo $phone; ?></td>
                    <form method="post" action="delete.php"> <!--  created form that sends values to delete.php-->
                        <input type="hidden" name="ID" value="<?php echo $ID?>"> <!-- declared the ID of the record which will deleted -->
                    <td class="cntr"><input type="submit" class="delete" value="Sil"></td>
                    </form>
                </tr>
                

            <?php
            }
            ?>
            <tr>
                <td colspan="3" class="cntr">Sistemde toplam -<?php echo $count;?>- kişi var</td>
            </tr>
            </table>
        </center>
</body>

</html>