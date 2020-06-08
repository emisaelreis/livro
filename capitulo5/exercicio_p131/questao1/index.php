<?php

print "<b>Exercíco P 132 - Questao 01</b><br><br>";

function imagem($url, $alt = "imagem php", $height = null, $width= null)
{
    $img = "<img src='$url' alt='$alt' height='$height', width='$width' />";
    print $img;
}

imagem('img_php.jpeg', 'Imagem php', '300px');