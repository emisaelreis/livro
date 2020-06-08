<?php

/**
 * Números e notas de alunos
 */

$boletin = [
    [1 => ['Portuguê' => '9,5', 'Matemática' => '9,0', 'Química' => '7,5', 'Física' => '9,0', 'Inglês' => '9,5']],
    [2 => ['Portuguê' => '7,5', 'Matemática' => '9,5', 'Química' => '9,5', 'Física' => '9,5', 'Inglês' => '9,0']],
    [3 => ['Portuguê' => '9,0', 'Matemática' => '7,5', 'Química' => '9,0', 'Física' => '7,5', 'Inglês' => '9,5']],
    [4 => ['Portuguê' => '9,5', 'Matemática' => '9,5', 'Química' => '8,5', 'Física' => '7,5', 'Inglês' => '9,0']],
    [5 => ['Portuguê' => '7,5', 'Matemática' => '9,0', 'Química' => '9,5', 'Física' => '9,5', 'Inglês' => '10,0']]
];

print '<table border="1">';
print '<tr><th colspan="6">Boletim</th></tr>';
for($l = 0, $ql = count($boletin); $l < $ql; $l++){
    foreach($boletin[$l] as $num => $matnotas){
        print "<tr><td>Alunuo  $num</td>";
        foreach($matnotas as $mat => $nota){
            print "<td align='right'>$mat $nota</td>";
        }
        print '</tr>';
    }
}
print '</table>';