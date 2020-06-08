<?php 
$cidades = array(
    'Nova York, NY' => '8.175.133',
    'Los Angeles, CA' => '3.792.621',
    'Chicago, IL' => '2.695.598',
    'Houston, TX' => '2.100.362',
    'Filadélfia, PA' => '1.526.006',
    'Phoenix, AZ' => '1.445.632',
    'San Antonio, TX' => '1.327.407',
    'San Diego, CA' => '1.307.402',
    'Dallas, TX' => '1.897.816',
    'San Jose, CA' => '945.942'
);

$tab = <<<TABCID
    <table border="1" width="30%">
    <tr><th colspan="2">Cidades</th></tr>
    <tr><th>Nome</th><th>População</th></tr>

TABCID;

print $tab;
foreach($cidades as $nom => $pop){
    print '<tr><td widht="70%">' . $nom . '</td><td align="right">' . $pop . '</td></tr>';
}

print '</table>';