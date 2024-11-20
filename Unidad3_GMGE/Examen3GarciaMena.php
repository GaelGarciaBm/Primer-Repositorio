<?php
/*
Examen3GarciaMena.php
CBTIs89
Programa que almacena el nombre de cuatro personas en un arreglo $Alumnos y en otro arreglo multidimensional llamado $Calificaciones almacena las calificaciones de cada uno de ellos por medio de filas y columnas. Debes calcular por medio de ciclos el promedio de cada alumno y guardarlo en el arreglo  $Promedio de igual manera em el arreglo $Status debes almacenar la palabra Aprobado o Reprobado segun corresponda.
3°A Programacion TM
*/   

$Alumnos=array("Luz","Fer","Ian","Ale");
$Calificaciones=array(array(6,4,5),array(7,9,8),array(7,9,5),array(5,4,6));
$Promedio=array();
$Status=array();
$P=0;

for($i=0;$i<4;$i++)
	{for($j=0;$j<4;$j++)
		{$Promedio=$Calificaciones[$i]+$Calificaciones[$i];}}


$longitud=count($Promedio);
for($i=0; $i<$longitud; $i++)
{if ($Promedio[$i]<=5)
{$Status[]="Reprobado";}
elseif ($Promedio[$i]>=6)
{$Status[]="Aprobado";}}

echo "CBTIS 89","<br>";
echo "Alumnos-Promedio-Status";
echo "<br>";
$longitud=count($Alumnos);
for($i=0; $i<$longitud; $i++)
{echo $Alumnos[$i]."---------".$Promedio[$i]."---------".$Status[$i];
echo "<br>";}
echo "<p>";

echo "CALIFICACIONES";
echo "<br>";
for($i=0;$i<4;$i++)
	{for($j=0;$j<3;$j++)
		{echo $Calificaciones [$i][$j]." ";}
		echo "<br>";}
		echo "<p>";
?>