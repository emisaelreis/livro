<?php
/**
 * Função asort(). Classifica um array pelos valores de seus elementos mas mantém as
 * chaves dos mesmos.
 */

echo 'Função asort()<br>';

$meal = array('breakfast' => 'Walnut Bum',
            'lunh' => 'Cashew Nuts and White Mushrooms',
            'snack' => 'Dried Mulberries',
            'dinner' => 'Eggplant with Chili Sauce');

print "Antes de função asort()<br><br>";

foreach($meal as $key => $value){
    print "\$meal: $key $value<br>";
}

asort($meal);
print "<br>Após a função sort()<br>";
foreach($meal as $key => $value){
    print "\$meal: $key $value<br>";
}
