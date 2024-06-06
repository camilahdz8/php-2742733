<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <link rel="stylesheet" href="./user.css">
</head>

<body>
    <div class="todo">
        <div class="padre">
            <?php if (isset($_SESSION['userRegister'])) : ?>
                <h1>Bienvenid@ <?php echo $_SESSION['userRegister'] ?> </h1>
                <a href="./index.php" class="botonindex">Home</a>
                <a href="./cerrar.php" class="botoncerrar">Cerrar sesión</a>
                
            <?php else : ?>

                <h1>No has iniciado sesión</h1>
                <a href="./index.php" class="boton1">Iniciar sesión</a>

            <?php endif ?>

        </div>
    </div>
</body>

</html>