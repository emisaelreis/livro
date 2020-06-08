<?php
/**
 * A leitura e/ou interação com arrays multidimensionais associativos é feita
 * com a função foreach() e de arrays multidimensionais numéricos é feita com
 * a função for()
 */
echo "Arrays Multidimensionais<br><br>";

$refeicoes = array( 'café da manhã' => ['Café','Leite','Pão','Enroladinho de queijo','Biscoito'],
                    'almoço' => ['Arroz','Feijão','Linguiça','Frango assado'],
                    'jantar' => ['Arroz','Feião','Frango','Suco de limão']);

echo 'Lendo array com foreach<br>';
foreach($refeicoes as $ref => $pratos){
    foreach($pratos as $key => $value){
        print  "$key, $value<br>";
    }
}
echo '<hr>';

$langs = [['Html','Css','JavaScript'],
          ['PHP','Python','Java','Ruby'],
          ['C','C+','C#','Assembly']];

echo $langs[0][0];

echo "Lendo array com foreach<br>";
foreach($langs as $lang){
    print $lang[0].'<br>';
    foreach($lang as $key => $value){
        print "$key: $value<br>";
    }
}

echo "<br><hr><br>Lendo array com for<br>";
for($i = 0, $qlangs = count($langs); $i < $qlangs; $i++){
    print '<b>'.$langs[0][$i].'</b><br>';
    for($c = 0, $qlan = count($langs[$i]); $c < $qlan; $c++){
        print $langs[$i][$c].'<br>';
    }
}