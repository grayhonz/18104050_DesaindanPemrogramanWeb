<?php                 // pembuka php
$x = 75;              // deklarasi variable x berisi 75
$y = 25;              // deklarasi variable y berisi 25
 
function addition() { // deklarasi fungsi addition 
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // globals adalah variable yang bisa diakses dimanapun di script php
}
 
addition();           // pemanggilan fungsi 
echo $z;              // pengeluaran nilai
?>