<?php

function comprobarUsuario($correo, $password) {
    $errores = [];
    require "./conexion.php";
    $query = "select * from empleados where correo = '$correo'";
    $resultado = mysqli_query($db,$query);
    $user = $resultado->fetch_assoc();

    if($user === null) {
        $user_validado = "Error con el usuario";
        $errores["user"] =  $user_validado;
        $_SESSION["errores"] = $errores;
        return;
    } 
    
    if($user["correo"] !== $correo) {
        $correo_validado = "Error con el correo";
        $errores["correo"] =  $correo_validado;
        $_SESSION["correo"] = $errores;
    } else {
        $correo_validado = true;
    }

    if($user["password"] !== $password) {
        $password_validada = "Error con la contraseña";
        $errores["password"] =  $password_validada;
        $_SESSION["password"] = $errores;
    } else {
        $password_validada = true;
    }

    $_SESSION["errores"] = $errores;

    if(count($errores) === 0) {
        header("Location: /");
    } else {
        return;
    }

}


?>