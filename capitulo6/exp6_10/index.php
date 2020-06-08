<?php
echo 'Usando Subclasse<br><br>';

include 'subclasse.php';

//Sopa com nome e ingredientes
$soup = new Entree('Chicken Soup',array('chicken','water'));

// Sanduiche com nome e ingredientes
$sandwich = new Entree('Chicken Sandwith', array('chicken','bread'));

// Refeição em combo
$combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));

foreach(['chicken','water','pickles'] as $ing){
    if($combo->hasIngredient($ing)){
        print "Something in the combo contains $ing<br>";
    }
}

echo "<br><hr><br>";

