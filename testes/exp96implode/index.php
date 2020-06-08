<?php
/**
 * A função implode() cria uma string a partir de cada valor de um array delimitando cada 
 * valor com um separador definido pelo programador. Essa string conterá apenas os valores
 * de dada elemento, portando desconsiderando os índices.
 */

echo 'Exp 96 implode()<br><br>';  

$lang = array('Java','Python','PHP','C++','Delphi');

echo implode(' | ',$lang);
echo '<br><hr><br>';

$lang = array('lin1' => 'Java','lin2' => 'Python','lin3' => 'PHP','lin4' => 'C++','lin5' => 'Delphi');
echo implode(' | ',$lang);
