<?php

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cerrar.css">
    <title>Document</title>
</head>

<body>

    <div class="todo">
        <div class="padre">
            <h1>Sesión finalizada</h1>
            <a href="./user.php" class="botonindex">User page</a>
            <a href="./index.php" class="botoncerrar">Inciar sesión</a>
        </div>
    </div>

</body>

</html>