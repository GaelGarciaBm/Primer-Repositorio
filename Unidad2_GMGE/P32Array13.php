<?php
/*
P32Array13.php
CBTIs89
Programa que Use Array
Garcia Mena Gael Esau
3°A Programacion TM
*/

echo "Array Original";
echo "<br>";

$array=array("Camisa","Pantalon","Cinturon");

foreach($array as $prenda)
	{echo $prenda."<br>";}

$arraynumerico=array("Camisa","Pantalon","Cinturon");

sort($arraynumerico);
var_export($arraynumerico);
echo "<p>";


echo "Array Despues De Agregar Productos";
echo "<br>";

array_push($array,"Gorra","Calcetines");

foreach($array as $prenda)
	{echo $prenda."<br>";}

$arraynumerico1=array("Gorra","Calcetines");

rsort($arraynumerico1);
var_export($arraynumerico1); 
?>