<?php

include 'classe.php';

$ing = new Ingredient('Arroz', '16.50');

$ing->show();

$ing->setCusto('14.90');

$ing->show();
