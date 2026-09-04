<?php
/*
    1. if, else, elseif
    2. switch
    3. Ciklusok: for, while, foreach
    4. Ternary operátor ($valtozo = feltétel ? 'igen' : 'nem';)
    5. Tömbök (indexelt, asszociatív, tömbök tömbje)
*/
    $szam = 5;
    if ($szam % 2 == 0) {
        print "A(z) " . $szam . " páros.<br>\n";
    } else {
        print "A(z) " . $szam . " páratlan.<br>\n";
    }
    $res = ($szam % 2 == 0 ? "páros." :"páratlan.");
    print "A(z) $szam " . ($szam % 2 == 0 ? "páros." :"páratlan.");

//Készíts for ciklust 1-től 10-ig kiírja a számokat.

    $j = 10;
    for ($i=1; $i <= $j; $i++) { 
        print($i. "<br>\n");
    }
    $gyumolcsok = ["alma", "mangó", "ananász", "görögdinnye", "őszibarack"];
    for ($i=0; $i < count($gyumolcsok); $i++) { 
        print "A(z) " . $i+1 . ". gyümölcs: $gyumolcsok[$i]<br>\n";
    }
    foreach ($gyumolcsok as $gyumolcs) {
        print $gyumolcs . "<br>\n";
    }