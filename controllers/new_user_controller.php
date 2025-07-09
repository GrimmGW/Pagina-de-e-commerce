<?php

    if( !empty($_POST['btn_registrar_usuario']) ){

        if( $_POST['new_password'] == $_POST['new_repeat_password'] ){

            $user = $_POST['new_username'];
            $email = $_POST['new_email'];
            $password = $_POST['new_password'];

            $sql = $conn->query("insert into usuarios (user, mail, password, admin) values('$user', '$email', '$password', 0) ");
            if($sql == true){
                header("location ../login.php");
            } else {
                echo "<div class='alert alert-danger' >Error al crear tu usuario.</div>";
            }

        } else {
            echo "<div class='alert alert-warning' >Las contraseñas no son iguales.</div>";
        } 

    }

?>