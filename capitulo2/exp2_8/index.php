<?php

    echo 'Preenchimento com zeros<br>';

    $num = 28;
    $cep = 65930000;

    echo 'Numero: '. $num .'<br>';
    echo 'Cep: ' . $cep .'<br>';
    echo '<br>';

    printf('Número preenchido com 8 zeros %08d', $num);
    echo '<br>';
    printf('Cep preenchido com 13 zeros %013d', $cep);
