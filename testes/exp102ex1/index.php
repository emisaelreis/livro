<?php
 
echo "Arrays Multidimensionais Associativos<br><br>";

$estados = array("Maranhão" => ['São Luís','Imperatriz','Palmas','Açailandia'],
                "Piauí" =>['Terezina','Picus','Paquetá','Oeiras'],
                "Ceará" => ['Fortaleza','Sobral','Quixadá','Crateús'],
                "Rio Grade do Norte" => ['Natal','Mossoré','Caicó','Parnamirim'],
                "Paraíba" => ['João Pessoa','Campina Grande','Patos','Guarabira'],
                "Pernambuco" => ['Recife','Jaboatão dos Guararapes','Caruaru','Serra Talhada'],
                "Alagoas" => ['Maceió','Arapira','Campo Alegre','Viçosa'],
                "Sergipe" => ['Aracajú','Lagarto','Itabaiana','Japaratuba'],
                "Bahia" => ['Salvador','Feira de Santana','Camaçari','Xique-Xique']
                );

$nomes = array();
echo '<table width="80%" border="0">';
foreach($estados as $nom => $cidades){
    print '<tr><th colspan="4">'.$nom.'</th></tr>';
    print '<tr align="center"><td width="25%">' . implode('</td><td width="25%">',$cidades) . '</td></tr>';
}
echo '</table>';

echo '<br><hr><br>';
foreach($estados as $nom => $cidades){
    print '<b>'.$nom.': </b>';
    $i = 1;
    foreach($cidades as $id => $cid){
        print $cid;
        $i++;
        if($i < count($cidades))
            print ', ';
        if ($i == 4)
            print ' e ';
    }
    print '.<br>';
}
