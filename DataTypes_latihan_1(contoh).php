<?php
define("phi",3.14);
$r = 11;
$LuasLingkaran = phi*pow($r,8);
print "Luas Lingkaran dengan \n r=10 \n luas".$LuasLingkaran;
echo"\n   \n";

//tabung
$jari = 11;
$tinggi = 8;
$volume = phi * $jari * $tinggi;
print ("Volume Tabung adalah ".$volume);
echo"\n   \n";

//menghitung pytagoras
$a = 10;
$b = 6;
$c = $a-$b;
print ("tinggi pytagoras adalah".$c);
echo" \n";

//limas segitiga
$alas = 12;
$tinggi = 2;
$luas = 1/3 * $alas * $tinggi;
print ("luas limas segitiga adalah".$luas);
echo"\n";

//volume tabung dan segitiga
$a = 276;
$b = 8;
$total = $a + $b;
print ("luas bangun ruang adalah".$total);
?>
