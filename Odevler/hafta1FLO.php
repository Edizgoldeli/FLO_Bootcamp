<?php
/*
-ÖDEV-
Bir dizi değişken içerisinde tanımlanan Ağıl Sayısı, Ağıl Kapasitesi ve Toplam Koyun sayılarına göre; 
tüm koyunları ağıl kapasitelerini aşmayacak şekilde ve verilen sayıdaki ağıla sondan başa doğru yerleştir. 
Sonuçların ölçülebilmesi amacıyla, her ağıldaki toplam koyun sayısını ve varsa artan koyun sayısını hesaplayarak ekrana yazdır. 
Eğer boş kalan ağıllar varsa 0 (sıfır) değerle ekrana yazdır.
*/

$barnCount = 5;
$totalCapacity = 150;
$sheepCount = 161;
$capacity = $totalCapacity / $barnCount;
$x = array();
$y = array();
echo "Single Barn capacity: $capacity <br> Total Capacity: $totalCapacity <br> Sheep Count: $sheepCount <br><br>";
for ($i = $barnCount; $i > 0; $i--) {

    array_push($x, "Barn$i");
    array_push($y, "$capacity");
    
}
$barnCountRemain = $barnCount;
foreach ($y as $space) {
    
    if ($sheepCount >= $space) {
        $sheepCount = $sheepCount - $capacity;
        $space = $capacity-$space;
    } else if ($sheepCount < $space) {
$space = $space - $sheepCount;

    }

   // $totalCapacity = $totalCapacity - $sheepCount;
$remaininCapacity = $capacity-$space;

    echo "Barn $barnCountRemain remains: " . $remaininCapacity . "<br>";
    $barnCountRemain = $barnCountRemain-1;
}
if($space==0){ echo "<br>Sheeps remain leftout: " . ($sheepCount) . "<br>";}
   

