<?php
    require_once("../kardex/view/head/head.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
    <h1 class="text-center mt-4">Bienvenido <?= $_SESSION['usuario']?></h1>
<?php
    require_once("../kardex/view/head/footer.php");
?>