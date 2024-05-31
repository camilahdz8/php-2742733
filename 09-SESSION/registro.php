<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $password_2 = $_POST['password_2'];
    $email = $_POST['email'];


//Para verificar que se envíen todos los datos
if(empty($usuario) or empty($password)){
    echo 'Rellene completo el formulario';
}else{
    
    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    $_SESSION['pass2Register'] = $password_2;
    $_SESSION['emailRegister'] = $email; 
    

    try{

        $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', ''); 
        echo "Conexion OK". "<br>";
    
    } catch (PDOException $e) {
        echo "Error:" . $e-> getMessage() . "<br>";
    }
    
    $statement = $conexion -> prepare("INSERT INTO `usersapp` (`ID` ,`Username`, `Password`,`Email`) VALUES (NULL, :usuario, :pass, :email)");
    
    
    $statement -> execute(array( ":usuario"=>$usuario, ":pass"=>$password, ":email"=>$email));

    $statement = $statement-> fetchAll();

    if($password == $password_2){
        echo "Datos enviados";
    } else {
        echo "Las contraseñas no coinciden";
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
    
<h1>Registrate</h1>

<form action="registro.php" method="POST">
    <label for="user">User</label>
    <input type="text" placeholder="User" name="user"><br>
    <label for="email">Email</label>
    <input type="email" placeholder="email" name="email"><br>
    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password"><br>
    <label for="password_2">Confirm password</label>
    <input type="password" name="password_2" placeholder="Password" id="password_2"> <br>
    <button type="submit">Registrarse</button>
</form>

<?php 

if($_SESSION['passRegister'] == $_SESSION ['pass2Register'] ){
    echo"Datos registrados  <br> $usuario <br> $password <br> $email <br>" ;
} else{
    echo"No coinciden";
}

 ?>

 <a href="index.php">Iniciar sesión</a>

</body>
</html>