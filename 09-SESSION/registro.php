<?php

if($_POST['Username']){

    session_start();

    $_SESSION['Nombre'] = $_POST['Username'];
    $_SESSION['Password'] = $_POST['Password'];

    echo 'Puede iniciar sesión';
    
} else {
    echo 'No puede iniciar sesión';
    header ('Location: index.php');
}


?>