<?php
    echo '<h3>Função substr()</h3>';
    echo 'A função substr() permite extrair (copiar) apenas uma parte de uma string. ' .
         'Ela possue três parametros: a string a ser manipulada, a posição inicial da string a ser extraída, e o número de bytes (caracteres) a ser estraído.' .
         'Obs: A posição inícial de uma string para a função substr é 0 (zero)';
    echo '<br><br>';

    $nome = 'Emisael Cavalcante da Silva Reis';

    echo 'Nome: ' . $nome. '<br>';

    echo 'Início do nome usando substr( $nome, 0, 4): ' . substr($nome, 0, 4);
    echo '<br><br>';
    
    echo 'Se a função substr() for usada passando apénas um parâmetro para controle de posição com valor negativo, o resultado será a parte final da string,
    contando a partir do valor informado<br>';
    echo 'Exemplo: substr("Emisael Cavalcante da Silva Reis", -9")<br>';
    echo 'Resuldado: ' . substr($nome,-9);
    echo '<br><br>';
    echo 'Quando se omite o último argumento, substr() retornará tudo que houver desde a posição inicial (seja positivo ou negativo) até o final da string.';
    echo '<br><br>';
    
    echo 'Exemplo: substr("Emisael Cavalcante da Silva Reis",19")<br>';
    echo 'Resuldado: ' . substr($nome,19);

