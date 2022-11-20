<DOCTYPE HTML!>
<html>
<body>
 <center>
        <br>
        <table border='1' width='95%'>
            <!-- tablo oluşturup genişliği sayfanın %95'i olacak şekilde ayarladık -->
            <tr>
                <td><b>Ürün Adı</b></td> <!-- tablo başlıklarını ayarladık -->
                <td class="cntr"><b>Ürün Fiyatı</b></td>
                <td class="cntr"><b>Adet</b></td>
            </tr>
            <tr>
                <form method="post" action="sepetKontrol.php">
                    <!-- form işlemini post metoduyla sepetKontrol.php'ye yollayacağımızı belirledik -->
                    <td><?php echo $urunler[0][0]; ?></td>
                    <td class="cntr"><?php echo $urunler[0][1]; ?></td>
                    <td class="cntr"><input type="number" name="adet1" min="0" max="50" placeholder="0"></td> <!-- ürün adedi eklenebilmesi için number türünde girdi alanı ekledik ve min max ile aralığı daraltıp kabul edilmeyen girdilerin engellenmesini sağladık ( php tarafında bir kontrol daha var mininimum için ) -->
            </tr>
            <tr>
                <td><?php echo $urunler[1][0]; ?></td>
                <td class="cntr"><?php echo $urunler[1][1]; ?></td>
                <td class="cntr"><input type="number" name="adet2" min="0" max="50" placeholder="0"></td>
            </tr>
            <tr>
                <td><?php echo $urunler[2][0]; ?></td>
                <td class="cntr"><?php echo $urunler[2][1]; ?></td>
                <td class="cntr"><input type="number" name="adet3" min="0" max="50" placeholder="0"></td>
            </tr>

        </table>

        <input type="submit" class="submit" value="Ürünü sepete ekle">
        </form>
        </center>
</body>
</html>