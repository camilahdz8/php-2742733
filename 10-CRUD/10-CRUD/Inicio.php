<?php session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
    $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;

    //Para verificar que se envíen todos los datos
    if (empty($usuario) or empty($password)) {
        echo '<div class="alert alert-light" role="alert">Rellene el formulario</div>';
    } else {
        //echo $usuario . ' - ' . $password;
        try {

            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            echo "Conexion OK" . "<br>";
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage() . "<br>";
        }

        $statement = $conexion->prepare("SELECT * FROM `usersapp` WHERE username = :user AND password = :pass");

        $statement->execute(array(':user' => $usuario, ':pass' => $password));

        $result = $statement->fetch();

        if ($result) {
            echo 'true';
            $_SESSION['userRegister'] = $usuario;
            $_SESSION['passRegister'] = $password;
            $_SESSION['emailRegister'] = $email;
            header('Location: user.php');
        } else {
            echo 'false';
        }

        /*   if ($usuario ==  $user_register && $password == $pass_register) {
            echo 'Listo, iniciaste sesión 🥰';
            header('Location: user.php');
        } else {
            echo '<br>' . 'Tu usuario no existe 😭';
        } */
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="todo">
        <div class="contenedor">
            <h1>Página de inicio</h1>
            <form action="index.php" method="POST">
                <label for="user"></label>
                <input class="barra" type="text" placeholder="User" name="user">
                <input class="barra" type="password" placeholder="Password" name="password">
                <br> <br>
                <button type="submit" class="boton">Iniciar</button>
                <br> <br>
            </form>
            <a href="./registro.php" class="boton1">Registrate</a>
        </div>
    </div>



    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>