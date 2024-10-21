<?php
/*
P22Array4.php
CBTIs89
Programa Que Almacena Datos En Un Arreglo y Posteriormente Los Imprime
Garcia Mena Gael Esau 
3°A Programacion TM
*/

$Equipo=array("Portero"=>"Carlos","Defensa"=>"Humberto","Medio"=>"Erick","Delantero"=>"Pepe");

echo "** SELECCION NACIONAL **","<br>","<br>";

foreach($Equipo as $Posicion=>$Jugador)
	{echo "El Jugador ".$Jugador ." Es El ". $Posicion;
	 echo "<br>","<br>";}
?>