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
 $P_NY = 0;
 $P_CA = 0;
 $P_IL = 0;
 $P_PA = 0;
 $P_AZ = 0;
 $P_TX = 0;

foreach($cidades as $nom => $pop){
    print '<tr><td widht="70%">' . $nom . '</td><td align="right">' . $pop . '</td></tr>';
    $est = explode(', ',$nom);
    if($est[1] == 'NY')
        $P_NY += $pop;
    if($est[1] == 'CA')
        $P_CA += $pop;
    if($est[1] == 'IL')
        $P_IL += $pop;
    if($est[1] == 'PA')
        $P_PA += $pop;
    if($est[1] == 'AZ')
        $P_AZ += $pop;
    if($est[1] == 'TX')
        $P_TX += $pop;
}

print "<tr><td>NY</td><td align='right'>$P_NY</td></tr>";
print "<tr><td>CA</td><td align='right'>$P_CA</td></tr>";
print "<tr><td>IL</td><td align='right'>$P_IL</td></tr>";
print "<tr><td>PA</td><td align='right'>$P_PA</td></tr>";
print "<tr><td>AZ</td><td align='right'>$P_AZ</td></tr>";
print "<tr><td>TX</td><td align='right'>$P_TX</td></tr>";

print '</table>';


/**
 * NY
 * CA
 * IL
 * PA
 * AZ
 * TX
 */