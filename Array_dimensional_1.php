<?php
//two-dimensional
$Halalmart = array (
    'Nomor' =>array('1','2'),
    'Nama' =>array('piscok','Donat'),
    'harga' =>array('Rp1500','Rp2000')
);
echo $Halalmart['Nomor'][0];

//cara kedua dimensional Halalmart
$HalalMart = array (
    array(1,"Piscok","Rp1500"),
    array(2,'Donat','Rp2000'),
    array(3,'Martabak Telur','Rp1500')
  );
  echo $HalalMart[0][0];
  echo $HalalMart[1][1];
  echo $HalalMart[1][2];

//matrix
$matrix = array (
    array(1,2),
    array(3,4)
);
$matrix1 = array (
    array(4,3),
    array(2,1)
)
    ?>