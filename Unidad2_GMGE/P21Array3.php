<?php
/*
P21Array3.php
CBTIs89
Programa Que Almacena Los Nombres De 6 Personas En Un Arreglo y Posteriormente Los Imprime Mediante Un Ciclo For
Garcia Mena Gael Esau 
3°A Programacion TM
*/

$n1="Rammoncin";
$n2="Yisus";
$n3="Axel";
$n4="Zoe";
$n5="Ian";
$n6="Dylan";
$array=array($n1,$n2,$n3,$n4,$n5,$n6);

$longitud=count($array);

for($i=0; $i<$longitud; $i++)

{echo $array[$i];
 echo "<br>";}

?>