<?php

/*
    Interpolando elementos de um array detro de uma string de aspas duplas
*/ 


echo 'Exp 95b<br><br>';  

$pess['Emisael'] = 40;
$pess['Nelma'] = 27;

echo "A idade do Emisael é $pess[Emisael]";

/**
 * Para interpolar um elemento de array cuja chave não possue espaços, insere o mesmo se o
 * uso de aspas simples. Já se a chvae possue espaços ou outro tipo de pontuação, interpole-o
 * usando chaves {}
 */

echo '<br><hr><br>';  

$pess['Emisael'] = 40;
$pess['Nelma Reis'] = 27;

echo "A idade de Nelma Reis é {$pess['Nelma Reis']}";  