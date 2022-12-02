<?php include(__DIR__ . "/top.php");
$direct = new Url;
session_start();
if ($_SESSION['ID']) {
    $direct->redirect("HTML", "records");
} else {
}
?>
<a href="<?php $direct->directory("","index"); ?>"><img src="/bloodBank/images/return.png" alt="Geri dön" style="width:50px;height:50px; float: left;"></a>
<div class="box1">

    <form action="<?php $direct->directory("PHP","login"); ?>" method="POST">
        <input type="text" class="input1" name="username" placeholder="Username" required>
        <input type="password" class="input2" name="password" placeholder="Password" required>
        <input type="submit" class="submit" value="Giriş Yap">
    </form>
    <center>
        <h1>Kan Bankası</h1>
    </center>
</div>