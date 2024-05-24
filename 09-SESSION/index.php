<?php

//session_start(); //inicializa una sesion
//$_SESSION['Nombre'] = 'Josefina';
//$_SESSION['Pais'] = 'Colombia';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de inicio</h1>

    

    <form action="registro.php" method="post">
        <label for="Username">Username</label>
        <input id="Username" type="text" placeholder="Username.." name="Username">
        <label for="Password" required>Password</label>
        <input id="Password" type="text" placeholder="Password.." name="Password">
    
        <button type="submit">Registro</button>
    </form>



    <a href="./user.php">User page</a>
    <a href="./cerrar.php">Cerrar</a>
</body>
</html>