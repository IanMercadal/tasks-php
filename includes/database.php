<?php

$db = mysqli_connect('localhost','root','root','tasks');

if(!$db) {
    echo "Error: No se ha podido conectar";
    echo "Error: No se ha podido conectar" . mysqli_connect_errno();
    echo "Error: No se ha podido conectar" . mysqli_connect_error();
    exit;
}

?>