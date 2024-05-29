<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];


//Para verificar que se envíen todos los datos
if(empty($usuario) or empty($password)){
    echo 'Rellene completo el formulario';
}else{
    //echo $usuario . ' - ' . $password;
    /* $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    $_SESSION['emailRegister'] = $email; */
    //echo '- Variables de sesión guardadas';
    //header('Location: index.php);

    try{

        $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', ''); 
        echo "Conexion OK". "<br>";
    
    } catch (PDOException $e) {
        echo "Error:" . $e-> getMessage() . "<br>";
    }
    
    $statement = $conexion -> prepare("INSERT INTO `usersapp` (`ID` ,`Username`, `Password`,`Email`) VALUES (NULL, :usuario, :pass, :email)");
    
    
    $statement -> execute(array( ":usuario"=>$usuario, ":pass"=>$password, ":email"=>$email));
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
    <input type="text" placeholder="User" name="user">
    <label for="email">Email</label>
    <input type="email" placeholder="email" name="email">
    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password">
    <button type="submit">Registrarse</button>
</form>

<?php if(isset($_SESSION ['userRegister']) ) : ?>
<p>Datos registrados, ya puede iniciar sesión</p>
<p><?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION ['passRegister'] . ' - ' . $_SESSION ['emailRegister'] ; ?> </p>
<a href="index.php">Iniciar sesión</a>
<?php endif  ?>

</body>
</html>