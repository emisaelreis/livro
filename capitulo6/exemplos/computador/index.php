<?php

include 'note.php';

try {
    $pc = new Computador('AsRock',['Intel','Core i7'],['Kingston',12],['Samsung',120]);
    $pc->show();
}catch(Exception $e){
    print "Configuração imcompatível.<br>" . $e->getMessage();
}

echo "<br><hr><br>";

try {
    $not = new Notebook('Azus',['Intel','Core i7'],['Kingston',12],['Samsung',500],'sim');
    $not->show();
    $not->most();
}catch(Exception $e){
    print "Configuração imcompatível.<br>" . $e->getMessage();
}
