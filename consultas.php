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

function mostrarTasks() {
    require "./conexion.php";
    $query = "select * from tareas";
    $resultado = mysqli_query($db,$query);
    // $tarea = '<div class="task">';
    $tarea = "";
    while ($row = $resultado->fetch_assoc()) {
        // var_dump($row);
        $tarea .= '<div class="task">
        <div class="task-header">
                <h4 class="task-name-list">'.$row["nombre"].'</h4>
                <div class="task-state '. str_replace(' ', '-', $row["estado"]).'">
                    <p>'.$row["estado"].'</p>
                </div>
                <p class="task-date-list">'.$row["fecha_inicio"].'</p>
            </div>
            <div class="task-employees">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <p class="task-description-list">'.$row["descripcion"].'</p>
        </div>';
    }
    return $tarea;
}


?>