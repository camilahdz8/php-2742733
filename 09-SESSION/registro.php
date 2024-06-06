<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $password_2 = $_POST['password_2'];
    $email = $_POST['email'];


    if (empty($usuario) or empty($password)) {
        echo '<div class="alert alert-danger" role="alert">Rellene el formulario</div>';
    } else {

        $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
        $_SESSION['pass2Register'] = $password_2;
        $_SESSION['emailRegister'] = $email;


        try {

            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            //echo "Conexion OK" . "<br>";
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage() . "<br>";
        }

        $statement = $conexion->prepare("INSERT INTO `usersapp` (`ID` ,`Username`, `Password`,`Email`) VALUES (NULL, :usuario, :pass, :email)");


        $statement->execute(array(":usuario" => $usuario, ":pass" => $password, ":email" => $email));

        $statement = $statement->fetchAll();

        if ($password == $password_2) {
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
    <link rel="stylesheet" href="./registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>


    <div class="todo">
        <div class="contenedor">
        <h1>Registrate</h1>
            <form action="registro.php" method="POST">
                <input class="barra" type="text" placeholder="User" name="user"> <br>
                <input class="barra" type="email" placeholder="Email" name="email"> <br>
                <input class="barra" type="password" placeholder="Password" name="password"> <br>
                <input class="barra" type="password" name="password_2" placeholder="Confirm Password" id="password_2"> <br>
                <br>

                <div class="cont_regis">
                    <button type="submit" class="boton">Registrarse</button>
                </div>
                
            </form>
            <a href="index.php" class="boton1">Iniciar sesión</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

</body>

</html>