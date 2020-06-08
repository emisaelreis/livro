<?php 
$cidades = array(
    'Nova York, NY' => '8175133',
    'Los Angeles, CA' => '3792621',
    'Chicago, IL' => '2695598',
    'Houston, TX' => '2100362',
    'Filadélfia, PA' => '1526006',
    'Phoenix, AZ' => '1445632',
    'San Antonio, TX' => '1327407',
    'San Diego, CA' => '1307402',
    'Dallas, TX' => '1897816',
    'San Jose, CA' => '945942'
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

print '<br><hr><br>';

print 'Ordenando por População asort()';
asort($cidades);


print $tab;
foreach($cidades as $nom => $pop){
    print '<tr><td widht="70%">' . $nom . '</td><td align="right">' . $pop . '</td></tr>';
}
print '</table>';

print '<br><hr><br>';

print 'Ordenando pelos nomes das cidades - ksort()';
ksort($cidades);

print $tab;
foreach($cidades as $nom => $pop){
    print '<tr><td widht="70%">' . $nom . '</td><td align="right">' . $pop . '</td></tr>';
}
print '</table>';