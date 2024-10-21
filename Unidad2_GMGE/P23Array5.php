<?php
/*
P23Array5.php
CBTIs89
Programa Que Almacena Datos En Un Arreglo y Posteriormente Los Imprime
Garcia Mena Gael Esau 
3°A Programacion TM
*/

$Despensa=array("Manzana"=>"20","Mango"=>"35","Limon"=>"30","Naranja"=>"15");

echo "** FRUTERIA DEL NORTE **","<br>","<br>";

foreach($Despensa as $Fruta=>$Precio)
	{echo "El Kilo De ".$Fruta ." Cuesta ". $Precio."$";
	 echo "<br>","<br>";}
?>