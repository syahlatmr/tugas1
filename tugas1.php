<?php
//INI MERUPAKAN PROGRAM PERHITUNGAN LUAS LINGKARAN
$phi = 22/7; //rumus jari jari
$r = 7; //input jari jari lingkaran
$luas = $phi * $r * $r; //rumus luas ringkaran

echo "<h1>Luas Lingkaran</h1>";
echo "Jari Jari Lingkaran adalah : " .$r; 
echo "<br><br>Luas Lingkaran Adalah : ".$luas;



//INI MERUPAKAN PROGRAM PERHITUNGAN LUAS SEGITIGA
$alas = 5;
$tinggi = 10;
$luas_segitiga = 1/2*$alas*$tinggi;

echo "<h1>Luas Segitiga</h1>";
echo "Alas Segitiga adalah : ".$alas;
echo "<br>Tinggi Segitiga adalah : ".$tinggi;
echo "<br><br>Luas Segitiga adalah : ".$luas_segitiga;

//INI MERUPAKAN PROGRAM PERHITUNGAN LUAS JAJAR GENJANG
$alas = 5;
$tinggi = 10;
$luas_jajargenjang = $alas*$tinggi;

echo "<h1>Luas Jajar Genjang</h1>";
echo "Alas Jajar Genjang adalah : ".$alas;
echo "<br>Tinggi Jajar Genjang adalah : ".$tinggi;
echo "<br><br>Luas Jajar Genjang adalah : ".$luas_jajargenjang;
?>
