<?php
/**
 * Função ksort(). Classifica um array pelas suas chaves ordenandos-os por 
 * por ordem alfabética crescente e preserva os respectivos pares.
 */

echo 'Função ksort()<br>';

$meal = array('breakfast' => 'Walnut Bum',
            'lunh' => 'Cashew Nuts and White Mushrooms',
            'snack' => 'Dried Mulberries',
            'dinner' => 'Eggplant with Chili Sauce');

print "Antes de função ksort()<br><br>";

foreach($meal as $key => $value){
    print "\$meal: $key $value<br>";
}

ksort($meal);
print "<br>Após a função sort()<br>";
foreach($meal as $key => $value){
    print "\$meal: $key $value<br>";
}
