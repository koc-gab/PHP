<?php
/*
    1. XAMPP (PHP) telepítés, futtatás
    2. <?php ?> szintaxis
    3. Változók, konstansok ($vezetekNev, define)
    4. Adattípusok (string, int, float, bool, array)
    5. Egyszerű kiírás (echo (print), printf, sprintf, print_r, var_dump)
*/
    $i = 10;
    $f = 3.14;
    $b = true;
    $s = "Gábor";
    var_dump($i);
    var_dump($f);
    var_dump($b);
    var_dump($s);
    $x = 3;
    $y = "5";
    $z = $x + $y;
    print("$z");
    $a = [1, 2, 3];
    var_dump($a);

    // Mit ír ki?

    $message = "egy";
    print "<br>\n" . "Kiír " . $message . " értéket.";
    print "<br>\nKiír $message értéket.";
    print '<br>\nKiír $message értéket.';
    echo "<br>\n", "Kiír ", $message, " értéket.";
    $ar = 1100.5;
    printf("<br>\nAz ár: %.2f Ft.", $ar);
    $szam = 7;
    $kod = sprintf("<br>\nAZON-%04d", $szam);
    print $kod;