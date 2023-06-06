<?php
    require_once("/var/www/html/kardex/view/head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
    <h1 class="text-center mt-4">Bienvenido <?= $_SESSION['usuario']?></h1>
<?php
    require_once("/var/www/html/kardex/view/head/footer.php");
?>