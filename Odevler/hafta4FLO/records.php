<?php include "top.php"; ?>

<head>
    <link rel=stylesheet href="style.css" />
</head>
<center>
    <table border='1' width='95%'>
        <!-- table width set as 95% of the pages width -->
        <tr class="bold">
            <td>ID</td> <!-- set headings-->
            <td class="cntr">Adı Soyadı</td>
            <td class="cntr">Durum</td>
            <td class="cntr">Tc Kimlik</td>
            <td class="cntr">İşlem</td>
        </tr>
        <?php
       
        $sorgu = $conn->query("select * from haftaDort", PDO::FETCH_ASSOC);
        foreach ($sorgu as $veri) {
            $count++; //set counter to count number of the records
            $ID =  $veri['ID'];
            $name = $veri['name'];
            $tc = $veri['tc'];
            $status = $veri['status'];

        ?>
            <tr>
                <td><?php echo $ID; ?></td> <!-- declared values of the table -->
                <td class="cntr"><?php echo $name; ?></td>
                <td class="cntr"><?php echo $tc; ?></td>
                <td class="cntr"><?php echo $status; ?></td>
                <form method="post" action="delete.php">
                    <!--  created form that sends values to delete.php-->
                    <input type="hidden" name="ID" value="<?php echo $ID ?>"> <!-- declared the ID of the record which will deleted -->
                    <td class="cntr"><input type="submit" class="delete" value="Sil"></td>
                </form>
            </tr>


        <?php
        }
        ?>
        <tr>
            <td colspan="5" class="cntr">Sistemde toplam -<?php echo $count; ?>- kişi var</td>
        </tr>
    </table>
</center>
</body>

</html>