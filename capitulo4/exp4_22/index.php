<?php

/**
 * A função explode() divide uma string transformando-a em um array(). O argumento 
 * delimitador de explode() é string que ela deve procurar para separar os elementos 
 * do array().
 */

echo 'Exp 96 explode()<br><br>';
 
$frase = 'Java, PHP, Html, Css, JavaScript, Python, Sql';
$expl = explode(', ',$frase); 
print $expl[0];

foreach($expl as $k => $v){
    print $v .'<br>';
}