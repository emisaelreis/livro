<?php
/**
 * Função krsort(). Classifica um array pelas suas chaves ordenandos-os por 
 * por ordem alfabética decrescente e preserva os respectivos pares.
 */

echo 'Função krsort()<br>';

$meal = array('breakfast' => 'Walnut Bum',
            'lunh' => 'Cashew Nuts and White Mushrooms',
            'snack' => 'Dried Mulberries',
            'dinner' => 'Eggplant with Chili Sauce');

print "Antes de função krsort()<br><br>";

foreach($meal as $key => $value){
    print "\$meal: $key $value<br>";
}

krsort($meal);
print "<br>Após a função krsort()<br>";
foreach($meal as $key => $value){
    print "\$meal: $key $value<br>";
}
