<?php
$letters[0] = 'A';
$letters[1] = 'B';
$letters[3] = 'D';
$letters[2] = 'C';
echo 'Ordem em que os elementos foram adicionados<br>';
foreach($letters as $letter){
    print $letter;
}

echo '<br><br>';
echo 'Ordem dos índices noméricos<br>';
for($i = 0, $num_letters = count($letters); $i < $num_letters; $i++){
    print $letters[$i];
}

