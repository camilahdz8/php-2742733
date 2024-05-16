<?php
$hora = $_POST['hora'];
$valor = $_POST['valor'];
$resultado = $hora * $valor;

echo "Su salario mensual es de $resultado". "<br>";

if ($resultado >=2200000) {
    echo "Se le retiene fuente";
} else {
    echo "No se le retiene fuente";
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
    <form action="ejercicio2.php" method="post">
    <label for="hora">Hora</label>
        <input id="hora" type="text" placeholder="Ingresa las horas.." name="hora">
        <br>
        <label for="valor" required>Valor</label>
        <input id="valor" type="text" placeholder="Ingresa el valor.." required name="valor">
        <br>
        <button type="submit">Enviar</button>
    </form>
        
</body>
</html>