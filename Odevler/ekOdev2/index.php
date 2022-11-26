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
        $sorgu = $conn->query("select * from maden", PDO::FETCH_ASSOC);
        foreach ($sorgu as $veri) {
            $count++; //set counter to count number of the records
            $ID =  $veri['ID'];
            $code =  $veri['code'];
            $ore = $veri['ore'];
            $price = $veri['price'];

            $product[] = $code;
            $ID1[] = $ID;
        ?>

            <br>
        <?php
        }
        ?>

        <tr>
            <center>

                <form method="POST" action="control.php">
                Name: <input type="text" name="name"> <br>
                    <br>Product: <select name="prdctID">
                        <?php
                        for ($i = $ID; $i > 0; $i--) {
                        ?>
                            <option value="<?php echo $ID1[$i]; ?>"><?php echo $product[$i]; ?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                    Size: <select name="size">
                        <option value="1"> Erik </option>
                        <option value="2"> Portakal </option>
                        <option value="3"> Karpuz </option>
                    </select> <br>
                    Clearity Percentage:<input type="number" name="percent">% <br>
                    &emsp;&emsp;&emsp;&emsp;&emsp;
                    Amount: <input type="number" name="amount">(in Tons) <br>
                    
                    
                    <input type="submit" class="submit" value="Create bill">
            </center>
        </tr>

       

</body>

</html>