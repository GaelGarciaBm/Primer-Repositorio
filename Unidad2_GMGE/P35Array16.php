<?php
/*
P35Array16.php
CBTIs89
Programa que use un array
Garcia Mena Gael Esau
3°A Programacion TM
*/

$array1=array(10,20,30,40,50);
$array2=array(3,7,6,15,18);
$arrays=array();
$arrayr=array();
$arraym=array();
$arrayd=array();

$longitud=count($array1);
for($i=0; $i<$longitud; $i++)
	{$arrays[$i]=$array1[$i]+$array2[$i];
	$arrayr[$i]=$array1[$i]-$array2[$i];
	$arraym[$i]=$array1[$i]*$array2[$i];
	$arrayd[$i]=$array1[$i]/$array2[$i];}

echo "SUMA ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]."+".$array2[$i]."=".$arrays[$i];
	echo "<br>";}
echo "<p>";

echo "RESTA ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]."-".$array2[$i]."=".$arrayr[$i];
	echo "<br>";}
echo "<p>";

echo "MULTIPLICACION ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]."X".$array2[$i]."=".$arraym[$i];
	echo "<br>";}
echo "<p>";

echo "DIVISION ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]."/".$array2[$i]."=".$arrayd[$i];
	echo "<br>";}
echo "<p>";
?>