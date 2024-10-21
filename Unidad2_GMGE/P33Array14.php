<?php
/*
P33Array14.php
CBTIs89
Programa que Use Array
Garcia Mena Gael Esau
3°A Programacion TM
*/

$arraynombres=array("Zoe","Dylan","Pepe","Lupe","Goku","Gerardo");
$longitud=count($arraynombres);
for($i=0; $i<$longitud; $i++)
 {echo $arraynombres[$i];
 echo "<br>";} 

sort($arraynombres);
echo "<p>";

array_push($arraynombres,"Samael","Pepa","Zuñiga","Quesadilla");
unset($arraynombres[5]);
unset($arraynombres[4]);
$longitud=count($arraynombres);
for($i=0; $i<$longitud; $i++)
{echo $arraynombres[$i];
 echo "<br>";} 

rsort($arraynombres);
?>