<?php
//while 
//ciclo que imprime la tabla del 3
$i = 1;
while ($i <= 10) {
  echo "3x $i"."=".(3 * $i)."</br>";
  $i++;
  
}

//for
//imprimir una lista en orden de numeros
for ($x =1; $x <= 7; $x++){
    echo "el numero es: $x <br>";

}

//foreach
//imprimir todos los animales menos uno

$animales = array("gato" ,"perro" ,"tortuga" ,"araña" );
foreach ($animales as $x) {
    if ($x == "araña") continue; 
       echo "$x <br>";
    }

    

?>

