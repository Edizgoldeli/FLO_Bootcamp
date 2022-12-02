<?php
session_start();
require_once("/Applications/MAMP/htdocs/bloodBank/PHP/classes.php");
$direct = new Url;

if ($_SESSION['ID']) {
?>

    <div class="top">

        <div class="container" onclick="myFunction(this);myFunction1(this);">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="menuContent">
                <a href="<?php $direct->directory("", "index"); ?>" title="Ana Sayfa">Ana Sayfa</a> <br><br>
            </div>
            <div class="menuContent"> 
                <a href="<?php $direct->directory("HTML", "donorRegister"); ?>" title="Login">Donör Kayıt</a> <br><br>
            </div>
            <div class="menuContent">
                <a href="<?php $direct->directory("HTML", "records"); ?>" title="Login">Kayıtlar</a> <br><br>
            </div>
            <div class="menuContent" id="menuContentBottom">
                <a href="<?php $direct->directory("PHP", "logout"); ?>" title="Login">Çıkış Yap</a> <br><br>
            </div>

        </div>
        <h1 class="headLine">Kan Bankası</h1>
    </div>


    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }

        function myFunction1(a) {
            a.classList.toggle("show");
        }
    </script>
    </body>

    </html>
<?php
} else {

?>

    <div class="top">

        <div class="container" onclick="myFunction(this);myFunction1(this);">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="menuContent">
                <a href="<?php $direct->directory("", "index"); ?>" title="Ana Sayfa">Ana Sayfa</a> <br><br>
            </div>
            <div class="menuContent" id="menuContentBottom">
                <a href="<?php $direct->directory("HTML", "login"); ?>" title="Giriş Yap">Giriş Yap</a> <br><br>
            </div>

        </div>
        <h1 class="headLine">Kan Bankası</h1>
    </div>


    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }

        function myFunction1(a) {
            a.classList.toggle("show");
        }
    </script>
    </body>

    </html>
<?php
}
?>