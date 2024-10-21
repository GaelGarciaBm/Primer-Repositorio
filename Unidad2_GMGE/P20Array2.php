<?php
/*
P20Array2.php
CBTIs89
Programa Que Almacena Diversos Datos En Un Arreglo Y Posteriormente los Imprime Por Medio De Un Ciclo For
Garcia Mena Gael Esau 
3°A Programacion TM
*/

$nombre="Rammoncin";
$array=array(1,2,3,"Casa",$nombre);

//Se Obtiene El Numero De Elementos
$longitud=count($array);

//Recorre Todos Los Elementos
for($i=0; $i<$longitud; $i++)

//Se Obtiene El Valor De Cada Elemento	
{echo $array[$i];
 echo "<br>";}                
?>