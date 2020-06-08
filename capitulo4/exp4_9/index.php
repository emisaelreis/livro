<?php

$teclados = array(
    'T-TGK315-BLUE' => '209.90',
    'EXBOM' => '58.90',
    'Leadership' => '109.90',
    'Philips' => '187.90',
    'Motospeed Ck62' => '231.03',
    'Hawkon Tyranus' => '157.32',
    'Evolut Assault' => '191.90');

    
    echo '<style>';
    echo '.clsum { background-color:#6be18c; }';
    echo '.clsdois { background-color:#37d764; }';
    echo '</style>';
    echo '<table border="1" style="width:30%;">';
    echo '<tr><th colspan="2">Teclados</th></tr>';

    $cls = array('clsum','clsdois');
    $clsidx = 0;
    foreach($teclados as $marca => $preco){
        echo '<tr class="'.$cls[$clsidx].'"><td>' . $marca . '</td><td align="right">' . $preco . '</td></tr>';
        $clsidx = 1 - $clsidx;

    }
    echo '</table>';
    
    echo '<br><hr style="width:30%;" align="left"><br>';
    
    foreach($teclados as $tec => $val){
        $teclados[$tec] = $val * 2;
    }

    echo '<table border="1" style="width:30%;">';
    echo '<tr><th colspan="2">Teclados</th></tr>';

    $cls = array('clsum','clsdois');
    $clsidx = 0;
    foreach($teclados as $marca => $preco){
        echo '<tr class="'.$cls[$clsidx].'"><td>' . $marca . '</td><td align="right">' . $preco . '</td></tr>';
        $clsidx = 1 - $clsidx;

    }
    echo '</table>';