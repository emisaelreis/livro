<?php
/**
 * Função arsort(). Classifica um array pelos valores de seus elementos em ordem decrescente mas mantém as
 * chaves dos mesmos.
 */

echo 'Função arsort()<br>';

$meal = array('breakfast' => 'Walnut Bum',
            'lunh' => 'Cashew Nuts and White Mushrooms',
            'snack' => 'Dried Mulberries',
            'dinner' => 'Eggplant with Chili Sauce');

print "Antes de função arsort()<br><br>";

foreach($meal as $key => $value){
    print "\$meal: $key $value<br>";
}

arsort($meal);
print "<br>Após a função arsort()<br>";
foreach($meal as $key => $value){
    print "\$meal: $key $value<br>";
}
