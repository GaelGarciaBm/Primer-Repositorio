<?php
/*
P37Array17.php
CBTIs89
Programa que use un array
Garcia Mena Gael Esau
3°A Programacion TM
*/ 

$arraynumeros=array(-4,8,17,-11,-3,1,20,-30,21,50,-73,-7,-10,-8); 
$arraypositivos=array();
$arraynegativos=array();
$sp=0;
$sn=0;


$longitud=count($arraynumeros);
for($i=0; $i<$longitud; $i++)
	{if ($arraynumeros[$i]>= 0)
        {$arraypositivos[]=$arraynumeros[$i];}
    else
        {$arraynegativos[]=$arraynumeros[$i];}}


echo "<p>";
echo "**NUMEROS POSITIVOS**";
echo "<br>";

foreach($arraypositivos as $positivo)
	{echo $positivo;
		echo "<br>";}

echo "La Suma De Positivos";
echo "<br>";
foreach($arraypositivos as $positivo) 
    {$sp = $sp + $positivo;}
echo $sp;
echo "<br>";


echo "<p>";
echo "**NUMEROS NEGATIVOS**";
echo "<br>";

foreach($arraynegativos as $negativo)
	{echo $negativo;
		echo "<br>";}


echo "La Suma De Negativos";
echo "<br>";
foreach($arraynegativos as $negativo) 
    {$sn = $sn + $negativo;}
echo $sn;
echo "<br>";



?>