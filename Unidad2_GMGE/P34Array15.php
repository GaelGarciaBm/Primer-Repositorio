<?php
/*
P34Array15.php
CBTIs89
Programa que convierte los datos de un array en una cadea de texto, y de forma contraria es decir de una cadena de texto a un array
Garcia Mena Gael Esau
3°A Programacion TM
*/

//Almacena datos en un arreglo
$arraydatos=["Pepa","Gokum","Troe"];

//Convierte un array a cadena de texto
$string=implode(" ",$arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<p>";

//Cadena de texto a separar
$cadena="Tercero de programacion matutino";

//Convierte una cadena de texto en un array
$array=explode(" ",$cadena);

$longitud=count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

//Imprime los elementos del arreglo
for($i=0; $i<$longitud; $i++)
{//Se Obtiene El Valor De Cada Elemento
echo $array[$i];
echo "<br>";}
?>