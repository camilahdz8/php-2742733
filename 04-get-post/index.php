<?php
//Superglobal GET y POST


$userName = $_POST['Username'];
$userEmail = $_POST['useremail'];

echo $userName;
echo '<br>';
echo $userEmail;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $_POST['color']?>;}
    </style>
</head>
<body>
    <form action="index.php" method="post">
        <label for="Username">Username</label>
        <input id="Username" type="text" placeholder="Username.." name="Username">
        <br>
        <label for="useremail" required>Useremail</label>
        <input id="useremail" type="text" placeholder="useremail.." required name="useremail">
        <br>
        <label for="color">color</label>
        <input type="text" name="color" placeholder="color para el fondo...">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>