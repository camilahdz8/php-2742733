<?php
echo 'Ejecutando Condicional';

echo "<br/> <br/>";

/*ejercicio 1.1*/
$Articulos= "20";

if ($Articulos <12) {
    echo "Caja Rapida";
} else {
    echo "Caja Normal";
}

echo "<br/> <br/>";
/*ejercicio 1.2*/

$Edad = "20";
if ($Edad <18) {
    echo "Eres menor de edad,No puedes votar";
} else {
    echo "Eres mayor de edad,Si puedes votar";
}

echo "<br/> <br/>";
/*ejercicio 2*/

$Nombre= "Isa";
$edad= "45";

if ($edad >18 ) {
    echo "Si puedes ingresar a la discoteca";
} else {
    echo "No puedes ingresar a la discoteca";
} 
echo "<br/>";
if ($Nombre == "Mario" xor $Nombre == "Carlos") {
    echo "Bienvenido puedes ingresar a VIP";
} 

echo "<br/> ";
/*ejercicio 3*/
$estatura= "170";
$velocidad= "27";
$edad_1= "19";

if ($estatura ="170" && $velocidad ="27"){
    echo "Puedes ingresar al equipo";

} else {
    echo "No puedes ingresar al equipo";
}

echo "<br/>";

if ($estatura ="170" && $velocidad ="27" && $edad_1 >18) {
    echo "Division Mayor";
} else {
    echo "Division Menor";
}

echo "<br/> <br/>";
/*ejercicio 4*/

$aire= "verde";

switch($aire){
    case "verde":
        echo "Calidad del aire es buena";
    break;
    case "amariillo":
        echo "Calidad del aire es moderada";
    break;
    case "naranja":
        echo "La calidad del aire no es saludable para grupos sensibles";
    break;
    case "rojo":
        echo "Calidad del aire no es saludable";
    break;
    case "purpura":
        echo "La Calidad del aire es muy poco saludable";
    break;
    case "marron":
        echo "Calidad del aire es peligrosa";
    break;
    default:
        echo "No se encontro el color";
    break;
}




?>