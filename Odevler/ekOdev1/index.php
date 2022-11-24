<?php
require_once "dbConnection.php";
include "productList.php";
?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <table border='1' style="border-collapse: collapse; " width='95%'>


        <?php
        $product[] = array();
        $ID1[] = array();
        $sorgu = $conn->query("select * from aktar", PDO::FETCH_ASSOC);
        foreach ($sorgu as $veri) {
            $count++; //set counter to count number of the records
            $ID =  $veri['ID'];
            $prdctName =  $veri['prdctName'];
            $status = $veri['status'];
            $unitPrice = $veri['unitPrice'];
            $valueLoss = $veri['valueLoss'];

            $product[] = $prdctName;
            $ID1[] = $ID;
        ?>

            <br>
        <?php
        }
        ?>

        <tr>
            <center>

                <form method="POST" action="control.php">
                    <br>Product: <select name="prdctID">
                        <?php
                        for ($i = $ID; $i > 0; $i--) {
                        ?>
                            <option value="<?php echo $ID1[$i]; ?>"><?php echo $product[$i]; ?></option>
                        <?php
                        }
                        ?>
                    </select><br>&emsp;&emsp;&emsp;&emsp;&emsp;
                    Amount: <input type="number" name="amount">(in grams) <br>
                    Is it fresh?: <select name="status">
                        <option value="1"> Fresh </option>
                        <option value="0"> Not Fresh </option>
                    </select> <br>

                    <input type="submit" class="submit" value="Create bill">
            </center>
        </tr>

        <?php include_once "control.php"; ?>

</body>

</html>