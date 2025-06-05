<?php

//Loguear

if (isset($_POST[btnIniciarSesion])) {

    $nombreUsuario = $_POST['txtNombreUsuario'];
    $contrasena = $_POST['txtContrasena'];
    echo "Se presionó el botón de iniciar sesión";

    $respuesta=true;
    if ($respuesta) {
        header("location: ../../Views/Home/principal.php");
    }
    else {
        $_POST["txtmensaje"]= "Error al iniciar sesión";
    }
}

//Registrar

//Recuperar Acceso


?>