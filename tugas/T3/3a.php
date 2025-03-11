<?php

function hitungLuasLingkaran($r) {
    $luas = pi() * pow($r, 2);
    echo "Jari-jari = $r cm.<br>";
    echo "Luas lingkaran = " . round($luas, 2) . " cm²<br>";
}


function hitungKelilingLingkaran($r) {
    $keliling = 2 * pi() * $r;
    echo "Jari-jari = $r cm.<br>";
    echo "Keliling lingkaran = " . round($keliling, 2) . " cm<br>";
}


echo "<h4>Menghitung Luas Lingkaran</h4>";
hitungLuasLingkaran(10);


echo "<hr>";


echo "<h4>Menghitung Keliling Lingkaran</h4>";
hitungKelilingLingkaran(20);
?>