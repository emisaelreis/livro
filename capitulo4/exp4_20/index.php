<?php
/**
 * A função unset() remove um elemento de um array(), incluindo
 * sua chave. A remoção é feita com base no índice do array
 * 
 */

echo 'Exp 96 unset()<br><br>';  

$lang = array('Java','Python','PHP','C++','Delphi');

foreach($lang as $key => $value){
    print $key . ': ' . $value . '<br>'; 
}

echo '<br><hr><br>';
unset($lang[3]);
foreach($lang as $key => $value){
    print $key . ': ' . $value . '<br>'; 
}

echo '<br><hr><br>';

$lang = array('lin1' => 'Java','lin2' => 'Python','lin3' => 'PHP','lin4' => 'C++','lin5' => 'Delphi');

foreach($lang as $key => $value){
    print $key . ': ' . $value . '<br>'; 
}

echo '<br><hr><br>';
unset($lang['lin3']);
foreach($lang as $key => $value){
    print $key . ': ' . $value . '<br>'; 
}

