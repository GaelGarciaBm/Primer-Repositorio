<?php
/*
P40Array20.php
CBTIs89
Programa que almacena por medio de un ciclo los numeros del 150 al 200, ordenando pares impares y luego sumandolos en tres diferentes arreglos
Garcia Mena Gael Esau
3°A Programacion TM
*/ 

$array1=array();
$array2=array();
$array3=array();
$p=0;
$i=0;

for ($i=150; $i<=201; $i++)
{if ($i%2==0)
{$array1[]=$i;}
else
{$array2[]=$i;}}


$longitud=count($array1);
for($i=0; $i<$longitud; $i++)
	{$array3[$i]=$array1[$i]+$array2[$i];}



$longitud=count($array1);
echo "Arreglo1-Arreglo2-Arreglo3";
echo "<br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]."---------".$array2[$i]."---------".$array3[$i];
echo "<br>";}
?>