<?php

/*
    Executando operações com elementos de array
*/

echo 'Exp 95<br><br>';  

$pess['Emisael'] = 40;
$pess['Nelma'] = 27;

foreach($pess as $key => $value){
    print $key . ': ' . $value . '<br>'; 
}

echo '<br><hr><br>';

$pess['Emisael'] ++;

foreach($pess as $key => $value){
    print $key . ': ' . $value . '<br>'; 
}
