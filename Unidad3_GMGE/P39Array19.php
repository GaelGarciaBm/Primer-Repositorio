<?php
/*
P39Array19.php
CBTIs89
Programa que almacena informacion de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones
Garcia Mena Gael Esau
Programacion 3roA
*/


$arraynombres=array("Paco","Mari","Lalo","Rosi","Paty","Beto");
$arrayedades=array(17,30,71,38,12,58);
$arraygrupo1=array();
$arraygrupo2=array();
$arraygrupo3=array();


$longitud=count($arrayedades);
for($i=0; $i<$longitud; $i++)
{if ($arrayedades[$i]<18)
{$arraygrupo1[]=1;
$arraygrupo2[]=0;
$arraygrupo3[]=0;}
elseif ($arrayedades[$i]>=18 && $arrayedades<=49)
{$arraygrupo1[]=0;
$arraygrupo2[]=1;
$arraygrupo3[]=0;}
else
{$arraygrupo1[]=0;
$arraygrupo2[]=0;
$arraygrupo3[]=1;}}

echo "Nombre-Edad-Grupo1-Grupo2-Grupo2";
echo "<br>";
for($i=0; $i<$longitud; $i++)
{echo $arraynombres[$i]."-------".$arrayedades[$i]."-------".$arraygrupo1[$i]."-------".$arraygrupo2[$i]."-------".$arraygrupo3[$i];
echo "<br>";}

?>