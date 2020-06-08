<?php

$family = array(['nome' => 'Maria de Jesus Pereira Cavalcante', 'Idade' => 61, 'Parentesco' => 'Mãe'],
                ['nome' => 'Emisael Cavalcante da Silva Reis', 'Idade' => 40, 'Parentesco' => 'Eu'],
                ['nome' => 'Nelma dos Santos Reis Cavalcante', 'Idade' => 28, 'Parentesco' => 'Esposa'],
                ['nome' => 'Eliselma Cavalcante da Silva', 'Idade' => 39, 'Parentesco' => 'Irmã'],
                ['nome' => 'Dijelma Cavalcante da Silva', 'Idade' => 34, 'Parentesco' => 'Irmã']
            );

print '<b>Membros da Família</b><br>';
print '<table border="1">';
print '<tr><td>Nome</td><td>Idade</td><td>Parentesco</td></tr>';
foreach($family as $memb){
    print "<tr><td>" . implode('</td><td align="center">', $memb) . '</td></tr>';
}
print '</table>';