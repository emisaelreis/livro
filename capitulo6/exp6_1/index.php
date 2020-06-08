<?php

echo 'Classes e Objetos<br><br>';

class Entree {
    public $name;
    public $ingredients = array();

    public function hasIngredient($ingredient)
    {
        return in_array($ingredient, $this->ingredients);
    }

    //Métodos estáticos
    public static function getSizes()
    {
        return array('small', 'medium','large');
    }

    public static function getPreco($qtd, $valor){
        $taxa = $valor * 0.03;
        return $qtd * $valor + $taxa;
    }
}

$soup = new Entree;
$soup->name = 'Chicken Soup';
$soup->ingredients = array('chicken','water','sal');

$sandwich = new Entree;

$sandwich->name = "Chicken Sandwich";
$sandwich->ingredients = array('chicken','bread','sal');

foreach (['chicken','lemon','bread','water','sal'] as $ing) {
    if ($soup->hasIngredient($ing)) {
        print "Soup contains $ing<br>";
    }
    if ($sandwich->hasIngredient($ing)) {
        print "Sandwich contains $ing<br>";
    }
}

print "<br>";
$sizes = Entree::getSizes();
print "Tamanhos disponíveis: ";
foreach($sizes as $sz)
{
    print '<br>'. $sz;
}

print "<hr>";
print "Total: " . Entree::getPreco(2,100);