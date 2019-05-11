<?php
include_once '../ytColores/conexion.php';

echo password_hash("carum98", PASSWORD_DEFAULT)."\n";

$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasenatwo = $_POST['contrasenatwo'];

$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

var_dump($resultado);

if ($resultado) {
    echo "El usuario ya existe";
    die();
}

$contrasena = password_hash("$contrasena", PASSWORD_DEFAULT);

echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasenatwo);
echo '</pre>';

if (password_verify($contrasenatwo, $contrasena)) {
    echo '¡La contraseña es válida!';

    $sql_agregar = 'INSERT INTO usuarios (nombre,contrasena) VALUES (?,?)';
    $sentencia_agrear = $pdo->prepare($sql_agregar);

    if ( $sentencia_agrear->execute(array($usuario_nuevo,$contrasena)) ) {
        echo 'Agregado <br>';
    }else{
        echo 'Error <br>';
    }
    


} else {
    echo 'La contraseña no es válida.';
}