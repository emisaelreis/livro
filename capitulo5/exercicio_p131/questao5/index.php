<?php

print "<b>Exercíco P 131 - Questao 05</b><br><br>";


function gerCor($c1, $c2, $c3)
{
    $cor = '#'.dechex($c1).dechex($c2).dechex($c3);
    return $cor;
}


function bloc($cor = 'red')
{
    $bc = "<div style='background-color:$cor; height: 30; width: 150;'></div>";
    return print $bc;
}

bloc(gerCor(128,128,128));
print gerCor(128,128,128);

echo "<br><br>";
bloc(gerCor(241,128,28));
print gerCor(241,128,128);

echo "<br><br>";
bloc(gerCor(141,128,255));
print gerCor(141,128,255);