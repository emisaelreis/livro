<?php

print '(Questão 4)<br>';
print 'Equivalência em graus Celsius e Fahrenheit<br><br>';
for($f = -50; $f <= 50; $f+=5){
    $c = ($f - 32) * 5 /9;
    print "Fahrenheit: $f x Celsius: $c <br>";
    
}