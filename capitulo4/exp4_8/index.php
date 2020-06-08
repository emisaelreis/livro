<?php

$teclados = array(
    'T-TGK315-BLUE' => '209.90',
    'EXBOM' => '58.90',
    'Leadership' => '109.90',
    'Philips' => '187.90',
    'Motospeed Ck62' => '231.03',
    'Hawkon Tyranus' => '157.32',
    'Evolut Assault' => '191.90');

    echo '<table border="1" style="width:30%;">';
    echo '<tr><th colspan="2">Teclados</th></tr>';
    foreach($teclados as $marca => $preco){
        echo '<tr><td>' . $marca . '</td><td align="right">' . $preco . '</td></tr>';
    }
    echo '</table>';