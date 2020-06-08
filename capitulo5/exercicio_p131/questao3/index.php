<?php

print "<b>Exercíco P 131 - Questao 03</b><br><br>";

$path = 'imagens/';
function imagem($file)
{

    $img = "<img src='" . $GLOBALS["path"].$file . "'  />";
    print $img;
}

imagem('java.jpeg');
print "<br><br>";
imagem('c.jpeg');
print "<br><br>";
imagem('logica.jpeg');
print "<br><br>";
imagem('python.jpeg');
print "<br><br>";
imagem('img_php.jpeg');
print "<br><br>";