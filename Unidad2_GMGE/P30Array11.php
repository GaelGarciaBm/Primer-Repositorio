<?php
/*
P30Array11.php
CBTIs89
Programa que Use Array
Garcia Mena Gael Esau
3°A Programacion TM
*/

$array_numerico_indexado=array(1,"Gato",2,"Perro");

foreach($array_numerico_indexado as $mascota)
	{echo $mascota."<br>";}

array_push($array_numerico_indexado,3,"Caballo");

foreach($array_numerico_indexado as $mascota)
{echo $mascota."<br>";}
?>