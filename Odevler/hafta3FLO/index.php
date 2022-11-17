<?php include "top.php";?>
<center>
        <form method="post" action="register.php">
            <!-- Created form that sends information to register.php-->
            Adı Soyadı:<br>
            <input type="text" name="name0" required>
            <br><br>
            Telefon Numarası:<br>
            <input type="tel" name="phone0" minlength="10" maxlength="10" required>
            <br><br>
            <input type="submit" class="submit" value="Kaydet">
        </form>
        <br>



        
        
    </center>
      
</body>

</html>