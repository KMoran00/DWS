<?php
include("usuarios.php");
if (!isset($_POST['usuarios'])){
    header(header: "location: login.html");
    exit;
}

$usuarios = $_POST['usuarios'];
$clave_ = $_POST['clave'];
$archivo = "accesos.txt";

//Comprobación
if (isset($usuarios($usuario)))


?>