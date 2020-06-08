<?php

$f = -50;
print 'Equivalência em graus Celsius e Fahrenheit<br><br>';
while($f <= 50){
    $c = ($f - 32) * 5 /9;
    print "Fahrenheit: $f x Celsius: $c <br>";
    // printf("%d degress F = %d degress C\n", $f,$c);
    // echo'<br>';
    $f+=5;
}