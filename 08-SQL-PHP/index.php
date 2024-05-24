<?php

try{
    $conexion = new PDO("mysql: host=localhost; dbname=colegio",'root','');
    echo "Conexion OK";
}catch (PDOException $e) {
    echo "Error:". $e-> getMessage ();
}

$Nombre = 'Marleny';
$Estado = 'Casado';
$Materia = 'Deportes';
$Edad = 56;
$Documento = 234547;


//vamos a preparar una sentencia SQL y la guardamos en una variable
$statement = $conexion->prepare ("INSERT INTO `profesores` (`ID`,`Nombre`, `Edad`, `Estado civil`, `Materia`,`Documento`) VALUES (NULL,:Nombre, :Edad, :Estado, :Materia, :Documento)");


//ejecutar el statement
$statement->execute(array(":Nombre"=>$Nombre, ":Edad"=>$Edad, ":Estado"=>$Estado, ":Materia"=>$Materia, ":Documento"=>$Documento ));

//fetch() regresa solo un resultado  fetchAll() regresa todos los resultados
$statement = $statement->fetchAll();

//print_r($statement);

foreach($statement as $item){
    echo $item['ID'] . '-' . $item['Nombre'] . '<br>';
}


?>