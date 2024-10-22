<?php
/*
P36Repaso.php
CBTIs89
Programa que use un arreglo para contener datos para posteriormente usarlos para crear un equipo de jugadores a gusto propio e imprime los datos finales
Garcia Mena Gael Esau
3°A Programacion TM
*/

$ajugadores=array("Marcus","Dominic","Baird","Cole","James","Hoffman");
echo "*Orden Ascendente De Los Jugadores Disponibles* <br>";
sort($ajugadores);

$longitud=count($ajugadores);
for($i=0; $i<$longitud; $i++)
{echo $ajugadores[$i]; 
 echo "<br>";}

unset($ajugadores[5]);
unset($ajugadores[4]);

echo "<p>";
echo "!!Se Eliminaron Dos Jugadores Y Se Integraron Dos Diferentes¡¡ <br>";
echo "*Orden Descendente De Los Jugadores Disponibles* <br>";
rsort($ajugadores);

array_push($ajugadores,"Davot","Flintaggaru");
$longitud=count($ajugadores);
for($i=0; $i<$longitud; $i++)
{echo $ajugadores[$i];
 echo "<br>";} 
 echo "<p>";

echo "** TU EQUIPO SERA **","<p>";
echo "Como Defensa:",$ajugadores[0],"<br>";     
echo "Como Media Cancha:",$ajugadores[1],"<br>";
echo "Como Tirador:",$ajugadores[2],"<br>";
echo "Como Avance:",$ajugadores[3],"<br>";
echo "Como Banca:",$ajugadores[4]," Y ",$ajugadores[5];

?>