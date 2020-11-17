<?php                       // pembuka php
$favcolor = "red";          // deklarasi variabel berisi red

switch ($favcolor) {        // percabangan switch yang berbeda dengan if, setiap case dalam switch hanya bisa satu kondisi
  case "red":               // kondisi red 
    echo "Your favorite color is red!"; // jika kondisi terpenuhi maka tercetak your..
    break;                  // break harus ada karena jika tidak echo pada kondisi lain akan tercetak juga
  case "blue":              // kondisi blue 
    echo "Your favorite color is blue!"; // jika kondisi terpenuhi maka tercetak your..
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:                  // default digunakan sebagai kondisi yang terakhir jika semua case tidak terpenuhi
    echo "Your favorite color is neither red, blue, nor green!";
}
?>                              <!-- penutup php -->