<?php
echo 'Classes e Objetos Exemplo com Construtores e Exceção 2<br><br>';

include 'construct-exception.php';

try {
    $drink = new Entree('Glass of Milk', 'milk');
    if($drink->hasIngredient('milk'))
    {
        print "Yummy";
    }
} catch (Exception $e) {
    print "Couldn't create the drink. " . $e->getMessage();
}

