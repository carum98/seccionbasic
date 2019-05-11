<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Registro de usurios</h1>
    <form action="agregar_usuario.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Ingresa Usuario">
        <input type="text" name="contrasena" placeholder="Ingresa la contaseña">
        <input type="text" name="contrasenatwo" placeholder="Nuevamente la contraseña">
        <button type=submit>Ingresar</button>
    </form>


<h1>Login de usurios</h1>
    <form action="login.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Ingresa Usuario">
        <input type="text" name="contrasena_usuario" placeholder="Ingresa la contaseña">
        <button type=submit>Ingresar</button>
    </form>
</body>
</html>