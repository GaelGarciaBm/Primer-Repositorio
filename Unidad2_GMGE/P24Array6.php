<?php
/*
P24Array6.php
CBTIs89
Programa Que Almacena Datos En Un Arreglo y Posteriormente Los Imprime
Garcia Mena Gael Esau 
3°A Programacion TM
*/

$Clase=array("Carlos"=>"Programacion 3°A","Humberto"=>"Mecatronica 3°A","Erick"=>"Construccion 3°A","Pepe"=>"Logistica 3°A","Lupe"=>"Arquitectura+
-* 3°A");

echo "** DATOS DE ALUMNO **","<br>","<br>";

foreach($Clase as $Alumno=>$Carrera)
	{echo "Alumno Del Plantel CBTIs 89 ".$Alumno." De La Carrera De ". $Carrera." De 16 Años De Edad";
	 echo "<br>","<br>";}
?>