<?php

$produtos = array('Processador' => 15, 'Motherboard' => 16, 'Fonte ATX' => 8, 'Monitor' => 18, 'Memŕoia' => 12);

print '<table border="1">';
print '<tr><th colspan="2">Estoque</th></tr>';
print '<tr><th>Produto</th><th>Qtde</th></tr>';
foreach($produtos as $nom => $qtd)
{
    print "<tr><td>$nom</td><td align='right'>$qtd</td></tr>";
}
print '</table>';