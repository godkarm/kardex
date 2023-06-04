<?php
    require_once("../head/head.php");
?>  

<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
            <i class="fa-solid fa-shield-dog"></i>
        </a>
    </div>
    <div class="titulo">
            <h1>Iniciar Sesión</h1>
        </div>
        <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                        <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                    </button>
                </div>
                <input type="password" name="contraseña" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    <div class="login col-3">
        Nuevo en Sistema? <a href="singup.php" style="text-decoration: none;">Create una cuenta</a>
    </div>
</div>



<?php
    require_once("../head/footer.php");
?>