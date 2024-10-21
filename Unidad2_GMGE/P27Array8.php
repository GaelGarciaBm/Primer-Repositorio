<?php
/*
P27Array8.php
CBTIs89
Programa Que Use Array
Garcia Mena Gael Esau
3°A Programacion TM
*/

$n=array();

for ($i=1; $i<=100; $i++)
	{$n[]=$i ;}

foreach ($n as $v)

		if($v%2==0)
		{echo $v." ";
echo "<br>";}  
		else
		{echo $v." ";}
?>