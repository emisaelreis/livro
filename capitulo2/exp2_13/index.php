<?php 

    $texto = '<h3> Função str_replace()</h3>'.
        'A função str_replace() altera partes de uma string. Ela procura uma substring e a '.
        'substitue por uma nova string.<br>' .
        'Exemplo:<br>' . 
        'str_replace("Reis","Kings", "Emisael Cavalcante da Silva Reis")<br>' . 
        'A palavra "Reis" é substituída pela palavra "Kings"<br>';
    echo $texto;

    $nome = 'Emisael Cavalcante da Silva Reis';
    echo str_replace('Reis','Kings', $nome);