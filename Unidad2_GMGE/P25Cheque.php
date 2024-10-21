<?php
/*
P25Cheque.php
CBTIs89
Programa Para Calcular Cheques
Garcia Mena Gael Esau 
3°A Programacion TM
*/

$c=6539;$bm=0;$bq=0;$bd=0;$bc=0;$bcincuenta=0;$bv=0;$md=0;$mc=0;$mdos=0;$mu=0;

$bm=floor($c/1000);
$c=$c%1000;
$bq=floor($c/500);
$c=$c%500;
$bd=floor($c/200);
$c=$c%200;
$bc=floor($c/100);
$c=$c%100;
$bcincuenta=floor($c/50);
$c=$c%50;
$bv=floor($c/20);
$c=$c%20;
$md=floor($c/10);
$c=$c%10;
$mc=floor($c/5);
$c=$c%5;
$mdos=floor($c/2);
$c=$c%2;
$mu=floor($c/1);
$c=$c%1;
  
echo "Billetes De Mil ",$bm;
	echo "<br>";
echo "Billetes De Quinientos ",$bq;
	echo "<br>";
echo "Billetes De Doscientos ",$bd;
	echo "<br>";
echo "Billetes De Cien ",$bc;
	echo "<br>";
echo "Billetes De Cincuenta ",$bcincuenta;
	echo "<br>";
echo "Billetes De Veinte ",$bv;
	echo "<br>";
echo "Monedas De Diez ",$md;
	echo "<br>";
echo "Monedas De Cinco ",$mc;
	echo "<br>";
echo "Monedas De Dos ",$mdos;
	echo "<br>";
echo "Monedas De Uno ",$mu;
?>  