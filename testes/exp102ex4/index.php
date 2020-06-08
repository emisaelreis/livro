<?php

echo 'Alterando valores em um array Multidimensional Numérico<br>';

$ranklang =[
['Java','1','2','1','2','3','-','-','-'],
['C','2','1','2','1','1','2','1','1'],
['Python','3','7','6','7','23','22','-','-'],
['C++','4','4','4','3','2','1','3','9'],
['C#','5','5','5','8','8','-','-','-'],
['JavaScript','6','8','8','9','5','-','-','-'],
['PHP','7','6','3','4','25','-','-','-'],
['SQL','8','-','-','-','-','-','-','-'],
['Swift','9','95','-','-','-','-','-','-'],
['Ruby','10','11','9','23','31','-','-','-'],
['Objective-C','12','3','14','37','-','-','-','-'],
['Lisp','28','21','15','13','7','5','4','2'],
['Fortran','29','27','21','14','16','4','2','12'],
['Ada','34','26','24','16','15','6','5','3'],
['Pascal','238','15','12','46','12','3','7','5']];

for($l = 0, $ql = count($ranklang); $l < $ql; $l++){
    for($c = 0, $qc = count($ranklang[$l]); $c < $qc; $c++){
        print $ranklang[$l][$c];
    }
    print '<br>';
}

print "<br><hr><br> Montando tabela de uma array numérico<br>";
print '<table border="2"';
print '<tr><th>Programming Language</th><th>2020</th><th>2015</th><th>2010</th><th>2005</th><th>2000</th><th>1995</th><th>1990</th><th>1985</th></tr>';
for($l = 0, $ql = count($ranklang); $l < $ql; $l++){
    print '<tr><td>'. implode('</td><td align="center">',$ranklang[$l]);    
}
print '</table>';

// Alterando valores
for($l = 0, $ql = count($ranklang); $l < $ql; $l++){
    for($c = 0, $qc = count($ranklang[$l]); $c < $qc; $c++){
        if($l == 7 && $c == 0)
        $ranklang[$l][$c] = 'Cobol';
        if($l == 7 && $c > 0)
        $ranklang[$l][$c] = $l+$c;
    }
}
$css = <<<CSS_BLOCK
    <style>
        .lin0 {
            background-color: #c9ded3;
        }
        .lin1 {
            background-color: #e9edf1;
        }
    </style>
CSS_BLOCK;     
   
print $css; 
print "<br><hr><br> Montando tabela de uma array numérico<br>";
print '<table border="2"';
print '<tr><th>Programming Language</th><th>2020</th><th>2015</th><th>2010</th><th>2005</th><th>2000</th><th>1995</th><th>1990</th><th>1985</th></tr>';
$idc = 0;
for($l = 0, $ql = count($ranklang); $l < $ql; $l++){
    print '<tr class="lin'.$idc.'"><td>'. implode('</td><td align="center">',$ranklang[$l]);  
    $idc = 1 - $idc;  
}
print '</table>';
