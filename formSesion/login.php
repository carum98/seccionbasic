<?php
session_start();
include_once '../ytColores/conexion.php';

$nombre_usuario = $_POST['nombre_usuario'];
$clave_usuario = $_POST['contrasena_usuario'];

echo '<pre>';
var_dump ($nombre_usuario);
var_dump ($clave_usuario);
echo '</pre>';

$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($nombre_usuario));
$resultado = $sentencia->fetch();

echo '<pre>';
var_dump($resultado);
echo '</pre>';

if (!$resultado) {
    echo 'No existe usuario';
    die();
}

echo '<pre>';
var_dump($resultado['contrasena']);
echo '</pre>';

if ( password_verify($clave_usuario, $resultado['contrasena']) ) {
    $_SESSION['admin'] = $nombre_usuario;
    header('Location: restringido.php');
}else{
    echo 'Contraseña inconrecta';
    die();
}