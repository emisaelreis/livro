<?php

    echo '<h3> Função ucwords()</h3>';
    echo 'A função ucwords() coloca em maiúscula a primeira letra de cada palavra da string.';
    
    echo '<br><br>';

    $nome = 'emisael cavalcante da silva reis';

    echo 'Nome: ' . $nome . '<br>';

    echo 'Nome com a função upwords(): <b>' . ucwords($nome) . '</b>';