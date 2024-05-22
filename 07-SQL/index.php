<?php
//Documentacion: SQL W3Schools
//1. SQL Select 
//SELECT materia FROM profesores;
//2. SQL DISTINCT
//SELECT DISTINCT `Estado civil` FROM profesores;

//3. SQL WHERE
//SELECT * FROM profesores WHERE `Estado civil`='Soltero';
//selecciona en profesores el estado civil y escoge uno que este soltero

//4. SQL ORDER BY
// SELECT * FROM `estudiante` ORDER BY Edad;
//selecciona todos los datos de la tabla estudiante y ordena por edad

//5. SQL AND
//SELECT * FROM estudiante WHERE `Media Tecnica` = 'Multimedia' AND Nombre LIKE 's%';
//selecciona todos los datos de la tabla estudiante y escoge los que tengan multimedia y el nombre comience con s

//6. SQL OR
//SELECT * FROM estudiante WHERE `Media Tecnica` = 'Sistemas' OR `Media Tecnica` = 'Multimedia';
//Selecciona en todos los datos de estudiantes en lista de media tecnica los que pertenezcan a multimedia o sistemas

//7. SQL NOT
//SELECT * FROM estudiante WHERE NOT Grado = '10';
//Selecciona en datos de estudiante y elimina los que pertenezcan a grado 10.

//8. SQL INSERT INTO
// INSERT INTO estudiante (Nombre, Edad, Grado, `Media Tecnica`, Documento) VALUES ('Camila', '18', '11', 'Multimedia', '123767');
//Inserta en la tabla estudiante los datos de nombre, edad, grado, media tecnica y documento

//9. SQL NULL
//SELECT `Grado` FROM `estudiante` WHERE `Grado` IS NOT NULL;
//Selecciona en la tabla estudiante los datos de grado y elimina los que no tengan este dato

//10. SQL UPDATE
//UPDATE estudiante SET Nombre = 'Alfredo', Edad= '18' WHERE ID = 1;
//Actualiza en la tabla estudiante los datos de nombre y edad en el ID 1

//11. SQL DETELE
//DELETE FROM profesores WHERE Edad='25';
//elimina los datos de profesores que incluyan la edad de 25





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>