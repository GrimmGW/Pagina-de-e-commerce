<?php

    session_start();
    if( !empty($_POST['btn_iniciar_sesion']) ){
        if( !empty($_POST['username']) and !empty($_POST['password']) ){

            $user = $_POST['username'];
            $pass = $_POST['password'];

            $sql = $conn->query(" select * from usuarios where user = '$user' and password = '$pass' ");
            if($datos = $sql->fetch_object()){
                $_SESSION['id'] = $datos->id;
                $_SESSION['user'] = $datos->user;
                $_SESSION['admin'] = $datos->admin;
                header("location: index.php");
            } else {
                echo "<div class='alert alert-danger' >Este usuario no existe</div>";
            }

        } else {
            echo "<div class='alert alert-warning' >Hay casillas vacias</div>";
        }
    }

?>