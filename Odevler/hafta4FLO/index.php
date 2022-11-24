<?php include "top.php";?>
<center>
        <form method="post" action="register.php">
            <!-- Created form that sends information to register.php-->
            Ad Soyad:<br>
            <input type="text" name="name" required>
            <br><br>
            Tc Kimlik Numarası:<br>
            <input type="tel" name="tc" minlength="11" maxlength="11" required>
            <br><br>
            <input type="submit" class="submit" value="Doğrula ve Kaydet">
        </form>
        <br>

        <?php include "records.php";?>
        
        
    </center>
      
</body>

</html>