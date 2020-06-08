<?php
echo 'Classes e Objetos Exemplo com Construtores e Exceção 2<br><br>';

include 'construct-exception.php';

$drink = new Entree('Glass of Milk', 'milk');
if($drink->hasIngredient('milk'))
{
    print "Yummy";
}

