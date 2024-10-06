<?php
/* include('config.php');

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$connection) {
    die("Error en la conexión: " . mysqli_connect_error());
}

echo "Conexión exitosa a la base de datos."; */

require_once 'config.php';

function connect() {
    $conx = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $conx -> set_charset("utf8");
    if($conx->connect_error) {
        return false;
    }
    return $conx;
}

?>