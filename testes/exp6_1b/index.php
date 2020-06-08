<?php

echo 'Classes e Objetos Exemplo com Construtores<br><br>';

class Entree {
    public $name;
    public $ingredients = array();

    public function __construct($name,$ingredients)
    {
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient)
    {
        return in_array($ingredient, $this->ingredients);
    }
}

$soup = new Entree('Chicken Soup', array('chicken','water'));

$sandwich = new Entree("Chicken Sandwich",['chicken','bread']);


foreach (['chicken','lemon','bread','water'] as $ing) {
    if ($soup->hasIngredient($ing)) {
        print "Soup contains $ing<br>";
    }

    if ($sandwich->hasIngredient($ing)) {
        print "Sandwich contains $ing<br>";
    }
}

print "<br><hr>$soup->name";