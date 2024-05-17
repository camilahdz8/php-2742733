<?php
$metro = $_POST['metro'];
$superficie = $_POST['superficie'];

if ($superficie == 'liso') {
    echo "El total de tu valor es" . ($metro * 2000 + 15000);
} else {
    echo "El total de tu valor es" . ($metro * 4000 + 15000);
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
<form action="ejercicio4.php" method="post">
    <label for="metro">metro</label>
        <input id="metro" type="number" placeholder="Ingresa los metros.." name="metro">
        <br>
        <label for="superficie" required>superficie</label>
        <input id="superficie" type="text" placeholder="liso/no liso.." required name="superficie">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>