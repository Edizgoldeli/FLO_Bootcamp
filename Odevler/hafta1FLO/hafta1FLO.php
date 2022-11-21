<style>
    * {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }

    .button {
        background-color: #4d73be;
        color: white;
        border: none;
        height: 33px;
        width: 100px;
        border-radius: 3px;
        font-weight: bold;
    }
</style>
<?php
/*
-ÖDEV-
Bir dizi değişken içerisinde tanımlanan Ağıl Sayısı, Ağıl Kapasitesi ve Toplam Koyun sayılarına göre; 
tüm koyunları ağıl kapasitelerini aşmayacak şekilde ve verilen sayıdaki ağıla sondan başa doğru yerleştir. 
Sonuçların ölçülebilmesi amacıyla, her ağıldaki toplam koyun sayısını ve varsa artan koyun sayısını hesaplayarak ekrana yazdır. 
Eğer boş kalan ağıllar varsa 0 (sıfır) değerle ekrana yazdır.
*/

$barnCount = 5;
$sheepCount = 70;
if ($_POST["sheep"] != 0) {
   $sheepCount = $_POST["sheep"];
}
$capacity = 25; //capacity of each barn
$totalCapacity = $capacity * $barnCount;
?>
<form method="POST">
    <input type="hidden" value="53" name="sheep">
    <input type="submit" class="button" value="53 Sheep">
</form>
<form method="POST">
    <input type="hidden" value="172" name="sheep">
    <input type="submit" class="button" value="172 Sheep">
</form>

<table border='1' style="border-collapse: collapse;" width='250px' height='250px'>
    <td align="center">
        <?php
        $y = array(); //created array to store capacities

        echo "Single Barn capacity: $capacity <br> Total Capacity: $totalCapacity <br> Sheep Count: $sheepCount <br><br>"; // values of variables
        for ($i = $barnCount; $i > 0; $i--) {
            array_push($y, "$capacity"); // declared capacity of each barn with order
        }
        $barnCountRemain = $barnCount; // declared this variable to display name of the barns
        foreach ($y as $space) //used foreach to work on all declared spaces with order
        {

            if ($sheepCount >= $space) //if we have space lower than sheeps this will work
            {
                $sheepCount = $sheepCount - $capacity; //reduced the filled amount of the sheeps from total
                $space = $capacity - $space; //redeclared the space after we filled with sheeps
            } else if ($sheepCount < $space) // this will work if we have more space than sheeps
            {
                $space = $space - $sheepCount; // since we have more space we will avoid getting negative result
                $sheepCount = 0; // We declare sheepCount to 0 so we won't get last barns values on rest of the barns 
            }
            $remaininCapacity = $capacity - $space; // it showes filled space in each barn

            echo "Barn $barnCountRemain remains: " . $remaininCapacity . " sheeps<br>"; //displaying barn number and filled space
            $barnCountRemain = $barnCountRemain - 1; //reducing the variable by 1 to not show same name on each barn
        }
        if ($space == 0) //works if space equals to 0
        {
            echo "<br>Sheeps remain leftout: " . ($sheepCount) . "<br>"; //Shows the sheeps that leftout.
        } else if ($space > 0) {
        } //we avoid to give errors for true statements
        else {
            echo "ERROR!"; //user will get error if there is negative space
        }
        ?></td>
</table>