<?php

$teclados = array(
    'T-TGK315-BLUE',
    'EXBOM',
    'Leadership',
    'Philips',
    'Motospeed Ck62',
    'Hawkon Tyranus',
    'Evolut Assault');

    
    echo '<style>';
    echo '.clsum { background-color:#6be18c; text-align:center }';
    echo '.clsdois { background-color:#37d764; text-align:center }';
    echo '</style>';
    echo '<table border="1" style="width:30%;">';
    echo '<tr><th colspan="2">Teclados</th></tr>';

    $cls = array('clsum','clsdois');
    $clsidx = 0;
    for($i = 0; $i < count($teclados); $i++){
        echo '<tr class="'.$cls[$i % 2].'"><td>' . $teclados[$i] . '</td></tr>';

    }
    echo '</table>';
    