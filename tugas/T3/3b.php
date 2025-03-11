<?php
function urutanAngka($jumlah) {
    $angka = 1; 
    $baris = 0; 

    
    while ($baris < $jumlah) {
        $baris++; 
        for ($i = 0; $i < $baris; $i++) { 
            if ($angka <= $jumlah * ($jumlah + 1) / 2) { 
                echo $angka . " "; 
                $angka++;
            }
        }
        echo "<br>"; 
    }
}


echo urutanAngka(5);
?>