<?php

class Entree {
    public $name;
    public $ingredients = array();

    public function __construct($name, $ingredients)
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

print $soup->name;

$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));