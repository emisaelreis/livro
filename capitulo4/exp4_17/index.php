<?php
/*
    A função array_search() é semelhante  a in_array, mas quando encontra um elemento
    retorna sua chave em vez de verdadeiro.
*/
echo 'Função array_search()<br><br>';
$livros = array('Salomão' => 'Provérbios', 'Davi' => 'Salmos', 'Mateus' => 'Evangelho', 'Paulo' => 'Carta');

print array_search('Salmos',$livros);
