<?php session_start();

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $usuario = $_POST['Username'];
    $password = $_POST['Password'];

    $user_register = isset( $_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
    $pass_register = isset( $_SESSION['passRegister']) ?  $_SESSION['passRegister'] : null;


    if(empty($usuario) or empty($password)) {
        echo 'Rellene completo el formulario';
    }else {
        //echo $usuario . '_' . $password;
        if( $usuario == $user_register && $password == $pass_register){
            echo 'listo,Iniciaste Sesion 👍 ';
            header('Location: user.php');
        }else{
            echo 'Usuario no existe';
        }
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
    <h1>Pagina de inicio</h1>

    

    <form action="index.php" method="POST">
        <label for="Username">Username</label>
        <input id="Username" type="text" placeholder="Username.." name="Username">
        <label for="Password" required>Password</label>
        <input id="Password" type="password" placeholder="Password.." name="Password">
    
        <button type="submit">Inicio de sesion</button>
    </form>



    <a href="./registro.php">Registrate</a>
    
</body>
</html>