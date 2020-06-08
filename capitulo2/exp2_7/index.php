<?php

    echo "Formatando o texto - printf() 01 <br>";

    $preco = 5;
    $tax = 0.075;
    echo 'Preço: ' . $preco .'<br>';
    echo 'Taxa: ' . $tax .'<br>';
    
    printf("O prato custa %.2f", $preco * (1 + $tax));