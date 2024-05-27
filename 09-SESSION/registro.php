<?php session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['Username'];
    $password = $_POST['Password'];

    if(empty($usuario) or empty($password)) {
        echo 'Rellene completo el formulario';
    }else {
        //echo $usuario . '_' . $password;
        $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
        //echo '-variables de sesion guardadas 👍';
        //header('Location: index.php');
    }

    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Registrate</h1>

<form action="registro.php" method="POST">
    <label for="Username">Username</label>
    <input id="Username" type="text" placeholder="Username.." name="Username">
    <label for="Password" required>Password</label>
    <input id="Password" type="password" placeholder="Password.." name="Password">

    <button type="submit">Registrarse</button>
</form>

<?php
 if( isset($_SESSION['userRegister']) ): ?>
<p>Datos registrados, ya puedes iniciar sesion</p>
<p> <?php echo $_SESSION['userRegister'] . '-'.  $_SESSION['passRegister']; ?></p>


<a href="index.php">Iniciar Sesion</a>
<?php endif; ?>



</body>
</html>