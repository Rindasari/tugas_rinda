<?php

$film = array("Naruto","Train to Busan","KKN Desa Penari","THOR");

$skor = array("Naruto"=>"10/10","Train to busan"=>"9/10","KKN Desa Penari"=>"7/10","THOR"=>"9/10");
echo "<br><H3> Mengakses Judul Film Via array numerik </H3>";

echo $film[2];

echo "<br><H3> Mengakses Skor Film Via array Associative </H3>";

echo $skor["KKN Desa Penari"];


