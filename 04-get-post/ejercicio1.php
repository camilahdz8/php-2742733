<?php
$Edad = $_GET['Edad'];

if($Edad <= 17) {
    echo "Eres menor de edad";
} else {
    echo "Eres mayor de edad";
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
    <form action="ejercicio1.php" method="$_GET">
        <br>
        <label for="Edad"></label>
        <input id="Edad" type="text" name="Edad" placeholder="Edad">
        <br><br>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>