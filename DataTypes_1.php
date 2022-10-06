<?php
//aritmatic
$a = '10';
$b = 10;
$c = $a%$b;
print 'hasil a+b = $c  \n';
echo" \n";

//luas lingkaran
define("phi",3.14);
$r = 10;
$LuasLingkaran = phi*pow($r,2);
print "Luas Lingkaran dengan \n r=10 \n luas".$LuasLingkaran;
echo"\n   \n";

//volume tabung
$jari = 10;
$tinggi = 10;
$volume = phi * $jari * $tinggi;
print ("Volume Tabung adalah ".$volume);
echo"\n   \n";

//volume tabung 2
$r= 10;
$volumetabung = phi*pow ($r,10);
print "volume tabung dengan \n r=10 \n luas".$volumetabung;
echo"\n   \n";

?>