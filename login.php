<?php

    
    if(isset($_SESSION["id"])){
        header("location: index.php");
    } 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Iniciar sesion en MEGATRONIC</title>
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="d-flex vh-100 justify-content-center align-items-center">
            <div class="bg-dark border border-secondary rounded col-4 px-5 py-3">
                <div class="text-center text-white">
                    <h2 class="text-warning">MEGA<span class="text-white">TRONIC</span></h2>
                    <p>- Inicio de sesion -</p>
                    <?php
                        include "model/conn.php";
                        include "controllers/login_controller.php";
                        include "controllers/new_user_controller.php";

                    ?>
                </div>
                <div class="text-white">
                    <form method="POST">
                        <label for="labelUsername" class="form-label">Ingresa tu Usuario</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control bg-dark text-white" name="username" required>
                        </div>
                        <label for="labelPassword" class="form-label">Ingresa tu contraseña</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                            <input type="password" class="form-control bg-dark text-white" name="password" required>
                        </div>
                        <a class="text-primary" data-bs-toggle="modal" data-bs-target="#modal_registro" >¿No tienes cuenta? Regístrate aquí</a>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary px-5" name="btn_iniciar_sesion" value="iniciar_sesion" >Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de registro -->
     <div class="modal fade" id="modal_registro">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title">Registro</h5>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <label for="labelNewUsername" class="form-label">Ingresa tu usuario</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                            <input type="text" class="form-control bg-dark text-white" name="new_username" required>
                        </div>
                        <label for="labelNewEmail" class="form-label">Ingresa tu email</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control bg-dark text-white" name="new_email" required>
                        </div>
                        <label for="labelNewPassword" class="form-label">Ingresa tu contraseña</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                            <input type="password" class="form-control bg-dark text-white" name="new_password" required>
                        </div>
                        <label for="labelNewRepeatPassword" class="form-label">Repite tu contraseña</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                            <input type="password" class="form-control bg-dark text-white" name="new_repeat_password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning px-5" name="btn_registrar_usuario" value="registro_usuario">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>

</html>