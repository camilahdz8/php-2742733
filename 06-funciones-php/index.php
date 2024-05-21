<?php

echo "ejecutando php";
//crear una funcion que diga si una persona es mayor o menor de edad
function ValidarEdad($edad){
    if($edad >= 18){
        echo "eres mayor de edad";
    }else if($edad < 18){
        echo "eres menor de edad";
    }
}

//llamnado la funcion
ValidarEdad(isset($_POST['edad'])? $_POST['edad'] :12)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Funciones php</h1>
    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="POST"></form>
    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad">
</body>
</html>