<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
</head>
<body>


    <?php if($_SESSION) : ?>

    
    <h1>Bienvenido <?php echo $_SESSION['Nombre']; ?> A tu pais <?php  echo $_SESSION['Pais']; ?></h1>
    <a href="./cerrar.php">Cerrar Sesion</a>
    <a href="./index.php">Home</a>


    <?php else :?>
        <h1>Debes iniciar sesion</h1>
        <a href="./index.php">Iniciar Sesion</a>
    <?php endif;?>




</body>
</html>