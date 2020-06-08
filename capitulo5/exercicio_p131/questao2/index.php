<?php

print "<b>Exercíco P 131 - Questao 02</b><br><br>";

$path = 'imagens/';
function imagem($file)
{

    $img = "<img src='" . $GLOBALS["path"].$file . "'  />";
    print $img;
}

imagem('img_php.jpeg');